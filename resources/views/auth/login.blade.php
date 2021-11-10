<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>SOC | Sênior</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">
    <livewire:styles />
</head>

<body>
    <div id="page-container" class="main-content-boxed">
        <main id="main-container">
            <div class="bg-primary">
                <div class="hero-static content content-full bg-white invisible" data-toggle="appear">
                    <div class="py-30 px-5 text-center">
                        <a class="link-effect font-w700">
                            <span class="font-size-xl text-primary-dark">SOC - </span><span class="font-size-xl">Sênior</span>
                        </a>
                        <h1 class="h2 font-w700 mt-50 mb-10">Bem-vindo ao seu painel</h1>
                        <h2 class="h4 font-w400 text-muted mb-0">Faça login</h2>
                    </div>
                    <livewire:login.logincomponent />
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('assets/js/codebase.core.min.js') }}"></script>
    <script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
    <livewire:scripts />
</body>

</html>
