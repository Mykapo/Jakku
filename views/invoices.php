<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/main.css">
    <link title="color" rel="stylesheet" href="/styles/base/color/color-purple.css">
    <title>Factures | Mykapo</title>
</head>
<body>
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
                <li class="main-menu__item active">
                    <a href="invoices.php">
                        <span class="icon icon-icon_facture"></span>
                        <div class="infos">
                            <h2>Facturation</h2>
                            <span>Accédez à la liste de tous vos clients et à leurs coordonées</span>
                        </div>
                    </a>
                </li>
                <li class="main-menu__item">
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
            <h1 class="section-title">Factures</h1>
            <?php //require('partials/empty.php'); ?>
            <table class="invoices-table">
                <thead>
                    <tr>
                        <th></th>
                        <th class="row-fixedWidth">Nom du projet</th>
                        <th class="row-fixedWidth">Client</th>
                        <th>Statut</th>
                        <th>Montant</th>
                        <th>Date</th>
                        <th>Facture</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="main-row">
                        <td class="table-icon"><button class="expand-row-button"><span class="icon icon-icon_arrow"></span></button></td>
                        <td><h3>Refonte d'une application en natif</h3></td>
                        <td>Ombeline Reininger</td>
                        <td>Paiement en attente</td>
                        <td>5300€</td>
                        <td>15/06/18</td>
                        <td class="table-icon"><button><span class="icon icon-icon_pdf"></span></button></td>
                    </tr>
                    <tr class="subtable-row">
                        <td colspan="3">
                            <h4 class="subtable-title">Contenu</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolores numquam blanditiis facere amet iusto omnis porro magni veritatis accusamus nemo, fuga tempora quibusdam tenetur sint placeat sed perferendis. Sequi.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
<script src="js/main.js"></script>
</html>
