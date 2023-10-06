<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport">
    <title>Carton d'Inscription</title>
    <link rel="stylesheet" href="design2.css">
</head>
<body>
    <header>
        <img src="file:///E:/WEB%20SITE/MEDIA/logo%20CUP.jpg" alt="login">
    </header>
    <div>
        <h3>CARTON D'INSCRIPTION <br>A KBHR</h3>
    </div>
    <div class="liste">
        <p>Nom: <?php echo $_GET["name"] ?> </p>
        <p>Prénom: <?php echo $_GET["surname"]?> </p>
        <p>Né(e) le: <?php echo $_GET["date"]?> </p>
        <p>Pays d'origine: <?php echo $_GET["pays"]?> </p>
        <p>Nationalité: <?php echo $_GET["nationalite"]?> </p>
        <p>E-Mail: <?php echo $_GET["email"]?> </p>
        <p>Numéro de téléphone: +225 <?php echo $_GET["number"]?> </p>
        <p>Niveau d'études: <?php echo $_GET["niveau"]?> </p>
        <p>Cycle souhaité: <?php echo $_GET["cycle"]?> </p>
    </div>
    <div>
        <p class="Ty">Nous avons reçu votre CV. Merci! </p>
    </div>
    <button onclick="imprimerPage()">Imprimer</button>

    <script>
        function imprimerPage() {
            window.print(); // Cette fonction ouvre la boîte de dialogue d'impression du navigateur
        }
    </script>
</body>
</html>