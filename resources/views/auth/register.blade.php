<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>Registrarse | Estación Riquelme</title>

    <style>
        body{
            background: #1e1e1e;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        body img{
            zoom: 60%;
            margin-bottom: 30px;
        }
        .card{
            background: rgba(28, 31, 47, 0.16);
            border: 1px solid #2e344d;
            padding: 20px 50px 60px 50px;
            border-radius: 10px;
            box-shadow: 10px 10px 36px rgba(0,0,0,.5), -13px -13px 23px rgba(255,255,255,0.03);
        }
        .card-header{
            margin-bottom: 20px;
        }
        .card-header h1{
            margin-bottom: 14px;
            font-family: sans-serif;
            text-align: center;
            color: #ffffff;
        }
        .card-header p{
            margin:0;
            font-size: 14px;
            font-family: sans-serif;
            text-align: center;
            color: #bdbdbd;
        }
        .card-body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .card-body form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        .input-form .input{
            background: rgba(30, 33, 47, 0.76);
            padding: 10px;
            border-color: #5459a7;
            width: 100%;
            color: #bdbdbd;
            border-radius: 5px;
            border-width: 1px 0 0 1px;
            outline: none;
        }
        form button{
            background: linear-gradient(to left, #d2d188, #7d7c4d);
            color: #ffffff;
            border:none;
            padding: 15px 30px;
            border-radius: 25px;
            margin-top: 10px;
            font-size: 15px;
            cursor: pointer;
        }
        form button:hover{
            background: linear-gradient(to left, #81661a, #7d7c4d);
        }


        form a{
            font-family: sans-serif;
            margin-top: 20px;
            font-size: 15px;
            font-weight: bold;
            text-decoration: none;
            color: #c9c9c9;
            transition: all ease-in-out .1s;
        }

        form a:hover{
            color: #ffffff;
            text-decoration: underline;
        }


        .form-check{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-bottom: 10px;
        }

        .form-check label{
            color: #bdbdbd;
            padding: 5px;
            margin-left: 5px;
            font-family: sans-serif;
            font-size: 14px;
        }

        .input-form{
            display: flex;
            width: 100%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .error-message{
            font-size: 80%;
            color: #e3342f;
            font-family: sans-serif;
            margin-top: 5px;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        textarea:-webkit-autofill,
        textarea:-webkit-autofill:hover,
        textarea:-webkit-autofill:focus,
        select:-webkit-autofill,
        select:-webkit-autofill:hover,
        select:-webkit-autofill:focus {
            -webkit-text-fill-color: #bdbdbd;
            transition: background-color 5000s ease-in-out 0s;
        }
        @media screen and (min-width: 768px){
            .card{
                width: 35%;
            }
        }
        @media screen and (max-width: 768px){
            .input-form .error-message{
                font-size: 60%;
            }
        }
        @media screen and (min-width: 1024px){
            .input-form .input{
                width: 80%;
            }
        }
        @media screen and (max-width: 425px){
            .input-form .error-message{
                font-size: 70%;
            }
            .card{
                width: 90%;
                padding: 0 14px 20px 14px;
            }
            .input-form .input{
                width: 80%;
            }
        }
        @media screen and (max-width: 320px){
            .input-form .error-message{
                margin-left: 15px;
            }
        }
    </style>
</head>
<body>
<img src="{{ asset('images/navbar_logo.png') }}" alt="">
<div class="card">
    <div class="card-header">
        <h1>Regístrate</h1>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-form">
                <input class="input" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Nombre de usuario" required autocomplete="off">
                @error('name')
                <strong class="error-message">{{ $message }}</strong>
                @enderror
            </div>
            <div class="input-form">
                <input class="input" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required autocomplete="off">
                @error('email')
                <strong class="error-message">{{ $message }}</strong>
                @enderror
            </div>
            <div class="input-form">
                <input class="input" id="rut" type="text" name="rut" required oninput="checkRut(this)" placeholder="Ingrese su RUT" autocomplete="off">
                @error('rut')
                <strong class="error-message">{{ $message }}</strong>
                @enderror
            </div>
            <div class="input-form">
                <input class="input" id="password" type="password" name="password" placeholder="Contraseña" required autocomplete="off">
                @error('password')
                <strong class="error-message">{{ $message }}</strong>
                @enderror
            </div>
            <div class="input-form">
                <input class="input" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="off">
                @error('password-confirm')
                <strong class="error-message">{{ $message }}</strong>
                @enderror
            </div>

            {{--<div class="form-check">
                <input type="checkbox" name="remember" id="remember"  checked>
                <label for="remember">
                    {{ __('Recuerdame') }}
                </label>
            </div>--}}
            <div class="g-recaptcha" data-sitekey="{{env('PUBLIC_KEY_RECAPTCHA')}}"></div>
            @error('g-recaptcha-response')
            <strong class="error-message">Necesita validar el ReCaptcha</strong>
            @enderror
            <button type="submit">Crear cuenta</button>
            <a href="{{url('/login')}}">Ya tienes una cuenta!</a>
        </form>

    </div>
</div>
<script src="{{ asset('/js/validarRUT.js') }}"></script>
<script>
    let errors = document.querySelectorAll('.error-message')
    console.log(errors)
    setTimeout(function(){
        errors.forEach(function(error){
            error.style.display = "none"
        })
    }, 6000);
</script>
</body>
</html>