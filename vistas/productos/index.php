<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Formulario</title>
    <style>
        /* Estilos personalizados para el formulario */
        body{
            background-color: #F4F6F7;
        }
        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="number"] {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 5px;
            width: 100%;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #0069d9;
        }

        .container {
            
            margin-top: 50px;
            background-color: #D6DBDF;
        }

        h1 {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Formulario Registro de Estudiantes de Informatica</h1>
        <div class="row justify-content-center">
          <form action="/crud_php/controladores/productos/guardar.php" method="POST" class="col-lg-8 border p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_nombre1">Primer Nombre:</label>
                        <input type="text" name="alumno_nombre1" id="alumno_nombre1">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_nombre2">Segundo Nombre:</label>
                        <input type="text" name="alumno_nombre2" id="alumno_nombre2">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_apellido1">Primer Apellido:</label>
                        <input type="text" name="alumno_apellido1" id="alumno_apellido1">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_apellido2">Segundo Apellido:</label>
                        <input type="text" name="alumno_apellido2" id="alumno_apellido2">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_fecnac">Fecha de Nacimiento:</label>
                        <input type="date" name="alumno_fecnac" id="alumno_fecnac">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_telefono">Número de Teléfono:</label>
                        <input type="number" name="alumno_telefono" id="alumno_telefono">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_correo_elect" style="min-width: 150px;">Correo Electrónico:</label>
                        <input type="email" name="alumno_correo_elect" id="alumno_correo_elect">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <button type="submit">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
