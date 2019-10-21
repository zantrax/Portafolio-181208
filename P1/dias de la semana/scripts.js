function myFunction() {
  var dias=["Lunes.jpg","Martes.jpg","Miercoles.jpg","Jueves.jpg","Viernes.jpg","Sabado.jpg","Domingo.jpg"];//arreglo con el nombre de las imagenes
  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "You selected: " + dias[x];//modifica lo que esta en la etiqueta
  document.getElementById("imagen").src = "img/" + dias[x]; //modifica en src

}