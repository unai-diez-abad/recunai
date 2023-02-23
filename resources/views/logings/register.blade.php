<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!-- End Bootstrap CSS -->

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Login</title>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center" style="background-color: #8d3c93">
    <div class="container login-form">
        <div class="row mt-4 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="offest-md-4">
                            <div class="text-center"><img src="{{ Vite::asset('resources/image/ayuntamiento.png') }}" alt="error" height="90"></div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!--FORMULARIO INICIO SESION -->
                            <form class="form-login" action="{{ route('register.store') }}" method="POST">
                                @csrf
                                <!-- Input del nombre -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Nombre</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          </div>
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="nombre" />
                                    </div>

                                </div>
                                <!-- Input de apellido -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Apellido</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        </div>
                                        <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="apellido" />
                                    </div>
                                </div>
                                <!-- Input del email -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">email</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><span class='bi bi-at'></span></span>
                                        </div>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="email" />
                                    </div>
                                </div>
                                <!-- Input de la contraseña -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="contrasena">contrasena</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><span class="bi bi-key"></span></span>
                                        </div>
                                        <input type="password" id="contrasena" name="password" class="form-control" placeholder="contrasena"/>
                                        <span class="input-group-text"><i class="bi bi-eye" id="togglePassword" style="cursor: pointer"></i>
                                    </span>
                                    </div>
                                </div>
                                @vite(['resources/js/contrasena.js'])
                                <!-- Boton de registro de usuario -->
                                <div class="col-md-12">
                                    <button type="submit" class="col-12 btn btn-primary btn-block mb-4">Registrar usuario</button>
                                    <a href="{{ route('login') }}" class="float-end text-primary">Volver a inicio de session</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>