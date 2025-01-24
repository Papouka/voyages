<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie - Agence de Voyage </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: rgb(0, 92, 149) ;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            margin: 20px 0;
        }
        nav a {
            margin: 0 15px;
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0;
        }
        .gallery-item {
            background: #ffffff;
            margin: 10px 0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 30%;
        }
        .gallery-item img {
            width: 100%;
            border-radius: 5px 5px 0 0;
        }
        .gallery-item h3 {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Galerie de notre Agence de Voyage </h1>
        <nav>
            <a href="site">Accueil</a>
            <a href="services.html">Services</a>
            <a href="contact">Contact</a>
            <a href="about">À Propos</a>
        </nav>
    </header>
    <div class="container">
        <section id="gallery">
            <h2>Nos Excursions</h2>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="image1.jpg" alt="Excursion 1">
                    <h3>Excursion au Mont Cameroun</h3>
                </div>
                <div class="gallery-item">
                    <img src="image2.jpg" alt="Excursion 2">
                    <h3>Visite de Yaoundé</h3>
                </div>
                <div class="gallery-item">
                    <img src="image3.jpg" alt="Excursion 3">
                    <h3>Safari à Waza</h3>
                </div>
                <div class="gallery-item">
                    <img src="image4.jpg" alt="Excursion 4">
                    <h3>Plage de Kribi</h3>
                </div>
                <div class="gallery-item">
                    <img src="image5.jpg" alt="Excursion 5">
                    <h3>Découverte de la culture Bamiléké</h3>
                </div>
                <div class="gallery-item">
                    <img src="image6.jpg" alt="Excursion 6">
                    <h3>Exploration des Chutes de la Lobé</h3>
                </div>
            </div>
        </section>
    </div>
</body>
</html>