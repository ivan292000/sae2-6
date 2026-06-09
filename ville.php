<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Villes du Japon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Les villes incontournables</h1>
</header>

<nav>
    <a href="index.php">Accueil</a>
    <a href="villes.php">Villes à visiter</a>
    <a href="culture.php">Culture japonaise</a>
</nav>

<section class="card">

    <h2>Tokyo</h2>
    <p>
        Capitale du Japon, Tokyo est une immense métropole connue
        pour ses gratte-ciels, ses quartiers animés et sa gastronomie.
    </p>

    <h2>Kyoto</h2>
    <p>
        Ancienne capitale impériale, Kyoto possède de nombreux temples,
        jardins et sanctuaires traditionnels.
    </p>

    <h2>Osaka</h2>
    <p>
        Osaka est célèbre pour sa cuisine de rue, son château
        historique et son ambiance festive.
    </p>

    <?php
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    if (preg_match('/mobile/i', $userAgent))
    {
        echo "<p><strong>Vous consultez cette page depuis un smartphone.</strong></p>";
    }
    else
    {
        echo "<p><strong>Vous consultez cette page depuis un ordinateur.</strong></p>";
    }
    ?>

</section>

<footer>
    <p>Découvrez les plus belles villes japonaises.</p>
</footer>

</body>
</html>