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
    <div id="page-container" class="enable-page-overlay side-scroll page-header-modern main-content-boxed">

        @include('components.header')

        <main id="main-container">
            <div class="content">
                {{ $slot }}
            </div>
        </main>

        <footer id="page-footer">
            <div class="clearfix py-20 content font-size-sm">
                <div class="float-right">
                    CMA Saúde e Segurança do Trabalho.
                </div>
                <div class="float-left">
                    <a class="font-w600" href="#">SOC | Sênior </a> &copy;
                    <span class="js-year-copy"></span>
                </div>
            </div>
        </footer>

    </div>
    <script src="{{ asset('assets/js/codebase.core.min.js') }}"></script>
    <script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
    <livewire:scripts />
    <script src="{{ asset('assets/js/modal.js') }}"></script>
</body>

</html>
