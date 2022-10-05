<?php

namespace App\Http\Controllers;

use App\Model_Kelas1a;
use Illuminate\Http\Request;

class ControllerKelas1a extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas1a = Model_Kelas1a::paginate(6);
        return view('kelas1a.kelas1a',['kelas1a'=> $kelas1a]);
    }

    public function fkelas1a() //method index
    {
        $fkelas1a = Model_Kelas1a::paginate(6);
        return view('frontend.fkelas1a',['fkelas1a'=> $fkelas1a]);
    }

    public function carifkelas1a(request $request)
    {
        $keyword = $request->get('keyword');
        $fkelas1a = Model_Kelas1a::all();

       if ($keyword) {
       $fkelas1a = Model_Kelas1a::where("nama","LIKE","%$keyword%")->get();
    }

        return view ('frontend.carifkelas1a', compact('fkelas1a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas1a.tambah_kelas1a');
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
            'nama' => 'required',
            'kelas' => 'required',
            'msoffice' => 'required',
            'photoshop' => 'required',
            'laravel' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Model_Kelas1a::create($input);
    
        return redirect('/kelas1a');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Kelas1a $kelas1a)
    {
        return view('kelas1a.lihat_kelas1a',compact ('kelas1a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Kelas1a $kelas1a)
    {
        return view('kelas1a.edit_kelas1a',compact('kelas1a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Model_Kelas1a $kelas1a)
    {
        Model_Kelas1a::where('id', $kelas1a->id)
        ->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'msoffice' => $request->msoffice,
            'photoshop' => $request->photoshop,
            'laravel' => $request->laravel,
            'image' => $request->image
        ]);
  
        $input = $request->all();
  
       if ($image = $request->file('image')) {
           $destinationPath = 'image/';
           $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
           $image->move($destinationPath, $profileImage);
           $input['image'] = "$profileImage";
       }else{
           unset($input['image']);
       }
  
       $kelas1a->update($input);
  
    return redirect('/kelas1a');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Kelas1a $kelas1a)
    {
        Model_Kelas1a::destroy($kelas1a->id);
        return redirect('/kelas1a');
    }
}
