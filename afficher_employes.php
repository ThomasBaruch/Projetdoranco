<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
    <header>
            <ul>
                <li>
                    <h1>Administration</h1>
                </li>
                <li>
                    <nav>
                        <ul>
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="afficher_employes.php">Gestion</a></li>
                        </ul>
                    </nav>
                </li>
            </ul>
        </header>

        <?php

            require_once('EmployeController.php');

            $employeSelect = new EmployeController(NULL, NULL, NULL, NULL, NULL, NULL, NULL);
            $employes = $employeSelect->listEmployes();

        ?>

        <section>
            <table>
                <tr>
                    <td>Employé</td>
                    <td>Prénom</td>
                    <td>Nom</td>
                    <td>Sexe</td>
                    <td>Service</td>
                    <td>Date d'embauche</td>
                    <td>Salaire</td>
                    <td>Action</td>
                </tr>
                <?php foreach($employes as $values): ?>
                <tr>
                    <td><?= $values['id_employes']; ?></td>
                    <td><?= $values['prenom']; ?></td>
                    <td><?= $values['nom']; ?></td>
                    <td><?= $values['sexe']; ?></td>
                    <td><?= $values['service']; ?></td>
                    <td><?= $values['date_embauche']; ?></td>
                    <td><?= $values['salaire']; ?></td>
                    <td><button>Update</button></td>
                    <td><button>Delete</button></td>
                </tr>
                <?php endforeach; ?>
            </table>

                </section>
    </body>
</html>