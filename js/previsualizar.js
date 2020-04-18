

function archivo(evt) {
    var files = evt.target.files; // FileList object

    // Obtenemos la imagen del campo "file".
    for (var i = 0, f; f = files[i]; i++) {
      //Solo admitimos imágenes.
      if (!f.type.match('image.*')) {
          continue;
      }

      var reader = new FileReader();

      reader.onload = (function(imgFile) {
          return function(e) {
            // Insertamos la imagen
           document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(imgFile.name), '"  border="1px solid black"  "width="150px"  height="150px"/>'].join('');
          };
      })(f);

      reader.readAsDataURL(f);
    }
}

document.getElementById('files').addEventListener('change', archivo, false);

function userForm(){
    $(document).ready(function(){

        $("#btnUsuario").click(function(evento){
            evento.preventDefault();
            $("#container-usuario-form").load("formUsuario.php");
        });
    });
    
}

function empresaForm(){
  
    $(document).ready(function(){

        $("#btnEmpresa").click(function(evento){
          
            evento.preventDefault();
            $("#container-usuario-form").load("formEmpresa.php");
          
        });
    });
    
}



/*

  }*/