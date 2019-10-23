// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
  apiKey: 'AIzaSyBnqPhjPMeIZ3bDb2cIIZcJTVt6oSyt0_Y',
  authDomain: 'ssg-music-app.firebaseapp.com',
  projectId: 'ssg-music-app'
});
//agregar Documentos
var db = firebase.firestore();
function guardar(){
  var nombres=document.getElementById('nombres').value;
  var papellido=document.getElementById('papellido').value;
  var sapellido=document.getElementById('sapellido').value;
  var edad=document.getElementById('edad').value;
  var telefono=document.getElementById('telefono').value;
  var genero=document.getElementById('genero').value;
  var correo=document.getElementById('correo').value;
  var user=document.getElementById('usuario').value;
  var clave=document.getElementById('clave').value;
  var confclave=document.getElementById('confclave').value;
  var estado=document.getElementById('estado').value;
  var num = 0;
  if (clave != confclave ) {
    Swal.fire({
      type: 'warning',
      title: '...',
      text: 'LAS CONTRASEÑAS NO SON IGUALES!',
    })
  }else if(nombres == ""){
    Swal.fire({
      type: 'warning',
      title: 'ALERTA...',
      text: 'INGRESA TU NOMBRE!',
    })
  }else if(papellido == "" || sapellido =="" ){
    Swal.fire({
      type: 'warning',
      title: 'ALERTA...',
      text: 'INGRESA TUS APELLIDOS!',
    })
  }else if(edad == "" ){
    Swal.fire({
      type: 'warning',
      title: 'ALERTA...',
      text: 'INGRESA TU EDAD!',
    })
  }else if(telefono == "" ){
    Swal.fire({
      type: 'warning',
      title: 'ALERTA...',
      text: 'INGRESA TU TELEFONO!',
    })
  }else if(correo == "" ){
    Swal.fire({
      type: 'warning',
      title: 'ALERTA...',
      text: 'INGRESA TU CORREO ELECTRONICO!',
    })
  }else if(user == "" ){
    Swal.fire({
      type: 'warning',
      title: 'ALERTA...',
      text: 'INGRESA TU USUARIO!',
    })
  }else if(clave == "" || confclave == "" ){
    Swal.fire({
      type: 'warning',
      title: 'ALERTA...',
      text: 'INGRSA TU CONTRASEÑAS!',
    })

  }else{

   db.collection("usuarios").add({
    usuarioId:num+=1,
    nombre: nombres,
    papellido: papellido,
    sapellido: sapellido,
    edad:edad,
    telefono:telefono,
    genero:genero,
    correo:correo,
    usuario:user,
    clave:clave,
    estado:estado
  })
   .then(function(docRef) {
    Swal.fire(
      'EXITO!',
      'El Usuario se ha agregado!',
      'success'
      )
    setTimeout('document.location.reload()',2000);

  })
   .catch(function(error) {
    console.error("Error adding document: ", error);
  });
 }
}
//LEER DATOS
var num = 0;
var tabla=document.getElementById('tabla');
db.collection("usuarios").get().then((querySnapshot) => {
	tabla.innerHTML = '';
  querySnapshot.forEach((doc) => {
    tabla.innerHTML += `      <tr>
    <td>${num+=1} </td>
    <td>${doc.data().nombre} ${doc.data().papellido} ${doc.data().sapellido}</td>
    <td style="font-style: oblique;">${doc.data().usuario}</td>
    <td style="font-style: oblique;">${doc.data().estado}</td>

    <td>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editEst" ><i class="fas fa-edit"></i></a>
    <a href="#" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></a>

    </td>
    </tr>`
  });
});
//TABLA AUTORIZAR
var tablaA=document.getElementById('tableAutorizar');
db.collection("usuarios").where("estado", "==", "PENDIENTE")
.get()
.then(function(querySnapshot) {
  tablaA.innerHTML = '';
  querySnapshot.forEach(function(doc) {
   console.log(`${doc.id} => ${doc.data()}`);
   tablaA.innerHTML += `      <tr>
   <td>${num+=1} </td>
   <td>${doc.data().nombre} ${doc.data().papellido} ${doc.data().sapellido}</td>
   <td style="font-style: oblique;">${doc.data().usuario}</td>
   <td style="font-style: oblique;">${doc.data().estado}</td>

   <td>
   <a href="#" class="btn btn-success"  onclick="cEstado('${doc.id}')" >AUTORIZAR <i class="  fa fa-check"></i></a>
   <a href="#" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></a>

   </td>
   </tr>`
 });
})
.catch(function(error) {
  console.log("Error getting documents: ", error);
});
function cEstado(id){
Swal.fire({
  title: 'AUTORIZACIÓN',
  text: "QUIERES ACTIVAR ESTE USUARIO!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'AUTORIZAR'
}).then((result) => {
  if (result.value) {
      var washingtonRef = db.collection("usuarios").doc(id);
  var estados = "ACTIVO";
return washingtonRef.update({
  estado: estados
})
.then(function() {
  location.reload();
    alertify.warning('AUTORIZACIÓN REALIZADA');

})
.catch(function(error) {

    console.error("Error updating document: ", error);
  });
    Swal.fire(

      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})



}