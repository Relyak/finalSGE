

    var tabla = document.getElementById('tableSQL');
   
    console.log(tabla);
    
    var tablaBuscar = document.getElementById('tablaBuscar');
    var tabla = document.getElementById("tableSQL").tBodies[0];

    buscaTabla = function(){
      texto = tablaBuscar.value.toLowerCase();
      var r=0;
      while(row = tabla.rows[r++])
      {
        if ( row.innerText.toLowerCase().indexOf(texto) !== -1 )
          row.style.display = null;
        else
          row.style.display = 'none';
      }
    }

    tablaBuscar.addEventListener('keyup', buscaTabla);
