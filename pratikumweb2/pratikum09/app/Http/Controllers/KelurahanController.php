<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelurahan = Kelurahan::get();
        return view('kelurahan.index', compact('kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new pasien
        return view('kelurahan.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'nama' => 'required|string',
            'kecamatan_id' => 'required|numeric',
        ]);

        //if valid save the data
        Kelurahan::create([
            'nama' => $request->nama,
            'kecamatan_id' => $request->kecamatan_id,
        ]);

        return redirect()
            ->route('kelurahan.index')
            ->with('success', 'Kelurahan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelurahan $kelurahan)
    {
        //Pass the Kelurahan instance to the view
        return view('kelurahan.show', compact('kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelurahan $kelurahan)
    {
        // // Pass the Kelurahan instance to the view
        return view('kelurahan.edit', compact('kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelurahan $kelurahan)
    {
        // Update the Kelurahan instance
         $kelurahan->update($request->all());

         // Redirect to the index page with a success message
         return redirect()->route('kelurahans.index')->with('success', 'Kelurahan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelurahan $kelurahan)
    {
        //Delete the Kelurahan instance
         $kelurahan->delete();

         // Redirect back to the index page with a success message
         return redirect()->route('kelurahans.index')->with('success', 'Kelurahan deleted successfully');
    }
}