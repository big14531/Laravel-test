<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    {{--  Dropzone.js cdn  --}}
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    {{--  Prevent drop file to open  --}}
    <script>    
            var dropzoneId = "dropzone";
            window.addEventListener("dragenter", function(e) {
            if (e.target.id != dropzoneId) {
                e.preventDefault();
                e.dataTransfer.effectAllowed = "none";
                e.dataTransfer.dropEffect = "none";
            }
            }, false);
            window.addEventListener("dragover", function(e) {
            if (e.target.id != dropzoneId) {
                e.preventDefault();
                e.dataTransfer.effectAllowed = "none";
                e.dataTransfer.dropEffect = "none";
            }
            });
            
            window.addEventListener("drop", function(e) {
            if (e.target.id != dropzoneId) {
                e.preventDefault();
                e.dataTransfer.effectAllowed = "none";
                e.dataTransfer.dropEffect = "none";
            }
            });
    </script>
</head>
<body>
    <div id="app">
        @include('layouts.nav')
        <main class="py-4">
            <router-view></router-view>
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    
</body>
</html>
