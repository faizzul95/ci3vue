<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="base-url" content="<?= base_url() ?>">
    <meta name="app-name" content="<?= env('APP_NAME') ?>">

    <title> - | <?= env('APP_NAME') ?> </title>
    <link rel="icon" href="<?= base_url('public/images/logo.png') ?>">

    <?= vite('main.js') ?>

</head>

<body>
    <div id="app"></div>
</body>

</html>