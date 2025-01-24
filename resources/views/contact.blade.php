<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Billet - Agence de Voyage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background: rgb(0, 92, 149) ;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input, select {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            background: rgb(0, 92, 149) ;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background:#35424a;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background:rgb(0, 92, 149) ;
            color: #fff;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Agence de Voyage</h1>
        <p>Réservez votre billet maintenant!</p>
    </header>

    <div class="container">
        <h2>Formulaire de Réservation</h2>
        <form action="{{route{'reservation.store'}}}" method="POST">
            @crsf
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="destination">Destination:</label>
            <select id="destination" name="destination" required>
                <option value="">Choisissez une destination</option>
                <option value="Douala">Douala</option>
                <option value="Yaounde">Yaounde</option>
                <option value="kribi">Kribi</option>
                <option value="bafan">Bafan</option>
                <option value="Baganté">Baganté</option>
            </select>

            <label for="date">Date de départ:</label>
            <input type="date" id="date" name="date_depart" required>

            <label for="nombre">Nombre de billets:</label>
            <input type="number" id="nombre" name="nombre_billets" min="1" required>

            <button type="submit">Réserver</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 Agence de Voyage. Tous droits réservés.</p>
    </footer>
</body>
</html>