<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Connexion</title>
</head>
<body>
<div class="container">
    <section class="section">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                    <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item">
                        Films
                    </a>

                    <a class="navbar-item">
                        Séries Tv
                    </a>
                    <a class="navbar-item">
                        Animations
                    </a>


                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href="inscription.php">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light" href="connexion.php">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <figure class="image is-3by1">
        <img src="https://bulma.io/images/placeholders/256x256.png">
    </figure>
    <br>
    <form action="verifInscription.php" method="post">
<div class="field">
    <p class="control has-icons-left has-icons-right">
        <input class="input" type="text" placeholder="Nom d'utilisateur" name="name">
        <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>

    </p>
</div>
    <div class="field">
    <p class="control has-icons-left has-icons-right">
        <input class="input" type="email" placeholder="Email" name="email">
        <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    </p>
</div>
<div class="field">
    <p class="control has-icons-left">
        <input class="input" type="password" placeholder="Password" name="password">
        <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
    </p>
</div>
<div class="field">
    <p class="control">
        <input type="submit" class="button is-success" value="Inscription">

        </input>
    </p>
</div>
    </form>
</div>
</body>
</html>