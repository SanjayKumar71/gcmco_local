<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\UserDocument;
use App\Models\User;
use App\Models\UserCard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showPastSession($id){
        
        $pastSessionDetail = Booking::with('getProgramSession.programs.category')->where('user_id','=',$id)->where('status','=','1')->whereHas('getProgramSession',function($q){
            $currentDate = date("Y-m-d");
            $q->where('date', '<', $currentDate);
        })->get();
        return response()->json($pastSessionDetail);
    }

    public function showUpcomingSession($id){
        
        $upcomingSessionDetail = Booking::with('getProgramSession.programs.category')->where('user_id','=',$id)->where('status','=','1')->whereHas('getProgramSession',function($q){
            $currentDate = date("Y-m-d");
            $q->where('date', '>=', $currentDate);
        })->get();
        return response()->json($upcomingSessionDetail);
    }

    public function showCanceledSession($id){
        
        $canceledSessionDetail = Booking::with('getProgramSession.programs.category')->where('user_id','=',$id)->where('status','=','2')->get();
        return response()->json($canceledSessionDetail);
    }

    public function cancelSession($id){
        $user_id = Auth::user()->id;
        $user = Booking::where('program_session_id', $id)->where('user_id', $user_id)->get();
        $user[0]->status = 2;
        $user[0]->save();
        return redirect()->back()->with('success','Session Cancelled successfully.');
    }

    public function fileUploadPost(Request $request){
        
        $data = $request->validate([
            'file' => 'required|mimes:png,jpeg,jpg,pdf,csv,ppt,pptx,xls,xlsx,doc,docx,txt'
        ]);
        $name = explode('.', $request->file->getClientOriginalName())[0];
        $fileName = $name.'_'.time().'.'.$request->file->extension();
        $request->file->move(uploadsDir(), $fileName);
        
        $user_id = Auth::user()->id;
        
        $data['user_id'] = $user_id;
        $data['file']    = $fileName;

        $uploadedFile = UserDocument::create($data);
        return back()
            ->with('success','You have successfully uploaded file.')
            ->with('uploadedFile',$uploadedFile);
    }

    public function getFileDetails(){
        $user_id = Auth::user()->id;
        $documentDetail = UserDocument::where('user_id','=',$user_id)->get();
        return response()->json($documentDetail);
    }

    public function downloadFile($id){
        $file = UserDocument::where('id',$id)->first();
        $pathofFile = uploadsDir().''.$file->file;
        return response()->download($pathofFile);
    }

    public function getSavedCardDetail(){
        $user_id = Auth::user()->id;
        $userCardDetail = UserCard::where('user_id','=',$user_id)->get();
        return response()->json($userCardDetail);
    }

    public function makeDefault(Request $request)
    {
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), [
                'stripe_source_id' => 'required'
            ]);

            if ($validator->fails()) {
                return $this->respondBadRequest($validator->errors());
            }
            $user_id = Auth::user()->id;
            $user = User::where('id',$user_id)->first();
            
            $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));

            $user->cardMakeUndefaultAll();

            $update = $stripe->customers->update(
                $user->stripe_customer_id,
                [
                    'default_source' => $request->stripe_source_id
                ]
            );

            $user->cardMakeDefaultBySourceId($update->default_source);

            DB::commit();
            return redirect()->back()->with('success', 'Card default set has been successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}
