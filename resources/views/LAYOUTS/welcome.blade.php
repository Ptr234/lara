@include('LAYOUTS.phpsec')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title') | {{config('app.name','laravel') }}</title>

    <!-- Security Headers -->
    @include('LAYOUTS.security')

   
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    @include('LAYOUTS.sanitise')
    
</head>
<body>
@yield('content')
   
</body>
</html>
