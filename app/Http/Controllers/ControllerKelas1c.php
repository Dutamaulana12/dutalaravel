<?php

namespace App\Http\Controllers;

use App\Model_Kelas1c;

use Illuminate\Http\Request;

class ControllerKelas1c extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas1c = Model_Kelas1c::paginate(6);
        return view('kelas1c.kelas1c',['kelas1c'=> $kelas1c]);
    }


    public function fkelas1c() //method index
    {
        $fkelas1c = Model_Kelas1c::paginate(6);
        return view('frontend.fkelas1c',['fkelas1c'=> $fkelas1c]);
    }

    public function carifkelas1c(request $request)
    {
        $keyword = $request->get('keyword');
        $fkelas1c = Model_Kelas1c::all();

       if ($keyword) {
       $fkelas1c = Model_Kelas1c::where("nama","LIKE","%$keyword%")->get();
    }

        return view ('frontend.carifkelas1c', compact('fkelas1c'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas1c.tambah_kelas1c');
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
    
        Model_Kelas1c::create($input);
    
        return redirect('/kelas1c');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Kelas1c $kelas1c)
    {
        return view('kelas1c.lihat_kelas1c',compact ('kelas1c'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Kelas1c $kelas1c)
    {
        return view('kelas1c.edit_kelas1c',compact('kelas1c'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Model_Kelas1c $kelas1c)
    {
        Model_Kelas1c::where('id', $kelas1c->id)
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
  
       $kelas1c->update($input);
  
    return redirect('/kelas1c');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Kelas1c $kelas1c)
    {
        Model_Kelas1c::destroy($kelas1c->id);
        return redirect('/kelas1c');
    }
}
