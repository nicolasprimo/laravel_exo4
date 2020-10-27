<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
    <h2 class="nico">UOUGOUOU</h2>
    <h3 class="troll">NICOLAS</h3>
    @include('partials.header')
    @include('sections.about')
    @include('sections.contact')
    @include('partials.footer')
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>