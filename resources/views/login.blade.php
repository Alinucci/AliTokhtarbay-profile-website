<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href={{ asset('css/login.css') }}>
</head>
<body>
    <form action="" method="">
        <label>Login</label>
        <input type="text" placeholder="Login">
        <label>Password</label>
        <input type="password" placeholder="Password">
        <button>Join</button>
        <p>
            You don't have an account? - <a href="<?php echo url('registr') ?>">Registration</a>!
        </p>

    </form>
</body>
</html>