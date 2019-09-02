<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bulletin pdf</title>
</head>
<body>
    <div class="row">
        <div class="col-3 ">
          <h5>Bulletin de paie</h5>
        </div>
        <div class="col-3">
          <h5>MOIS : </h5>
        </div>
        <div class="col-3">
          <h5>PERIODE :  au  </h5>
        </div>
    </div>

    <div class="">
      <table class="table">
        <thead>
            <tr>
                <th rowspan="2">N°</th>
                <th rowspan="2">Désignation</th>
                <th rowspan="2">Nombre</th>
                <th rowspan="2">Base</th>
                <th colspan="3">Part de l'employé</th>
                <th colspan="2">Part de l'employeur</th>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Taux</td>
                <td>Gain</td>
                <td>Retenue</td>
                <td>Taux</td>
                <td>Cotisation</td>
              </tr>
        </thead>
        
        <tbody>
          @foreach ($donnees as $bulletin)
          <tr>
              <td>Salaire de base</td>
              <td></td>
              <td>{{ $bulletin->salaireDeBase }}</td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Prime d'ancienneté</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Prime de caisse</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>prime de responsabilite</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>indemnite de logement</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Indemnite de représentation</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Prime d'habillement</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Prime de déplacement</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Prime d'encouragement</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Prime de Santé</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Prime de terrain</td>
              <td></td>
              <td>}</td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Prime dejour férié</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Prime semestrielle</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Prime sur ouverture de compte</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>CNSS</td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>IRPP</td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>TCS</td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Cotisation mutuelle</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Prêt Immobilier</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>TS</td>
              <td></td>
              <td></td>
              <td>{{ $bulletin-> }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="4">Totaux</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          @endforeach
        </tbody>
       
      </table>
    </div>
    
</body>
</html>