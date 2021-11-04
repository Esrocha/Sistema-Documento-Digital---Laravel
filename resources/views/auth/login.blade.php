<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>Sistema Documento Digital</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style_login.css">
</head>

<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="login-box">
            <h1>Documento Digital</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input placeholder="E-mail" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Senha"
                name="password"
                required autocomplete="current-password" >
            </div>

            <input type="submit" class="btn" value="Sign in">
        </div>
    </form>
</body>

</html>
