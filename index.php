<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Galet du Jardin Botanique</title>
    <link rel="shortcut icon" type="image/png" href="../images/icons8-cocktail-48.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
        include('navbar.php');
    ?>

    <div class="burger2" id="navbar">
        <ul>
            <li class="padding-nav"><a href="#menu">Notre menu</a></li>
            <li class="padding-nav"><a href="#evenements">Nos évènements</a></li>
            <li class="padding-nav"><a href="#contact">Contactez-nous</a></li>
            <li class="padding-nav"><a href="#reseaux">Où sommes-nous ?</a></li>
        </ul>
    </div>

        <?php
            include('header.php');
        ?>

    <span class="anchor" id="menu"></span>
    <section>
        <h2 class="banner-background banner-background-menu">MENU</h2>
        <div class="container-menu">
            <div class="ABC">
                <div class="AB">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col" class="card-title">Apéritifs-Entrées</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="row">Planche de jambons ibériques</th>
                                <td>7€</td>
                            </tr>
                            <tr>
                                <th scope="row" class="row">Guacamole et tortillas chips</th>
                                <td>7€</td>
                            </tr>
                            <tr>
                                <th scope="row" class="row">Oignons rings</th>
                                <td>7€</td>
                            </tr>
                            <tr>
                                <th scope="row" class="row">Rolls végétariens</th>
                                <td>7€</td>
                            </tr>
                            <tr>
                                <th scope="row" class="row">Tartare de légumes provençaux</th>
                                <td>7€</td>
                            </tr>
                            <tr>
                                <th scope="row" class="row">Tartare de poissons du jour</th>
                                <td>7€</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="B">
                        <thead>
                            <tr>
                                <th scope="col" class="card-title">Plats</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="row">Cheeseburger et ses frites maison</th>
                                <td>15€</td>
                            </tr>
                            <tr>
                                <th scope="row" class="row">Burger Bacon et ses frites maison</th>
                                <td>15€</td>
                            </tr>
                            <tr>
                                <th scope="row" class="row">Burger végétarien et ses frites maison</th>
                                <td>15€</td>
                            </tr>
                            <tr>
                                <th scope="row" class="row">Poisson du jour, accompagnenemt</th>
                                <td>15€</td>
                            </tr>
                            <tr>
                                <th scope="row" class="row">Viande du jour, accompagnement</th>
                                <td>15€</td>
                            </tr>
                            <tr>
                                <th scope="row" class="row">Fusilli aux tomates et citrons confits</th>
                                <td>15€</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <table class="C">
                    <thead>
                        <tr>
                            <th scope="col" class="card-title">Desserts</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="row">Assortiment de fromages</th>
                            <td>8€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Trio de crèmes brûlées</th>
                            <td>8€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Tartelette aux fruits de saison</th>
                            <td>8€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Dessert du jour</th>
                            <td>8€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Glaces/sorbets au choix</th>
                            <td>8€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Café/Thé gourmand</th>
                            <td>8€</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
            <div class="D">
                <table>
                    <thead>
                        <tr>
                            <th scope="col" class="card-title">Boissons</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="row">Soda 33cl</th>
                            <td>3€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Jus de fruits</th>
                            <td>3€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Smoothies</th>
                            <td>5€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Bière locale</th>
                            <td>5€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Vin au verre</th>
                            <td>5€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Digestifs</th>
                            <td>6€</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="EF">
                <table>
                    <thead>
                        <tr>
                            <th scope="col" class="card-title">Desserts</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="row">Assortiment de fromages</th>
                            <td>8€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Trio de crèmes brûlées</th>
                            <td>8€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Tartelette aux fruits de saison</th>
                            <td>8€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Dessert du jour</th>
                            <td>8€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Glaces/sorbets au choix</th>
                            <td>8€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Café/Thé gourmand</th>
                            <td>8€</td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <tr>
                            <th scope="col" class="card-title">Boissons</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="row">Soda 33cl</th>
                            <td>3€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Jus de fruits</th>
                            <td>3€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Smoothies</th>
                            <td>5€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Bière locale</th>
                            <td>5€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Vin au verre</th>
                            <td>5€</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row">Digestifs</th>
                            <td>6€</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
        </div>
        </div>
    </section>
    <span class="anchor" id="evenements"></span>
    <section>
        <h2 class="banner-background banner-background-evenements">EVENEMENTS</h2>
        <main>
            <?php
            require_once 'connec.php';

            $pdo = new \PDO(DSN, USER, PASS);

            $query = 'SELECT * FROM event';
            $statement = $pdo->query($query);
            $events = $statement->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <section class="carousel">
                <ul class="carousel-items">
                    <?php foreach ($events as $event):  ?>
                    <li class="carousel-item">
                        <div class="card">
                            <h2 class="card-title"><?= $event['title'] ?></h2>
                            <img src="../images/<?= $event['image'] ?>" class="carousel-img" />
                            <div class="card-content">
                                <p><?= $event['description']?></p>
                                <a href="#" class="button">En savoir plus</a>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </main>  
    </section>
    <span class="anchor" id="contact"></span>
    <section id="contact">
        <h2 class="banner-background banner-background-contact">CONTACTEZ-NOUS</h2>
        <form>
            <form class="contact">
                <div class="contactus">  
                    <input class="item2 contact margintopform form-border" type="email" placeholder="@">
                    <input class="item2 contact margintopform form-border" type="text" placeholder="Nom et prénom">
                    <select name="listselect" id="findthem-select" class="item2 select margintopform form-border">
                        <option value="reservation">Réservation</option>
                        <option value="question">Question(s)</option>
                        <option value="autre">Autre</option>
                    </select>
                    <textarea class="item2 message margintopform form-border" placeholder="Votre message"></textarea>
                    <div class="item2 buttoncontainer">
                        <button class="button margintopform" type="submit">Envoyer !</button>
                    </div>
                </div>
            </form>   
        </form>
    </section>

    <?php
    include('footer.php');
    ?>

    <script src="script.js"></script>
</body>
</html>
