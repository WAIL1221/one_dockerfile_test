<center>
    <h1>La liste des étudiants</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>Note</th>
            <th colspan="3"><a href="Etudiants/create">Ajouter</a>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->nom}}</td>
                <td>{{$student->prenom}}</td>
                <td>{{$student->note}}</td>
                <td><a href="/Etudiants/{{$student->id}}/edit">Edit</a></td>>
                <td><a href="/Etudiants/{{$student->id}}">Show</a></td>>
                <td>
                    <form action="/Etudiants/{{$student->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</center>
