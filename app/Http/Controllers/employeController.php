<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\EmployeRequest;
use App\Http\Requests\employeResearch; 

use App\Models\employe;


class employeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : View
    {
        $employes = employe::orderBy('id')->get();
        
        return view('pages.Personnel.listeEmploye', compact('employes')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Personnel.createEmploye');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeRequest $request)
    {
       employe::create($request->all());
       return redirect()->route('personnel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $employes = employe::where('id',$id)->get();

       return view('pages.Personnel.voirEmploye', compact('employes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $employes = employe::where('id',$id)->get();
       return view('pages.Personnel.editEmploye', compact('employes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeUpdateRequest $request, $id)
    {
        $nom = $request->nom;
        $prenom = $request->prenom;
        $sexe = $request->sexe;
        $dateNais = $request->dateNais;
        $lieuNais = $request->lieuNais;
        $sitMat =$request->sitMat;
        $nbEnfant = $request->nbEnfant;
        $addr = $request->addr;
        $numMat = $request->numMat;
        $poste = $request->poste;
        $contrat = $request->contrat;
        $agence = $request->agence;
        $dateEmbauche = $request->dateEmbauche;

        employe::where('id',$id)->update(['nom'=>$nom , 'prenom'=>$prenom , 'sexe'=>$sexe , 'dateNais'=>$dateNais ,
        'lieuNais'=>$lieuNais , 'sitMat'=>$sitMat , 'nbEnfant'=>$nbEnfant , 'addr'=>$addr , 'numMat'=>$numMat ,
        'poste'=>$poste , 'contrat'=>$contrat , 'agence'=>$agence , 'dateEmbauche'=>$dateEmbauche]);

        return redirect()->route('employe.sow', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        employe::where('id',$id)->delete();
        
        return redirect()->route('employe.index');
    }

    public function getPrimes($id)
    {
        $primes = Categorie::where('id',$id)->get();
        
        /*
        $salaireBase = $primes->salaireDeBase;
        $primeAnciennete = $primes->primeAnciennte;
        $primeCaisse = $primes->primeCaisse;
        $primeResponsabilite = $primes->primeResponsabilite;
        $indemniteLogement = $primes->primeLogement;
        $indemniteRepresentation = $primes->indemniteRpresentation;
        $primeHabillement = $primes->primeHabillement;
        $primeDeplacement = $primes->primeDeplacement;
        $primeEncouragement = $primes->primeEncouragement;
        $primeSante = $primes->primeSante;
        $primeTerrain = $primes->primeTerrain;
        $primeJourFerie = $primes->primeJourFerie;
        $primeSemestrielle = $primes->primeSemestrielle;
        $primeOuvertureCompte = $primes->primesOuvertureCompte;
       
        

        $data = [ $salaireBase, $primeAnciennete, $primeCaisse, $primeResponsabilite,
                $indemniteLogement, $indemniteRepresentation, $primeHabillement, $primeDeplacement;
                $primeEncouragement, $primeSante, $primeTerrain, $primeJourFerie, $primeSemestrielle,
                $primeOuvertureCompte
            ];
        */

        return $primes;
    }

   
}
?>