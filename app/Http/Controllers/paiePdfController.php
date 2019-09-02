<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paiePdfController extends Controller
{
    public function printPDF()
    {
       
        $employe = employe::where('id',$id)->get();

        $id_categorie = $employe->categorie_id;

        $donnees = getPrimes($id_categorie);
        
        
        bulletin::create($request->{
            'salaireBase'=> $donnees->salaireDeBase,
            'primeAnciennete'=> $donnees->primeAnciennte,
            'primeCaisse' => $donnees->primeCaisse,
            'primeResponsabilite' => $donnees->primeResponsabilite,
            'indemniteLogement' => $donnees->primeLogement,
            'indemniteRepresentation' => $donnees->indemniteRpresentation,
            'primeHabillement' => $donnees->primeHabillement,
            'primeDeplacement' => $donnees->primeDeplacement,
            'primeEncouragement' => $donnees->primeEncouragement,
            'primeSante' => $donnees->primeSante,
            'primeTerrain' => $donnees->primeTerrain,
            'primeJourFerie' => $donnees->primeJourFerie,
            'primeSemestrielle' => $donnees->primeSemestrielle,
            'primeOuvertureCompte' => $donnees->primesOuvertureCompte,
        }
       

        );
        

        $pdf = App::make('dompdf.wrapper');

        $pdf->loadHTML('<h1>Test</h1>');
          
       /* $pdf = PDF::loadView('templates.Paie.pdf_view', $donnees); */

        return $pdf->stream();
    }
}
