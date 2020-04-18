
/*function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            img=document.createElement('img');
            img.style.width="200px";
            img.style.heigth="200px";
            //img.className="img-fluid";
            var filePreview = img;
            filePreview.id = 'file-preview';
            filePreview.src = e.target.result;
            console.log(e.target.result);

          
            var previewZone = document.getElementById('file-preview-zone');
            previewZone.appendChild(filePreview);
        }
        reader.readAsDataURL(input.files[0]);
    }

    

}

var fileUpload = document.getElementById('file-upload');
    fileUpload.onchange = function (e) {
        readFile(e.srcElement);
    }
*/
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
            $("#container-usuario-form").load("formEmpresa.html");
        });
    });
    
}

/*

if (window.confirm("Do you really want to leave?")) { 
  window.open("exit.html", "Thanks for Visiting!");
}

*/

