<?php

namespace App\Http\Controllers;

use App\Models\Karte;
use Illuminate\Http\Request;

class KarteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Karte::all(); 
        return $data;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Karte::create($request->all());
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Karte::findOrFail($id);
        return $data;


        /**
         * SELECT broj_karte, tura_id, putnik_id
        *FROM karte 
        *    JOIN tura on (tura.id = karte.tura_id)
        *    JOIN putnici on (putnici.id = karte.putnik_id)
        *WHERE  karte.id = ".$id.'  ;'));

         * 
         */
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
        $karte = Karte::find($id);
        $karte->update($request->all()); 
        return $karte;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karte = Karte::findOrFail($id);
        $karte->delete($id);
        return'{"success":"Uspjesno ste izbrisali kartu."}';
    }
}