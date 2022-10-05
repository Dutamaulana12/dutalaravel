<?php

namespace App\Http\Controllers;

use App\Model_Kelas2a;

use Illuminate\Http\Request;

class ControllerKelas2a extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas2a = Model_Kelas2a::paginate(6);
        return view('kelas2a.kelas2a',['kelas2a'=> $kelas2a]);
    }


    public function fkelas2a() //method index
    {
        $fkelas2a = Model_Kelas2a::paginate(6);
        return view('frontend.fkelas2a',['fkelas2a'=> $fkelas2a]);
    }

    public function carifkelas2a(request $request)
    {
        $keyword = $request->get('keyword');
        $fkelas2a = Model_Kelas2a::all();

       if ($keyword) {
       $fkelas2a = Model_Kelas2a::where("nama","LIKE","%$keyword%")->get();
    }

        return view ('frontend.carifkelas2a', compact('fkelas2a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas2a.tambah_kelas2a');
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
    
        Model_Kelas2a::create($input);
    
        return redirect('/kelas2a');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Kelas2a $kelas2a)
    {
        return view('kelas2a.lihat_kelas2a',compact ('kelas2a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Kelas2a $kelas2a)
    {
        return view('kelas2a.edit_kelas2a',compact('kelas2a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Model_Kelas2a $kelas2a)
    {
        Model_Kelas2a::where('id', $kelas2a->id)
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
  
       $kelas2a->update($input);
  
    return redirect('/kelas2a');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Kelas2a $kelas2a)
    {
        Model_Kelas2a::destroy($kelas2a->id);
        return redirect('/kelas2a');
    }
}
