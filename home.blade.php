<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
</head>
<body>
    <h3>welcome to home page in laravel</h3>
</body>
</html>
@php
echo "first code of php in laravel";

    
$username = "Manahil";
$email = "Manahil@gmail.com";

@endphp
<h3>{{$username}}</h3>  
<h3>{{$email}}</h3>

@if($username = "Manahil")
<h3>the condition is true</h3>
@else
<h3>the condition is false</h3>
@endif
