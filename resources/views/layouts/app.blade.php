<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @isset($title)
        <title>{{ $title }} | Spatie Guidelines</title>
    @else
        <title>Spatie Guidelines</title>
    @endif

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6194432/6145752/css/fonts.css" />

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body @if($background ?? false) class="waves" @endif>
    {{ $slot }}
</body>
</html>