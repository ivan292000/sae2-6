<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Culture Japonaise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Culture et traditions japonaises</h1>
</header>

<nav>
    <a href="index.php">Accueil</a>
    <a href="villes.php">Villes à visiter</a>
    <a href="culture.php">Culture japonaise</a>
</nav>

<section class="card">

    <h2>Les temples</h2>
    <p>
        Le Japon possède des milliers de temples bouddhistes et
        sanctuaires shintoïstes.
    </p>

    <h2>La gastronomie</h2>
    <p>
        Les sushis, ramens, tempuras et yakitoris sont parmi les plats
        les plus populaires.
    </p>

    <h2>Les cerisiers en fleurs</h2>
    <p>
        Chaque printemps, le Hanami attire des millions de visiteurs
        venus admirer les sakura.
    </p>

    <div id="position">
        Autorisez la géolocalisation pour afficher votre position.
    </div>

</section>

<script>
navigator.geolocation.getCurrentPosition(
function(position)
{
    document.getElementById("position").innerHTML =
    "Latitude : " + position.coords.latitude +
    "<br>Longitude : " + position.coords.longitude;
});
</script>

<footer>
    <p>Immersion dans la culture japonaise.</p>
</footer>

</body>
</html>