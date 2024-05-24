<center>
    <h1>Ajouter un étudiant</h1>
    <form action="/Etudiants/{{$etudiant->id}}" method="post">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="Nom" value="{{$etudiant?$etudiant['nom']:""}}"></td>
            </tr>
            <tr>
                <td>Prenom</td><
                <td><input type="text" name="Prenom" value="{{$etudiant?$etudiant['prenom']:""}}"></td>
            </tr>
            <tr>
                <td>Note</td>
                <td><input type="text" name="Note" value="{{$etudiant?$etudiant['note']:""}}"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table>
    </form>
</center>
