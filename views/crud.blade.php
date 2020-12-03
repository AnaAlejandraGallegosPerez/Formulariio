<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome! ^-^</title>
    <link rel="stylesheet" href="">
</head>

<body>
    @section ('crud')
    <main>
    <form action="{{action('PruebasController@verificar')}}" method = "POST">
        {{csrf_field()}}
        <label for="user">User:</label>
        <input type="text" name = "user">
        <br>
        <label for="pass">Password:</label>
        <input type="password" name = "pass">
        <br>
       
        <input type="submit" value = "Submit data">
    </form>
    </main>
    @show
</body>

</html>