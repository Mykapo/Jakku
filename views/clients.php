<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/main.css">
    <title>Clients | Mykapo</title>
</head>
<body>
    <?php require('partials/header.php'); ?>

    <?php require('partials/aside.php'); ?>

    
    <main>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Client</th>
                    <th>Mail</th>
                    <th>Téléphone</th>
                    <th>Site web</th>
                    <th>Editer</th>
                </tr>
            </thead>
            <tbody>
                <tr class="main-row">
                    <td><span class="icon icon-icon_arrow"></span></td>
                    <td>Ombeline Reninger</td>
                    <td>ombeline@mail.fr</td>
                    <td>0657874656</td>
                    <td>www.ombeline.com</td>
                    <td><span class="icon icon-icon_edit"></span></td>
                </tr>
                <tr class="subtable-header">
                    <th></th>
                    <th>Nom du projet</th>
                    <th>Statut</th>
                    <th>Montant</th>
                    <th>Deadline</th>
                    <th>Devis</th>
                </tr>
                <tr>
                    <td><span class="icon icon-icon_arrow"></span></td>
                    <td>Développement site vitrine</td>
                    <td>en attente</td>
                    <td>2000€</td>
                    <td>12/06/2018</td>
                    <td><span class="icon icon-icon_pdf"></span></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>
