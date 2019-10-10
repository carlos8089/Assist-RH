<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\BulletinRequest; 

use App\Models\bulletin;
use App\Models\employe;

class bulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $bulletins = bulletin::orderBy('id')->get();

        return view('pages.Paie.editerPage', compact('bulletins'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //récupéré l'employé
        $employes = employe::where('id',$id)->get();

         //récupéré la categorie de l'employé
         $categorie = $employe->categorie();

        return view('pages.Paie.createBulletin', compact(['employes','actegories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BulletinRequest $request, $id)
    {
        
        $employes = employe::where('id',$id)->first();

       

        //créer un bulletin en remplissant les champs de formulaires avec les données de catégorie
        

        $bulletin = new bulletin;
            $bulletin->salaireDeBase = $categorie->categorie_salaireDeBase;
            $bulletin->primeCaisse = $categorie->categorie_primeCaisse;
            $bulletin->primeResponsabilite = $categorie->categorie_primeResponsabilite;
            $bulletin->indemniteLogement = $categorie->categorie_indemniteLogement;
            $bulletin->indemniteRepresentation = $categorie->categorie_indemniteRepresentation;
            $bulletin->primeHabillement = $categorie->categorie_primeHabillement;
            $bulletin->primeDeplacement = $categorie->categorie_primeDeplacement;
            $bulletin->primeEncouragement = $categorie->categorie_primeEncouragement;
            $bulletin->primeSante = $categorie->categorie_primeSante;
            $bulletin->primeTerrain = $ategorie_primeTerrain;
            $bulletin->primeJourFerie = $categorie->categorie_primeJourFerie;
            $bulletin->primeSemestrielle = $categorie->categorie_primeSemestrielle;
            $bulletin->primeOuvertureCompte = $categorie->categorie_primeOuvertureCompte ;
        $bulletin->save();

        return redirect()->route('fiche');
    }

    /**
     * Display the specified resource.
     *                             
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bulletin = bulletin::where('id', $id)->get();

        return response(view('pages.Paie.voirBulletin'),206)->header('Content-Type','application/pdf; charset=utf-8');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bulletins = bulletin::where('id',$id)->get();

        return view('pages.Paie.editBulletin', compact('bulletins'));
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
       
        $primeSante = $request->primeSante;
        $lieuNais = $request->lieuNais;
        $sitMat =$request->sitMat;
        $nbEnfant = $request->nbEnfant;
        $addr = $request->addr;
        $numMat = $request->numMat;
        $poste = $request->poste;
        $contrat = $request->contrat;
        $agence = $request->agence;
        $dateEmbauche = $request->dateEmbauche;

        bulletin::where('id',$id)->update(['primeSante'=>$primeSante ,
        'lieuNais'=>$lieuNais , 'sitMat'=>$sitMat , 'nbEnfant'=>$nbEnfant , 'addr'=>$addr , 'numMat'=>$numMat ,
        'poste'=>$poste , 'contrat'=>$contrat , 'agence'=>$agence , 'dateEmbauche'=>$dateEmbauche]);

        dd($primeSante);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        bulletin::where('id',$id)->delete();

        return redirect()->route('bulletin.index');
    }
}
