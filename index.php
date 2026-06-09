<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tourisme au Japon - Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Découvrir le Japon</h1>
</header>

<nav>
    <a href="index.php">Accueil</a>
    <a href="villes.php">Villes à visiter</a>
    <a href="culture.php">Culture japonaise</a>
</nav>

<section class="card">
    <h2>Bienvenue au Japon</h2>

    <p>
        Le Japon est un pays fascinant mêlant traditions ancestrales
        et technologies modernes.
    </p>

    <p>
        Aujourd'hui nous sommes le :
        <strong><?php echo date("d/m/Y"); ?></strong>
    </p>

    <p>
        Il est actuellement :
        <strong><?php echo date("H:i:s"); ?></strong>
    </p>

    <p>
        Votre adresse IP :
        <strong><?php echo $_SERVER['REMOTE_ADDR']; ?></strong>
    </p>
</section>

<footer>
    <p>SAÉ S2.03 - Tourisme au Japon</p>
</footer>

</body>
</html>