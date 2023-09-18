<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions Légales - Service de Messagerie</title>
        <script>
    // Fonction pour recharger la page toutes les secondes
    function rechargerPage() {
    location.reload();
    }

    // Appeler la fonction toutes les secondes
    setInterval(rechargerPage, 1000);
    </script>
</head>

<body class="pomme">
<?php include "header.php"; ?>
<div class="banane">
    <header>
        <h1>Mentions Légales</h1>
    </header>
    <section class="info-box">
        <h2>1. Informations Générales</h2>
        <p>Raison sociale : Digipath</p>
        <p>Adresse : 16 bd Gén de Gaulle, 44200 Nantes</p>
        <p>Téléphone : 0666666554</p>
        <p>Email : digipath@gpoule.com</p>
    </section>

    <section class="info-box">
        <h2>2. Responsable de la Publication</h2>
        <p>Nom du responsable : BG</p>
        <p>Adresse email du responsable : Bg@pomme.com</p>
    </section>

    <section class="info-box">
        <h2>3. Hébergement</h2>
        <p>Le site est hébergé par : bochapeau</p>
        <p>Adresse de l'hébergeur : 3 Rue du petit pois 44200 Nantes </p>
    </section>

    <section class="info-box">
        <h2>4. Propriété Intellectuelle</h2>
        <p>Le contenu de ce site web est protégé par les lois sur la propriété intellectuelle. Toute reproduction, même partielle, est interdite sans autorisation préalable.</p>
    </section>

    <section class="info-box">
        <h2>5. Données Personnelles</h2>
        <p>Nous collectons et traitons vos données personnelles conformément à notre politique de confidentialité. Vous pouvez consulter notre politique de confidentialité pour en savoir plus sur la manière dont nous utilisons vos données.</p>
        <p>Politique de confidentialité : <a href="confidentialite.php">Cliquez ici</a></p>
    </section>


    <section class="info-box">
        <h2>7. Contact</h2>
        <p>Pour toute question ou demande concernant ces mentions légales, veuillez nous contacter à l'adresse suivante : digipath@gpoule.com</p>
    </section>
    <?php include "footer.php"; ?>
</div>
</body>
</html>
