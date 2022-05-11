<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script
        src="https://kit.fontawesome.com/fd3d36bb52.js"
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset(('css/app.css')) }}">
    <title>Laravel Task</title>
</head>
<body>


@yield('header1')

@yield('mainContent')

@yield('form')
</body>
</html>
