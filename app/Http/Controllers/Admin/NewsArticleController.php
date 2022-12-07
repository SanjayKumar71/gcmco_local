<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsArticle;
use Illuminate\Http\Request;

class NewsArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth:admin');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = NewsArticle::all();
        return view('admin.news_articles.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news_articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except([
            '_token',
            '_method',
            'file'
        ]);

        //move | upload file on server
        if ($request->hasfile('news_image') && $request->hasfile('news_image') != '') {
            $file      = $request->file('news_image');
            $extension = $file->getClientOriginalExtension(); // getting file extension
            $filename  = 'news_article-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);
            $data['news_image'] = $filename;
        }
        else {
            $filename = $request->previous_news_image;
        }

        NewsArticle::create($data);

        return redirect()
            ->route('admin.news_articles.index')
            ->with('success', 'News Article has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = NewsArticle::where('id', $id)->first();
        return view('admin.news_articles.show', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $records = NewsArticle::where('id', $id)->first();
        return view('admin.news_articles.edit', compact('records'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //check file if exists
        if ($request->hasfile('news_image') && $request->hasfile('news_image') != '') {
            //move | upload file on server
            $file = $request->file('news_image');
            $extension = $file->getClientOriginalExtension(); // getting news_image extension
            $filename = 'news_article-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $filename)
                && !empty($request->previous_news_image && file_exists(uploadsDir() . $request->previous_news_image))) {
                unlink(uploadsDir() . $request->previous_news_image);
            }
        } else {
            $filename = $request->previous_news_image;
        }

        $data = $request->except([
            '_token',
            '_method',
            'previous_news_image',
            'news_image',
        ]);

        $data['news_image'] = $filename;

        NewsArticle::where('id', $id)->update($data);

        return redirect()
            ->route('admin.news_articles.index')
            ->with('success', 'News Article updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsArticle = NewsArticle::findOrFail($id); // delete News Article

        if ($newsArticle->news_image != '' && file_exists(uploadsDir() . $newsArticle->news_image)) {
            unlink(uploadsDir() . $newsArticle->news_image);
        }

        $newsArticle->delete();

        return redirect()
            ->route('admin.news_articles.index')
            ->with('success', 'News Article removed successfully!');
    }
}
