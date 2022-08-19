<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->PhotosModel = new Photo();
    // }
    
    public function index()
    {
        //
        $photos = Photo::simplepaginate(10);
        return view('photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('photos.create');
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
            'images'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'caption' => 'required',
            'credit' => 'required'
        ]);

        $imageName = time()."-".$request->images->getClientOriginalName();

        $request->images->storeAs('images', $imageName);

        Photo::create([
            'images' => $imageName,
            'caption' => $request->caption,
            'credit' => $request->credit
        ]);
        return redirect('/photos')->with('status', 'Data Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
        return view('photos.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
        return view('photos.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'images'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'caption' => 'required',
            'credit' => 'required'
        ]);

        $imageName = time()."-".$request->images->getClientOriginalName();

        $request->images->storeAs('images', $imageName);

        Photo::where('id', $photo->id)
        ->update([
            'images' => $imageName,
            'caption' => $request->caption,
            'credit' => $request->credit
        ]);
        return redirect('/photos')->with('status', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        Photo::destroy($photo->id);
        return redirect('/photos')->with('status', 'Data Deleted!');
    }
}