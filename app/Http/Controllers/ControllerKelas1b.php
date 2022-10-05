<?php

namespace App\Http\Controllers;

use App\Model_Kelas1b;
use Illuminate\Http\Request;

class ControllerKelas1b extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas1b = Model_Kelas1b::paginate(6);
        return view('kelas1b.kelas1b',['kelas1b'=> $kelas1b]);
    }

    public function fkelas1b() //method index
    {
        $fkelas1b = Model_Kelas1b::paginate(6);
        return view('frontend.fkelas1b',['fkelas1b'=> $fkelas1b]);
    }

    public function carifkelas1b(request $request)
    {
        $keyword = $request->get('keyword');
        $fkelas1b = Model_Kelas1b::all();

       if ($keyword) {
       $fkelas1b = Model_Kelas1b::where("nama","LIKE","%$keyword%")->get();
    }

        return view ('frontend.carifkelas1b', compact('fkelas1b'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas1b.tambah_kelas1b');
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
    
        Model_Kelas1b::create($input);
    
        return redirect('/kelas1b');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Kelas1b $kelas1b)
    {
        return view('kelas1b.lihat_kelas1b',compact ('kelas1b'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Kelas1b $kelas1b)
    {
        return view('kelas1b.edit_kelas1b',compact('kelas1b'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Model_Kelas1b $kelas1b)
    {
        Model_Kelas1b::where('id', $kelas1b->id)
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
  
       $kelas1b->update($input);
  
    return redirect('/kelas1b');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Kelas1b $kelas1b)
    {
        Model_Kelas1b::destroy($kelas1b->id);
        return redirect('/kelas1b');
    }
}
