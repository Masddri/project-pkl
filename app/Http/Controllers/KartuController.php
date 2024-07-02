<?php

namespace App\Http\Controllers;

use App\Models\Kartu;
use Illuminate\Http\Request;

class KartuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartu = Kartu::latest()->get();
        return view('kartu.index', compact('kartu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kartu =Kartu::all();
        return view('kartu.create', compact('kartu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_kartu' => 'required',
            'nomor' => 'required',
            'total' => 'required',
        ]);

        $kartu = new Kartu();
        $kartu->nama_kartu = $request->nama_kartu;
        $kartu->nomor = $request->nomor;
        $kartu->total = $request->total;
        $kartu->save();

        return redirect()->route('kartu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kartu  $kartu
     * @return \Illuminate\Http\Response
     */
    public function show(Kartu $kartu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kartu  $kartu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kartu = Kartu::findOrFail($id);
        return view('kartu.edit', compact('kartu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kartu  $kartu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_kartu' => 'required',
            'nomor' => 'required',
            'total' => 'required',
        ]);

        $kartu = Kartu::findOrFail($id);
        $kartu->nama_kartu = $request->nama_kartu;
        $kartu->nomor = $request->nomor;
        $kartu->total = $request->total;
        $kartu->save();

        return redirect()->route('kartu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kartu  $kartu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kartu = Kartu::findOrFail($id);
        $kartu->delete();

        return redirect()->route('kartu.index');
    }
}
