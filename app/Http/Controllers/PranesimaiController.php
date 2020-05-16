<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // DB valdymas
use Illuminate\Support\Facades\Auth; // Prisijungimo valdymas
use App\Pranesimai; // Mūsų naudojamas modelis 

class PranesimaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // nurodoma, kad prieš naudojant šio valdiklio metodus, 
                                   // pirmiausia turi būti prisijungęs vartotojas 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pranesimais = DB::table('pranesimais')
            ->leftJoin('users', 'users.id', '=', 'pranesimais.uid')
            ->select('pranesimais.*', 'users.name')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pranesimai', compact('pranesimais')); // perduoda juos į išvedimą
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            // Vartotojas prisijungę. Papildoma apsauga
            $id = Auth::id(); // gaunamas prisijungusio vartotojo id
            // formos validacija
            $request->validate([
                'pranesimai_pavadinimas'=>'required',
            ]);
            // paruošiame duomenų įterpimui į DB
            $pranesimas = new Pranesimai([
                'uid' => $id,
                'pavadinimas' => $request->get('pranesimai_pavadinimas'),
                'tekstas' => $request->get('pranesimai_tekstas'),
            ]);
            // įrašome į DB
            $pranesimas->save();
            // nukreipiame atgal į pranešimų sarašą
            return redirect('/pranesimai')->with('success', 'Pranešimas sukurtas');
        } else {
            // Vartotojas neprisijungęs
            return redirect('/')->with('error', 'Būtina prisijungti');
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
