<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/admin/css/UserLogin.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
    <div class="login-box">
        <h2>Login</h2>
        @include('admin.alert')
        <form  action="/user/login/auth" method="post" >
            <div class="user-box">
                <input type="email" name="email" class="form-control">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" class="form-control" >
                <label>Password</label>
            </div>
            <button type="submit" style="background: none;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Sign In
            </button>
            @csrf
        </form>
    </div>
    </body>
</html>