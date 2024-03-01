<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class='bg-dark'>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">S5-L2 News</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul>
       
        </div>
        </div>
        </nav>
    </header>

<main>
    <div class="container">
    <form method='post' action='controller.php' class=' mt-5 p-5  w-50 mx-auto rounded-4 shadow bg-light'>
        <div class="mb-3">
            <label for="inputMail">Mail</label>
            <input type="email" class="form-control" id="inputMil" aria-describedby="emailHelp" name='email'>
        </div>
        <div class="mb-3">
            <label for="inputPass">Password</label>
            <input type="password" class="form-control" id="inputPass" name='password'>
        </div>
        <div class="mb-3">
            <label for="inputLang">Seleziona la lingua:</label>
            <select class="form-select" aria-label="Default select example" id='inputLang' name='language'>
                
                <option value="ita">Italiano</option>
                <option value="eng">English</option>
                
            </select>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name='check'>
            <label class="form-check-label" for="exampleCheck1">Spunta per mantenere l'accesso</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <?php
    if(isset($_SESSION['error'])){
        echo "<div class='alert alert-danger' role='alert'>".
        $_SESSION['error']."
      </div>";
    }
    ?>


    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>