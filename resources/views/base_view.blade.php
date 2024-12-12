<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codingduluaja CMS</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/hjs/github-dark.min.css">

</head>
<body>
    <x-navbar/>
    @yield('main')
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/tinymce/tinymce.min.js"></script>
    <script src="assets/hjs/highlight.min.js"></script>
    <script src="assets/hjs/json.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
