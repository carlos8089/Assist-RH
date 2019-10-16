<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\EmployeRequest;
use App\Http\Requests\employeResearch; 

use App\Models\Categorie;
use App\Models\employe;
use App\Models\agence;
use App\Models\contrat;
use App\Models\poste;



class employeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : View
    {
        $employes = employe::orderBy('id')->paginate(10);
        
        return view('pages.Personnel.listeEmploye', compact('employes')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $contrats = contrat::all();
        $agences = agence::all();
        $postes = poste::all();

        return view('pages.Personnel.createEmploye',compact('categories','contrats','agences','postes'));
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
       return redirect()->route('personnel')->with('success','Enregistrement effectué !');
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
       $postes = poste::all();
       $agences = agence::all();
       return view('pages.Personnel.editEmploye', compact('employes','postes','agences'));
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
    
        $sitMat =$request->sitMat;
        $nbEnfant = $request->nbEnfant;
        $addr = $request->addr;
        $numMat = $request->numMat;
        $poste = $request->poste;
        
        $agence = $request->agence;
        

        employe::where('id',$id)->update(['nom'=>$nom , 'prenom'=>$prenom , 'sitMat'=>$sitMat , 'nbEnfant'=>$nbEnfant , 'addr'=>$addr , 'numMat'=>$numMat ,
        'poste'=>$poste , 'agence'=>$agence ]);

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
        $employe = employe::find($id);
        
        $employe->delete();
        return redirect()->route('employe.index');
    }
   
}
?>