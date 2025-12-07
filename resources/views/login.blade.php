<!DOCTYPE html>
<html>
<head>
    <title>Se connecter</title>
</head>
<body>
<h1>Connexion</h1>

<form action="/login" method="POST">
    @csrf

    <div>
        <label>Username :</label>
        <input type="text" name="username" required>
    </div>

    <br>

    <div>
        <label>Mot de passe :</label>
        <input type="password" name="password" required>
    </div>

    <br>

    <input type="submit" value="Valider">
</form>
</body>
</html>
