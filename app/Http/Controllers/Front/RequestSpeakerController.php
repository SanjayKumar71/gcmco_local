<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\RequestSpeaker;
use App\Models\Speaker;
use App\Models\SpeakingEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RequestSpeakerController extends Controller
{
    public function request_speaker(){
        $speakingEventData = SpeakingEvent::where('status', 1)->get();
        $speakerData       = Speaker::where('status', 1)->get();
        return view("front.request_speaker", compact('speakingEventData', 'speakerData'));
    }

    public function request_speaker_store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'first_name'     => 'required|regex:/^[a-zA-Z]+$/u',
            'church_name'    => 'required',
            'pastor_name'    => 'required',
            'address'        => 'required',
            'speaking_date'  => 'required',
            'speaking_event' => 'required',
            'speaker_id'     => 'required'
        ]);
 
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->except([
            '_token',
            '_method'
        ]);

        $data['speaking_event'] = json_encode($request->speaking_event);
        
        RequestSpeaker::create($data);
        return redirect()->back()->with('success', 'Your request submitted successfully!');
    }
}
