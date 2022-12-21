<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="{{ base_url }}">
    <meta name="base-url" content="<?= base_url() ?>">

    <title> {{ $title }} | {{ env('APP_NAME') }} </title>
    <link rel="icon" href="{{ asset('images/logo.png', null, false) }}">

    <?= vite('main.js') ?>

</head>

<body>
    @yield('content')
</body>

</html>