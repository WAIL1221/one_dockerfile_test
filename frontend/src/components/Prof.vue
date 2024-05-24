<script >
export default {
  name: 'ProfEnsat',
  data(){
    return{
      id:1,
      nom:"",
      prenom:"",
      spécialité:"",
      indice:-1,
      profs:[]
    }
  },
  mounted() {
    fetch('http://127.0.0.1:8000/api/Profs')
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => this.profs=data)
        .catch(error => alert(error));
  },
  methods:{
    save:function (){
      if(this.indice==-1){
        // this.etudiants.push({id:this.id++,nom:this.nom,prenom:this.prenom,note:this.note});
        // Make a POST request using the Fetch API
        fetch('http://127.0.0.1:8000/api/Profs', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(
              {Nom:this.nom,Prenom:this.prenom,spécialité:this.spécialité}
          ),
        })
            .then(response => {
              if (!response.ok) {
                throw new Error('Network response was not ok' + ' , your data was not sent');
              }
              return response.json();
            })
            .then(data => this.profs.push(data))
            .catch(error => alert(error));
        alert("Insert");
      }
      else{
        // this.etudiants[this.indice].nom=this.nom;
        // this.etudiants[this.indice].prenom=this.prenom;
        // this.etudiants[this.indice].note=this.note;
        // Make a PUT request using the Fetch API
        fetch('http://127.0.0.1:8000/api/Profs/'+ this.id, {
          method: 'PUT',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(
              {Nom:this.nom,Prenom:this.prenom,spécialité:this.spécialité}
          ),
        })
            .then(response => {
              if (!response.ok) {
                throw new Error('Network response was not ok' + ' , your data was not sent');
              }
              return response.json();
            })
            .then(data => this.profs[this.indice]=data)
            .catch(error => alert(error));
        alert("Update") ;
      }
      this.nom=this.prenom=this.spécialité="";
    },
    Retirer:function (){
      fetch('http://127.0.0.1:8000/api/Profs/'+ this.profs[this.profs.length-1].id, {
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
      this.profs.pop();
      alert("Field deleted successfully");
    },
    Editer:function (prf){
      this.id=prf.id;
      this.nom=prf.nom;
      this.prenom=prf.prenom;
      this.spécialité=prf.spécialité;
      this.indice=this.profs.indexOf(prf);
    },
    Delete:function (prf){

      fetch('http://127.0.0.1:8000/api/Profs/'+ prf.id, {
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
      this.profs.splice(this.profs.indexOf(prf),1);
      alert("Field deleted successfully");
    }
  }
}
</script>

<template>
  <div>
    <h1>Gestion des Profs</h1>
    <form v-on:submit.prevent="save">
      <div class="form-group">
        <label for="Nom">Nom</label>
        <input type="hidden" v-model="id">
        <input type="text" id="Nom" v-model="nom" class="form-control" aria-describedby="emailHelp" placeholder="Nom Prof" required>
      </div>
      <div class="form-group">
        <label for="Prénom">Prénom</label>
        <input type="text" id="Prénom" v-model="prenom" class="form-control" aria-describedby="emailHelp" placeholder="Prénom Prof" required>
      </div>
      <div class="form-group">
        <label for="Note">Note</label>
        <input type="text" id="Note" v-model="spécialité" class="form-control" aria-describedby="emailHelp" placeholder="Spécialité" required>
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
      <th scope="col">Spécialité</th>
      <th scope="col"><a href="" @click.prevent="Retirer">Retirer</a></th>
    </tr>
    </thead>
    <tbody>
    <tr v-for="P in profs" :key="P">
      <th scope="row">{{ P.id }}</th>
      <td>{{ P.nom }}</td>
      <td>{{ P.prenom}}</td>
      <td>{{ P.spécialité}}</td>
      <td><button type="button" @click.prevent="Editer(P)" class="btn btn-primary">Edit</button> /
        <button type="button" @click.prevent="Delete(P)" class="btn btn-danger">Delete</button></td>
    </tr>
    </tbody>
  </table>


</template>

<style scoped>

</style>