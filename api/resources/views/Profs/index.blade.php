<center>
    <h1>La liste des étudiants</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>spécialité</th>
            <th colspan="3"><a href="Profs/create">Ajouter</a>
        </tr>
        @foreach($profs as $prof)
            <tr>
                <td>{{$prof->id}}</td>
                <td>{{$prof->nom}}</td>
                <td>{{$prof->prenom}}</td>
                <td>{{$prof->spécialité}}</td>
                <td><a href="/Profs/{{$prof->id}}/edit">Edit</a></td>>
                <td><a href="/Profs/{{$prof->id}}">Show</a></td>>
                <td>
                    <form action="/Profs/{{$prof->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</center>
