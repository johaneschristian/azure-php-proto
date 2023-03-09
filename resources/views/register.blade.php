<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Email</title>
</head>
<body>
    <h1>Email Registration</h1>
    <form action="" method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <button type="submit">register</button>
    </form>
    
</body>
</html>