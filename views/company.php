<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/main.css">
    <link title="color" rel="stylesheet" href="/styles/base/color/color-purple.css">
    <title>Clients | Mykapo</title>
</head>
<body class="theme--green">
    <?php require('partials/header.php'); ?>

    <main>
        <nav class="main-menu" role="navigation">
            <ul>
                <li class="main-menu__item">
                    <a href="clients.php">
                        <span class="icon icon-icon_user"></span>
                        <div class="infos">
                            <h2>Clients</h2>
                            <span>Accédez à la liste de tous vos clients et à leurs coordonées</span>
                        </div>
                    </a>
                </li>
                <li class="main-menu__item">
                    <a href="projects.php">
                        <span class="icon icon-icon_list"></span>
                        <div class="infos">
                            <h2>Projets</h2>
                            <span>Accédez à la liste de tous vos clients et à leurs coordonées</span>
                        </div>
                    </a>
                </li>
                <li class="main-menu__item">
                    <a href="invoices.php">
                        <span class="icon icon-icon_facture"></span>
                        <div class="infos">
                            <h2>Facturation</h2>
                            <span>Accédez à la liste de tous vos clients et à leurs coordonées</span>
                        </div>
                    </a>
                </li>
                <li class="main-menu__item active">
                    <a href="company.php">
                        <span class="icon icon-icon_company"></span>
                        <div class="infos">
                            <h2>Votre société</h2>
                            <span>Retrouvez toutes les informations relatives à votre société</span>
                        </div>
                    </a>
                </li>
                <li class="main-menu__item soon">
                    <a>
                        <span class="icon icon-icon_dashboard"></span>
                        <div class="infos">
                            <h2>Tableau de bord <span class="soon-tag">Bientôt !</span></h2>
                            <span>Accédez à la liste de tous vos clients et à leurs coordonées</span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="section-wrapper">
            <h1 class="section-title">Votre société</h1>
            <form class="form-company">
                <label for="company">Nom de votre société</label>
                <input type="text" id="company" />
                <label for="siret">Numéro de SIRET</label>
                <input type="text" id="siret" />
                <label for="address">Adresse de facturation</label>
                <input type="text" id="address" />
                <label for="phone">Numéro professionnel</label>
                <input type="tel" id="phone" />
                <label for="email">Email professionnel</label>
                <input type="email" id="email" />
                <p class="logo-title">Votre logo</p>
                <p>En format png 32*200 pixels maximum</p>
                <label class="label-logo" for="logo"></label>
                <input name="logo" type="file">
                <p class="logo-indication">Ajouter votre logo</p>
                <p class="select-title">Choix du thème</p>
                <select id="theme">
                    <option value="violet" selected>Violet</option> 
                    <option value="orange">Orange</option>
                    <option value="bleu">Bleu</option>
                    <option value="green">Vert</option>
                </select>
            </form>
        </div>
        
    </main>
    <script>
        var label = document.querySelector('.label-logo');
        var inputFile = document.querySelector('.form-company input[type="file"]');
        label.addEventListener('click', function(e){
            e.preventDefault();

            inputFile.click();
        })

        var body = document.querySelector('body');

    </script>
</body>
<script src="js/main.js"></script>
</html>
