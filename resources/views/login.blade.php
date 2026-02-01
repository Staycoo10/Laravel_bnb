<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Pagina de Login</h1>
    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Parola" required>
        <button type="submit">Autentificare</button>
    </form>
    <a href="/">Înapoi la Pagina Principală</a>
</body>
</html>