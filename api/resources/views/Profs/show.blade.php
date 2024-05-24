 <h1 style="color:mediumpurple; font-weight: bold">Bonjour {{$prof->nom." ".$prof->prenom}}</h1>
    <ul>
        <li><strong>ID : </strong>{{$prof->id}}</li>
        <li><strong>Nom : </strong>{{$prof->nom}}</li>
        <li><strong>Prenom : </strong>{{$prof->prenom}}</li>
        <li><strong>spécialité : </strong>{{$prof->spécialité}}</li>
        <li><strong>Date de création : </strong>{{$prof->created_at}}</li>
        <li><strong>Date de dernière modification : </strong>{{$prof->updated_at}}</li>
    </ul>
    <h3><a href="/Profs">>>Page D'acceuil</a></h3>
