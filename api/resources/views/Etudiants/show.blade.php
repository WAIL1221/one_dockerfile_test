 <h1 style="color:mediumpurple; font-weight: bold">Bonjour {{$etudiant->nom." ".$etudiant->prenom}}</h1>
    <ul>
        <li><strong>ID : </strong>{{$etudiant->id}}</li>
        <li><strong>Nom : </strong>{{$etudiant->nom}}</li>
        <li><strong>Prenom : </strong>{{$etudiant->prenom}}</li>
        <li><strong>Note : </strong>{{$etudiant->note}}</li>
        <li><strong>Date de création : </strong>{{$etudiant->created_at}}</li>
        <li><strong>Date de dernière modification : </strong>{{$etudiant->updated_at}}</li>
    </ul>
    <h3><a href="/Etudiants">>>Page D'acceuil</a></h3>
