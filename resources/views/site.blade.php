<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence de Voyage par Bus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background:rgb(0, 92, 149) ;
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
        footer {
            text-align: center;
            padding: 20px 0;
            background:rgb(0, 92, 149) ;
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .services, .gallery {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }
        .service, .gallery-item {
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 30%;
        }
        .gallery {
            flex-wrap: wrap;
        }
        .gallery-item {
            width: 30%;
            margin: 10px 0;
        }
        form {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }
        input, textarea {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background: rgb(0, 92, 149) ;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: rgb(0, 92, 149) ;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenue à notre Agence de Voyage </h1>
        <nav>
            <a href="#services">Services</a>
            <a href="galerie">Galerie</a>
            <a href="contact">Reservation</a>
            <a href="about">À Propos</a>
        </nav>
    </header>
    <div class="container">
        <section id="services">
            <h2>Nos Services</h2>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/WhatsApp Image 2025-01-19 à 19.36.21_7d596de8.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
</div>
        </section>
        <section id="gallery">
            <h2>Galerie</h2>
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </section>
        <section id="contact">
            <h2>Contactez-Nous</h2>
            <form>
                <input type="text" placeholder="Votre Nom" required>
                <input type="email" placeholder="Votre Email" required>
                <textarea placeholder="Votre Message" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
            <p>Email: contact@agencedevoyage.com</p>
            <p>Téléphone: +237 653 861 183</p>
        </section>
        <section id="about">
            <h2>À Propos de Nous</h2>
            <p>Nous sommes une agence de voyage spécialisée dans le transport par bus au Cameroun, offrant des services de qualité à nos clients.</p>
        </section>
    </div>
    <footer>
        <p>&copy; 2025 Agence de Voyage par Bus. Tous droits réservés.</p>
    </footer>
</body>
</html>