<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->AdsModel = new Ad();
    // }
    
    public function index()
    {
        $ads = Ad::simplepaginate(10);
        return view('ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ads.create');
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
            'pemilik' => 'required',
            'durasi' => 'required',
            'konten'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'keterangan' => 'required'
        ]);

        $imageName = time()."-".$request->konten->getClientOriginalName();

        $request->konten->storeAs('images', $imageName);
        
        Ad::create([
        'pemilik' => $request->pemilik,
        'durasi' => $request->durasi,
        'konten' => $imageName,
        'keterangan' => $request->keterangan,
        ]);

        return redirect('/ads')->with('status', 'Data Updated');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        //
        return view('ads.show', compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        //
        return view('ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        $request->validate([
            'pemilik' => 'required',
            'durasi' => 'required',
            'konten'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'keterangan' => 'required'
        ]);
        
        $imageName = time()."-".$request->konten->getClientOriginalName();

        $request->konten->storeAs('images', $imageName);

        Ad::where('id', $ad->id)
        ->update([
            'pemilik' => $request->pemilik,
            'durasi' => $request->durasi,
            'konten' => $imageName,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/ads')->with('status', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        Ad::destroy($ad->id);
        return redirect('/ads')->with('status', 'Data Deleted!');
    }
}