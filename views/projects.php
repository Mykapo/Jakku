<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/main.css">
    <title>Projets | Mykapo</title>
</head>
<body>
    <?php require('partials/header.php'); ?>


    
    <main>
        <?php require('partials/aside.php'); ?>
        <div class="section-wrapper">
            <?php require('components/title.php'); ?>
            <?php //require('partials/empty.php'); ?>
            <table class="projects-table">
                <thead>
                    <tr>
                        <th></th>
                        <th class="row-fixedWidth">Nom du projet</th>
                        <th class="row-fixedWidth">Client</th>
                        <th>Statut</th>
                        <th>Montant</th>
                        <th>Deadline</th>
                        <th>Devis</th>
                        <th>Editer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="main-row">
                        <td class="table-icon"><button><span class="icon icon-icon_arrow"></span></button></td>
                        <td><h3>Refonte d'une application en natif</h3></td>
                        <td>Ombeline Reininger</td>
                        <td>Paiement en attente</td>
                        <td>5300€</td>
                        <td>15/06/18</td>
                        <td class="table-icon"><button><span class="icon icon-icon_pdf"></span></button></td>
                        <td class="table-icon"><button><span class="icon icon-icon_edit"></span></button></td>
                    </tr>
                    <tr class="subtable-row">
                        <td colspan="3">
                            <div>
                                <h4 class="subtable-title">Brief</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolores numquam blanditiis facere amet iusto omnis porro magni veritatis accusamus nemo, fuga tempora quibusdam tenetur sint placeat sed perferendis. Sequi.</p>
                            </div>
                            <div>
                                <h4 class="subtable-title">Facture</h4>
                            </div>
                            <div>
                                <h4 class="subtable-title">Notes</h4>
                            </div>
                            <div>
                                <h4 class="subtable-title">Documents</h4>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
