<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison de Stock de Voiture</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.card {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    width: 100%;
    text-align: center;
}

.card h2 {
    color: #007BFF;
    margin-bottom: 20px;
}

.card p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.card h3 {
    margin-bottom: 10px;
    color: #333;
}

.card ul {
    text-align: left;
    margin: 20px 0;
    padding: 0;
    list-style-type: disc;
}

.card ul li {
    margin: 10px 0;
    font-size: 16px;
}

.card form {
    margin-top: 20px;
}

.card input[type="checkbox"] {
    margin-right: 10px;
}

.card button {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin: 10px;
}
a{
    text-decoration: none;
}

.card button[type="button"] {
    background-color: #dc3545;
}

.card button:hover {
    background-color: #0056b3;
}

.card button[type="button"]:hover {
    background-color: #c82333;
}

    </style>
</head>
<body>
    <div class="card">
        <h2>Bienvenue Ms.<?= session()->get('user')['nom'] ?> chez Maison de Stock de Voiture</h2>
        <p>Nous offrons une large gamme de voitures de différentes marques et modèles. Veuillez lire attentivement nos conditions avant de continuer.</p>
        
        <h3>Conditions:</h3>
        <ul>
            <li>Les voitures doivent être retournées en bon état.</li>
            <li>Toutes les transactions sont finales et non remboursables.</li>
            <li>Les paiements doivent être effectués intégralement avant la livraison.</li>
            <li>Les clients doivent respecter les horaires de rendez-vous pour les inspections.</li>
        </ul>
        
        <form>
            <input type="checkbox" id="agree" name="agree" required>
            <label for="agree">J'accepte les conditions générales du site.</label><br><br>
            
            <button type="submit"> <a href="/voiture">Accepter</a></button>
            <button type="button" onclick="location.href='/'">  <a href="/logout">Back</a></button>
        </form>
    </div>
</body>
</html>
