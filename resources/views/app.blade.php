<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


    <link href="{{asset('zenBlog/img/favicon.png')}}" rel="icon">
    <link href="{{asset('zenBlog/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <!-- ============================   ads mndsrv file =========================== -->
    {{--<script async src="https://ss.mndsrv.com/ctatic/71b1d0bf-bcfd-43aa-b366-f4e54eae5644.js"></script>--}}

    @vite(['resources/js/app.js'])
    @inertiaHead
</head>
<body class="family-inter">
@inertia


</body>
</html>