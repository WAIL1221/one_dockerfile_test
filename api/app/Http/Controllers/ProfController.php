<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\prof;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_prof=Prof::all();
//      return view('Profs.index',['profs'=>$list_prof]);
        return response()->json($list_prof);
    }

    /**
     * Show the form for creating a new resource.
     */
//    public function create()
//    {
//        return view('Profs.create');
//    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $P=new prof();
        $P->nom = $request->Nom;
        $P->prenom = $request->Prenom;
        $P->spécialité = $request->spécialité;
        $P->save();
//        return Redirect("/Profs");
        return response()->json($P);
    }

    /**
     * Display the specified resource.
     */
    public function show($id_prof)
    {
//        try{
//            prof::findOrFail($id_prof);
//            return view('Profs.show',['prof'=>prof::findOrFail($id_prof)]);
//        }
//        catch (ModelNotFoundException){
//            return view('Profs.error');
//        }
////        return view('Profs.edit',['prof'=>Etudiant::find($id_prof)]);
        return response()->json(prof::find($id_prof));
    }

    /**
     * Show the form for editing the specified resource.
     */
//    public function edit($id_prof)
//    {
//        try{
//            prof::findOrFail($id_prof);
//            return view('Profs.edit',['prof'=>prof::findOrFail($id_prof)]);
//        }
//        catch (ModelNotFoundException){
//            return view('Profs.error');
//        }
////        return view('Profs.edit',['prof'=>Etudiant::find($id_prof)]);
//    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_prof)
    {
        $P=prof::find($id_prof);
        $P->nom = $request->Nom;
        $P->prenom = $request->Prenom;
        $P->spécialité = $request->spécialité;
        $P->save();
//        return Redirect("/Profs");
        return response()->json($P);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_prof)
    {
        $P=prof::find($id_prof);
        $P->delete();
//        return Redirect("/Profs");
        return response()->json($P);
    }
}
