

var busqueda = document.getElementById('buscar');
var table = document.getElementById("tabla").tBodies[0];

buscaTabla = function () {
  texto = busqueda.value.toLowerCase();
  var r = 0;
  while (row = table.rows[r++]) {
    // Si la fila actual es la fila del elemento "buscar", saltarla y continuar con la siguiente fila
    if (row == busqueda.parentNode.parentNode) {
      continue;
    }
    if (row.innerText.toLowerCase().indexOf(texto) !== -1)
      row.style.display = null;
    else
      row.style.display = 'none';
  }
}

busqueda.addEventListener('keyup', buscaTabla);

