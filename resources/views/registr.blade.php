<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href={{ asset('css/login.css') }}>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label>Full Name</label>
        <input type="text" placeholder="Full Name">
        <label>Login</label>
        <input type="text" placeholder="Login">
        <label>Emali</label>
        <input type="email" placeholder="Email">
        <label>Profile Image</label>
        <input type="file">
        <label>Password</label>
        <input type="password" placeholder="Password">
        <label>Confirm the password</label>
        <input type="password" placeholder="Confirm the password">
        <button>Join</button>
        <p>
            You already have an account? - <a href="<?php echo url('login') ?>">Authorization</a>!
        </p>

    </form>
</body>
</html>