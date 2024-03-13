<!DOCTYPE html>
<html  dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>

<body>

    @include('admin.body.sidebar')
    @include('admin.body.header')

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
