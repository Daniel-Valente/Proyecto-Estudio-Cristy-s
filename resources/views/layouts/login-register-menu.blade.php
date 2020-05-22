<html>

<head>
    <title>Estudio Cristy's</title>
    <link href="{{ asset('css/styleLogin.css') }}" rel="stylesheet">
</head>
<body>
    <section class="hero-container">
        <div class="container">
            @yield('content')
        </div>
    </section>

    <script>
        var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }

    </script>

</body>

</html>
