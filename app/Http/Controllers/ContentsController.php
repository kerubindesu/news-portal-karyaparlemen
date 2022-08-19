<?php

namespace App\Http\Controllers;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function __construct()
    {
        $this->Content = new Content();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $contents = Content::join('categories', 'contents.id_category', '=', 'categories.id_category')->select('categories.*', 'contents.id', 'contents.title', 'contents.description', 'contents.id_category as id_category', 'contents.sub_category', 'contents.trending', 'contents.images', 'contents.caption', 'contents.credit', 'contents.created_at')->simplepaginate(10);
        $data = [
            'contents' => $this->Content->allData(),
        ];
        return view('contents.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'categories' => $this->Content->categories(),
        ];
        return view('contents.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'description' => 'required',
            'article' => 'required',
            'id_category' => 'required',
            'sub_category' => 'required',
            'trending' => 'required',
            'caption' => 'required',
            'credit' => 'required'
        ]);

        $imageName = time()."-".$request->images->getClientOriginalName();

        $request->images->storeAs('images', $imageName);

        Content::create([
            'title' => $request->title,
            'images' => $imageName,
            'description' => $request->description,
            'article' => $request->article,
            'id_category' => $request->id_category,
            'sub_category' => $request->sub_category,
            'trending' => $request->trending,
            'caption' => $request->caption,
            'credit' => $request->credit
        ]);

        return redirect('/contents')->with('status', 'Data Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        return view('contents.show', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        $data = [
            'categories' => $this->Content->categories(),
        ];
        return view('contents.edit', $data, compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $request->validate([
            'title' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'description' => 'required',
            'article' => 'required',
            'id_category' => 'required',
            'sub_category' => 'required',
            'trending' => 'required',
            'caption' => 'required',
            'credit' => 'required'
        ]);

        $imageName = time()."-".$request->images->getClientOriginalName();

        $request->images->storeAs('images', $imageName);

        Content::where('id', $content->id)
            ->update([
                'title' => $request->title,
                'images' => $imageName,
                'description' => $request->description,
                'article' => $request->article,
                'id_category' => $request->id_category,
                'sub_category' => $request->sub_category,
                'trending' => $request->trending,
                'caption' => $request->caption,
                'credit' => $request->credit
            ]);
        return redirect('/contents')->with('status', 'Data Updated');
    }

    // Function Search / Pencarian
    public function cari(Request $request)
    {
        //get the general information about the website
        $cari = Content::query()->firstOrFail();

        $key = trim($request->get('cari'));

        $posts = Content::query()
            ->where('title', 'like', "%{$key}%")
            //->orWhere('title', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->simplepaginate(10);

        //get all the categories
        $categories = Content::all();

        //get all the tags
        $tags = Content::all();

        //get the recent 5 posts
        $recent_posts = Content::query()

            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('contents.searchview', [
            'cari' => $cari,
            'key' => $key,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $content->forceDelete();
        return redirect('/contents')->with('status', 'Data Deleted!');
    }

}