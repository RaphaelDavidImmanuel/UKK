<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kamar::all();
        $ti = DB::table('Kamars')->select(DB::raw('MAX(RIGHT(no_kamar,7)) as kode'));
            $tt = "";
            if($ti->count()>0){
                foreach($ti->get() as $t){
                    $tkt = ((int)$t->kode)+1;
                    $tt = sprintf("%07s", $tkt);
                }
            }else{
                $tt = "0000001";
            }
        return view('admin.kamar',compact('data','tt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKamarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'no_kamar' => 'required',
            'foto' => 'required',
            'harga' => 'required',
            'tipe' => 'required'
        ]);

        $data = Kamar::create($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('imageagenda/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('kamar.index')->with('success', 'Create Success !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = Kamar::find($id);
        $data->update($request->all());
        
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('imageagenda/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('kamar.index')->with('success', 'Data Berhasil Diubah!!!');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKamarRequest  $request
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kamar::find($id);
        return view('edit', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kamar::find($id);
        $data->delete();
        return redirect()->route('kamar.index');
    }
}
