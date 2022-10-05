<?php

namespace App\Http\Controllers;

use App\Model_Kelas2c;

use Illuminate\Http\Request;

class ControllerKelas2c extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas2c = Model_Kelas2c::paginate(6);
        return view('kelas2c.kelas2c',['kelas2c'=> $kelas2c]);
    }

    public function fkelas2c() //method index
    {
        $fkelas2c = Model_Kelas2c::paginate(6);
        return view('frontend.fkelas2c',['fkelas2c'=> $fkelas2c]);
    }

    public function carifkelas2c(request $request)
    {
        $keyword = $request->get('keyword');
        $fkelas2c = Model_Kelas2c::all();

       if ($keyword) {
       $fkelas2c = Model_Kelas2c::where("nama","LIKE","%$keyword%")->get();
    }

        return view ('frontend.carifkelas2c', compact('fkelas2c'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas2c.tambah_kelas2c');
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
    
        Model_Kelas2c::create($input);
    
        return redirect('/kelas2c');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Kelas2c $kelas2c)
    {
        return view('kelas2c.lihat_kelas2c',compact ('kelas2c'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Kelas2c $kelas2c)
    {
        return view('kelas2c.edit_kelas2c',compact('kelas2c'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Model_Kelas2c $kelas2c)
    {
        Model_Kelas2c::where('id', $kelas2c->id)
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
  
       $kelas2c->update($input);
  
    return redirect('/kelas2c');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Kelas2c $kelas2c)
    {
        Model_Kelas2c::destroy($kelas2c->id);
        return redirect('/kelas2c');
    }
}
