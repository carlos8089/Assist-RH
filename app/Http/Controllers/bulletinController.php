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
    public function create()
    {
        return view('pages.Paie.createBulletin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BulletinRequest $request)
    {
        
        //if ($request->nature = "manuel") {
            /*Retrouver l'employé qui est saisie
                $nomEmploye = $_POST['nom'];
                $employes = employe::where('nom',$nomEmploye)->first();

            //Créer le bulletin affecté à cet employé
                $bulletin = new bulletin;
                    $bulletin->employe_id = $employes->id;
                    $bulletin->salaireDeBase = $request->salaireDeBase;
                    $bulletin->primeAnciennete = $request->primeAnciennete ;
                    $bulletin->primeCaisse = $request->primeCaisse ;
                    $bulletin->primeResponsabilite = $request->primeResponsabilite ;
                    $bulletin->indemniteLogement = $request->indemniteLogement ;
                    $bulletin->indemniteRepresentation = $request->indemniteRepresentation ;
                    $bulletin->primeHabillement = $request->primeHabillement ;
                    $bulletin->primeDeplacement = $request->primeDeplacement ;
                    $bulletin->primeEncouragement = $request->primeEncouragement ;
                    $bulletin->primeSante = $request->primeSante ;
                    $bulletin->primeTerrain = $request->primeTerrain ;
                    $bulletin->primeJourFerie = $request->primeJourFerie ;
                    $bulletin->primeSemestrielle = $request->primeSemestrielle ;
                    $bulletin->primeOuvertureCompte = $request->primeOuvertureCompte ;
                    $bulletin->CNSS = $request->CNSS ;
                    $bulletin->IRPP = $request->IRPP ;
                    $bulletin->TCS = $request->TCS ;
                    $bulletin->cotisationMutuelle = $request->cotisationMutuelle ;
                    $bulletin->pretImmobilier = $request->pretImmobilier ;
                    $bulletin->TS = $request->TS ;
                    $bulletin->typePaiement = $request->typePaiement ;
                    $bulletin->banque = $request->banque ;
                $bulletin->save(); */
        //}
        if ($request->nature = "automatique") {
            
            //echo $request->employe_id;

            //Créer le bulletin affecté à cet employé
           $bulletin = new bulletin;
                $bulletin->employe_id = $request->employe_id;
                $bulletin->salaireDeBase = $request->salaireDeBase;
                $bulletin->primeAnciennete = $request->primeAnciennete ;
                $bulletin->primeCaisse = $request->primeCaisse ;
                $bulletin->primeResponsabilite = $request->primeResponsabilite ;
                $bulletin->indemniteLogement = $request->indemniteLogement ;
                $bulletin->indemniteRepresentation = $request->indemniteRepresentation ;
                $bulletin->primeHabillement = $request->primeHabillement ;
                $bulletin->primeDeplacement = $request->primeDeplacement ;
                $bulletin->primeEncouragement = $request->primeEncouragement ;
                $bulletin->primeSante = $request->primeSante ;
                $bulletin->primeTerrain = $request->primeTerrain ;
                $bulletin->primeJourFerie = $request->primeJourFerie ;
                $bulletin->primeSemestrielle = $request->primeSemestrielle ;
                $bulletin->primeOuvertureCompte = $request->primeOuvertureCompte ;
                $bulletin->CNSS = $request->CNSS ;
                $bulletin->IRPP = $request->IRPP ;
                $bulletin->TCS = $request->TCS ;
                $bulletin->cotisationMutuelle = $request->cotisationMutuelle ;
                $bulletin->pretImmobilier = $request->pretImmobilier ;
                $bulletin->TS = $request->TS ;
                $bulletin->typePaiement = $request->typePaiement ;
                $bulletin->banque = $request->banque ;
            $bulletin->save(); 
        }

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
