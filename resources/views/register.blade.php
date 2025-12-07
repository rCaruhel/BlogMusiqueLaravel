<!DOCTYPE html>
<html>
<head>
    <title>S'enregistrer</title>
</head>
<body>
<h1>Créer un compte</h1>

<form action="/register" method="POST">
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
