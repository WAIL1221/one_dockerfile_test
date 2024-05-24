<script >
export default {
  name: 'StudentEnsat',
  data(){
    return{
      id:1,
      nom:"",
      prenom:"",
      note:"",
      indice:-1,
      etudiants:[]
    }
  },
  mounted() {
    fetch('http://127.0.0.1:8000/api/Etudiants')
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => this.etudiants=data)
        .catch(error => alert(error));
  },
  methods:{
    save:function (){
      if(this.indice==-1){
        // this.etudiants.push({id:this.id++,nom:this.nom,prenom:this.prenom,note:this.note});
        // Make a POST request using the Fetch API
        fetch('http://127.0.0.1:8000/api/Etudiants', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(
              {Nom:this.nom,Prenom:this.prenom,Note:this.note}
          ),
        })
            .then(response => {
              if (!response.ok) {
                throw new Error('Network response was not ok' + ' , your data was not sent');
              }
              return response.json();
            })
            .then(data => this.etudiants.push(data))
            .catch(error => alert(error));
        alert("Insert");
      }
      else{
        // this.etudiants[this.indice].nom=this.nom;
        // this.etudiants[this.indice].prenom=this.prenom;
        // this.etudiants[this.indice].note=this.note;
        // Make a PUT request using the Fetch API
        fetch('http://127.0.0.1:8000/api/Etudiants/'+ this.id, {
          method: 'PUT',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(
              {Nom:this.nom,Prenom:this.prenom,Note:this.note}
          ),
        })
            .then(response => {
              if (!response.ok) {
                throw new Error('Network response was not ok' + ' , your data was not sent');
              }
              return response.json();
            })
            .then(data => this.etudiants[this.indice]=data)
            .catch(error => alert(error));
        alert("Update") ;
      }
      this.nom=this.prenom=this.note="";
    },
    Retirer:function (){
      fetch('http://127.0.0.1:8000/api/Etudiants/'+ this.etudiants[this.etudiants.length-1].id, {
        method: 'DELETE',
      })
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok' + ' , your data was not sent');
            }
            return response.json();
          })
          .then(data => console.log(data))
          .catch(error => alert(error));
      this.etudiants.pop();
      alert("Field deleted successfully");
    },
    Editer:function (etd){
      this.id=etd.id;
      this.nom=etd.nom;
      this.prenom=etd.prenom;
      this.note=etd.note;
      this.indice=this.etudiants.indexOf(etd);
    },
    Delete:function (etd){

      fetch('http://127.0.0.1:8000/api/Etudiants/'+ etd.id, {
        method: 'DELETE',
      })
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok' + ' , your data was not sent');
            }
            return response.json();
          })
          .then(data => console.log(data))
          .catch(error => alert(error));
      this.etudiants.splice(this.etudiants.indexOf(etd),1);
      alert("Field deleted successfully");
    }
  }
}
</script>

<template>
  <div>
    <h1>Gestion des étudiants</h1>
    <form v-on:submit.prevent="save">
      <div class="form-group">
        <label for="Nom">Nom</label>
        <input type="hidden" v-model="id">
        <input type="text" id="Nom" v-model="nom" class="form-control" aria-describedby="emailHelp" placeholder="Entrer le nom de l'étudiant" required>
      </div>
      <div class="form-group">
        <label for="Prénom">Prénom</label>
        <input type="text" id="Prénom" v-model="prenom" class="form-control" aria-describedby="emailHelp" placeholder="Entrer le prénom  étudiant" required>
      </div>
      <div class="form-group">
        <label for="Note">Note</label>
        <input type="text" id="Note" v-model="note" class="form-control" aria-describedby="emailHelp" placeholder="Entrer la note de l'étudiant" required>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
  <br><br>
  <table class="table table-striped table-dark">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Note</th>
      <th scope="col"><a href="" @click.prevent="Retirer">Retirer</a></th>
    </tr>
    </thead>
    <tbody>
    <tr v-for="E in etudiants" :key="E">
      <th scope="row">{{ E.id }}</th>
      <td>{{ E.nom }}</td>
      <td>{{ E.prenom}}</td>
      <td>{{ E.note}}</td>
      <td><button type="button" @click.prevent="Editer(E)" class="btn btn-primary">Edit</button> /
        <button type="button" @click.prevent="Delete(E)" class="btn btn-danger">Delete</button></td>
    </tr>
    </tbody>
  </table>


</template>

<style scoped>

</style>