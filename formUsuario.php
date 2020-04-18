

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xTrabajos Registro</title>
</head>
<body>
    <div class="col-lg-12 mb-5">
        <h2 class="mb-4 title-form">Registro para Usuarios</h2>

        <form action="app/imagen.php" method="post" enctype='multipart/form-data' class="p-4 border rounded formContainer"  >
            

            <!-- Datos de la cuenta-->
            <fieldset class="form-group mb-4">
                <legend>Datos de la cuenta</legend>
                <h>Foto de perfil</h>
                <div class="row form-group mb-4 container_uploader" id="divInputLoad" >
                    <br>
                    <div id="divFileUpload">
                        <input  name="perfilIMG" type="file" id="files" class="form-control" />
                        <br />
                        <output id="list"></output>
                    </div>
                    <div id="file-preview-zone" class="imgPreview"> </div>
                </div>

              
              
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="userForm">Correo</label>
                        <input type="text" id="userForm" class="form-control"
                            placeholder="Dirección de E-mail">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="userForm">Contraseña</label>
                        <input type="password" id="userForm" class="form-control" placeholder="Contraseña">
                    </div>
                </div>
                <div class="row form-group mb-4">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="userForm">Repetir Contraseña</label>
                        <input type="password" id="userForm" class="form-control"
                            placeholder="Repetir Contraseña">
                    </div>
                </div>
            </fieldset>
            <hr>
            <!-- Datos personales-->
            <fieldset class="form-group ">
                <legend>Datos personales</legend>
                <div class="row form-group mb-4">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="userForm">Nombre(s)</label>
                        <input type="nombres" id="userForm" class="form-control"
                            placeholder="Ingrese su nombre">
                    </div>
                </div>

                <div class="row form-group mb-4">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="userForm">Edad</label>
                        <input type="number" id="userForm" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="userForm" class="text-black">Escolaridad</label>
                        <select name="" id="" class="form-control">
                            <option value="primaria">Primaria</option>
                            <option value="secundaria">Secundaria</option>
                            <option value="bachillerato">Bachillerato</option>
                            <option value="licenciatura">Licenciatura</option>
                            <option value="postgrado">Postgrado</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="userForm" class="text-black">Sexo</label>
                        <select name="" id="" class="form-control">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group mb-4 ">
                    <div class="col-md-4">
                        <label for="userForm" class="text-black">Estado Civil</label>
                        <select name="" id="" class="form-control">
                            <option value="Masculino">Soltero</option>
                            <option value="Femenino">Casado</option>
                            <option value="Masculino">Divorciado</option>
                            <option value="Femenino">Viudo</option>
                            <option value="Masculino">otro</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label for="userForm" class="text-black">Fecha de Nacimiento</label>
                        <input type="date" name="userForm" id="" class="form-control">
                    </div>
                </div>

            </fieldset>

            <!-- Datos laborales-->
            <hr>
            <fieldset class="form-group">
                <legend>Datos Laborales</legend>
                <div class="row form-group mb-4">
                   <div class="col-md-6">
                     <label class="text-black" for="userForm"> Sueldo Deseado</label>
                     <input type="text" name="userForm" id="espectativaEconomica" class="form-control">
                   </div>
                   <div class="col-md-6">
                       <label for="userForm" class="text-black">Tipo de empleo</label>
                        <select class="form-control">
                            <option value="Fijo">Fijo</option>
                            <option value="Eventual">Eventual</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group mb-4">
                    <div class="col-md-6">
                        <label for="userForm">Horario de preferencia</label>
                        <select name="" id="" class="form-control">
                            <option value="nocturno">nocturno</option>
                            <option value="diurno">diurno</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group mb-4">
                    <div class="col-md-12">
                        <hr>
                        <label for="userForm">Historial de trabajo</label>
                        <hr>
                    </div>
                </div>
                <div class="row form-group mb-4">
                    <div class="col-xl-8 col-md-12">
                        <label for="userForm"> Empresa</label>
                        <input class="form-control" type="text" name="userForm" id="">
                    </div>
                    <div class="col-xl-8 col-md-12">
                        <label for="userForm"> Puesto</label>
                        <input class="form-control" type="text" name="userForm" id="">
                    </div>
                </div>
                <div class="row form-group mb-4">
                    <div class="col-md-12">
                        <label for="userForm" class="text-black">Actividad Principal</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
                <div class="row form-group mb-4">
                    <div class="col-md-12">
                        <label for="userForm" class="text-black">Fecha de labores</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="text-black" for="userForm"> Sueldo Percibido</label>
                        <input type="text" name="userForm" id="espectativaEconomica" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="userForm" class="text-black">Motivo de salida</label>
                        <input type="text" name="userForm" id=""  class="form-control" >
                    </div>

                </div>
            </fieldset>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" value="Enviar" class="btn px-4 btn-primary text-white">
                </div>
                
            </div>



        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/quill.min.js"></script>
    <script src="js/previsualizar.js"></script>

    <script src="js/bootstrap-select.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/previsualizar.js"></script>
</body>
</html>