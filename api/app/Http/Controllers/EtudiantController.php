<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_etd=Etudiant::all();
    //  return view('Etudiants.index',['students'=>$list_etd]);
        return response()->json($list_etd);
    }
    /**
     * Show the form for creating a new resource.
     */
//    public function create()
//    {
//        return view('Etudiants.create');
//    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $E=new Etudiant();
        $E->nom = $request->Nom;
        $E->prenom = $request->Prenom;
        $E->note = $request->Note;
        $E->save();
    //  return Redirect("/Etudiants");
        return response()->json($E);
    }

    /**
     * Display the specified resource.
     */
    public function show($id_etudiant)
    {
//        try{
//            Etudiant::findOrFail($id_etudiant);
//            return view('Etudiants.show',['etudiant'=>Etudiant::findOrFail($id_etudiant)]);
//        }
//        catch (ModelNotFoundException){
//            return view('Etudiants.error');
//        }
//        return view('Etudiants.edit',['etudiant'=>Etudiant::find($id_etudiant)]);
        return response()->json(Etudiant::find($id_etudiant));
    }

    /**
     * Show the form for editing the specified resource.
     */
//    public function edit($id_etudiant)
//    {
//        try{
//            Etudiant::findOrFail($id_etudiant);
//            return view('Etudiants.edit',['etudiant'=>Etudiant::findOrFail($id_etudiant)]);
//        }
//        catch (ModelNotFoundException){
//            return view('Etudiants.error');
//        }
////        return view('Etudiants.edit',['etudiant'=>Etudiant::find($id_etudiant)]);
//    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_etudiant)
    {
        $E=Etudiant::find($id_etudiant);
        $E->nom = $request->Nom;
        $E->prenom = $request->Prenom;
        $E->note = $request->Note;
        $E->save();
//        return Redirect("/Etudiants");
        return response()->json($E);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_etudiant)
    {
        $E=Etudiant::find($id_etudiant);
        $E->delete();
//        return Redirect("/Etudiants");
        return response()->json($E);
    }
}
