<center>
    <h1>Ajouter un étudiant</h1>
    <form action="/Profs" method="post">
        @csrf
        <table>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="Nom" id=""></td>
            </tr>
            <tr>
                <td>Prenom</td><
                <td><input type="text" name="Prenom" id=""></td>
            </tr>
            <tr>
                <td>spécialité</td>
                <td><input type="text" name="spécialité" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table>
    </form>
</center>
