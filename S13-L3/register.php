<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
</head>
<body>

<div>
    <h1>REGISTRATI</h1>
        <form method="POST" action="gestione.php" enctype="multipart/form-data">
            <input type="text" placeholder="FirstName..." name='firstname' >
            <input type="text" placeholder="Lastname..." name='lastname' >
            <input type="mail" placeholder='Inserisci la tua mail...' name='mail'>
            <input type="password" placeholder='inserisci la password' name='password'>
           <!--  <input type="file" placeholder="Inserisci file" name="miofile" > -->
            <button type="submit">Invia Dati</button>
        </form>
    </div>
    
</body>
</html>