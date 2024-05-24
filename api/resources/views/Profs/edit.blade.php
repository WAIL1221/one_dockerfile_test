<center>
    <h1>Ajouter un étudiant</h1>
    <form action="/Profs/{{$prof->id}}" method="post">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="Nom" value="{{$prof?$prof['nom']:""}}"></td>
            </tr>
            <tr>
                <td>Prenom</td><
                <td><input type="text" name="Prenom" value="{{$prof?$prof['prenom']:""}}"></td>
            </tr>
            <tr>
                <td>spécialité</td>
                <td><input type="text" name="spécialité" value="{{$prof?$prof['spécialité']:""}}"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table>
    </form>
</center>
