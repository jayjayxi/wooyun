<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css?{{ str_random(6) }}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .input-group span.input-group-addon:hover{
            cursor: pointer;
        }
        .icon-span{
            color: #aaa;
            margin-left: 15px;
            font-size: 12px;
        }
        .title .icon-span{
            font-size: 14px;
        }
        .title .icon-span a:hover{
            text-decoration: none;
        }
        .content *{
            font-size: 16px;
            border: 0;
        }
        .footer{
            padding: 25px;
        }
    </style>
@stack('styles')
<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    @include('common._header')
    @yield('content')
    @include('common._footer')
</div>
<!-- Scripts -->
<script src="/js/app.js?{{ str_random(6) }}"></script>
@stack('scripts')
</body>
</html>
