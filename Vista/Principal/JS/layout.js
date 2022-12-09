window.onload = function () {
  var habilita1 = document.getElementById("habilita1");
  var habilita2 = document.getElementById("habilita2");
  var habilita3 = document.getElementById("habilita3");

  var indicativo = document.getElementById("indicativo");
  var nombre = document.getElementById("nombre");
  var ape1 = document.getElementById("ape1");
  var ape2 = document.getElementById("ape2");
  var pais = document.getElementById("nacionalidad");
  var ubicacion = document.getElementById("ubicacion");
  var correo = document.getElementById("email");
  var contraseña = document.getElementById("contraseña");


  fecha_ini_ins.min = new Date().toISOString().split("T")[0];
  fecha_fin_ins.min = new Date().toISOString().split("T")[0];
  fecha_ini_con.min = new Date().toISOString().split("T")[0];
  fecha_fin_con.min = new Date().toISOString().split("T")[0];

  document.getElementById("fecha_ini_ins").onchange = function () {
    var fecha = this.value;
    fecha_fin_ins.min = fecha;
  };
  document.getElementById("fecha_fin_ins").onchange = function () {
    var fecha = this.value;
    fecha_ini_con.min = fecha;
  };
  document.getElementById("fecha_ini_con").onchange = function () {
    var fecha = this.value;
    fecha_fin_con.min = fecha;
  };

  habilita1.onclick = function () {
    document.getElementById('indicativo').readOnly = false;
    indicativo.removeAttribute('readonly');
    nombre.removeAttribute('readonly');
    ape1.removeAttribute('readonly');
    ape2.removeAttribute('readonly');
    pais.removeAttribute('readonly');
    ubicacion.removeAttribute('readonly');
  };

  habilita2.onclick = function () {
    correo.removeAttribute('readonly');
  }

  habilita3.onclick = function () {
    contraseña.removeAttribute('readonly');
  }
}

var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}