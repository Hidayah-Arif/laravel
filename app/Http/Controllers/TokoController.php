<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_toko = \App\Models\toko::all();
        return view('beranda',['data_toko'=>$data_toko]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function RedirectCreate(Request $request)
    {
        return view('source.create');
    }

    public function create(Request $request)
    {
        \App\Models\toko::create($request->all());  
        return redirect('/data-toko');  
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $toko = \App\Models\toko::all();
        return view('source.edit',['data_toko'=>$toko]);
    }

    public function editForm($id){
        $toko = \App\Models\toko::find($id);
        return view('source.update',['toko'=>$toko]);
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
        $data_toko = \App\Models\toko::find($id);
        $data_toko->update($request->all());
        return redirect('/edit-data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $toko = \App\Models\toko::find($id);
        $toko->delete();
        return redirect('/delete-data');
    }

    public function RedirectDelete()
    {
        $data_toko = \App\Models\toko::all();
        return view('source.delete',['data_toko'=>$data_toko]);
    }
}
