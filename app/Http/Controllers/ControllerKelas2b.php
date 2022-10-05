<?php

namespace App\Http\Controllers;

use App\Model_Kelas2b;

use Illuminate\Http\Request;

class ControllerKelas2b extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas2b = Model_Kelas2b::paginate(6);
        return view('kelas2b.kelas2b',['kelas2b'=> $kelas2b]);
    }

    public function fkelas2b() //method index
    {
        $fkelas2b = Model_Kelas2b::paginate(6);
        return view('frontend.fkelas2b',['fkelas2b'=> $fkelas2b]);
    }

    public function carifkelas2b(request $request)
    {
        $keyword = $request->get('keyword');
        $fkelas2b = Model_Kelas2b::all();

       if ($keyword) {
       $fkelas2b = Model_Kelas2b::where("nama","LIKE","%$keyword%")->get();
    }

        return view ('frontend.carifkelas2b', compact('fkelas2b'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas2b.tambah_kelas2b');
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
    
        Model_Kelas2b::create($input);
    
        return redirect('/kelas2b');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Kelas2b $kelas2b)
    {
        return view('kelas2b.lihat_kelas2b',compact ('kelas2b'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Kelas2b $kelas2b)
    {
        return view('kelas2b.edit_kelas2b',compact('kelas2b'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Model_Kelas2b $kelas2b)
    {
        Model_Kelas2b::where('id', $kelas2b->id)
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
  
       $kelas2b->update($input);
  
    return redirect('/kelas2b');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Kelas2b $kelas2b)
    {
        Model_Kelas2b::destroy($kelas2b->id);
        return redirect('/kelas2b');
    }
}
