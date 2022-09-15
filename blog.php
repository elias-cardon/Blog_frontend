<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="C'est le blog de Jobba, le meilleur de France.">
    <meta name="keywords" content="HTML, CSS, JavaScript, blog, Jobba, meilleur, Elias, Menace, Article, Star Wars">
    <meta name="author" content="Elias Cardon aka Jobba">
    <title>Le blog de Jobba</title>
    <!--C'est le CSS-->
    <link rel="icon" type="image/png" href="assets/images/logo.png"/>
    <link rel="stylesheet" href="assets/style.css">
    <!--Iconscout CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
</head>
<body>
<!--==============================NAVBAR=========================================-->
<nav>
    <div class="container nav__container">
        <a href="index.php" class="nav__logo">Le blog de Jobba</a>
        <ul class="nav__items">
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">A propos</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <!--<li><a href="signin.php">Se connecter</a></li>-->
            <li class="nav__profile">
                <div class="avatar">
                    <img src="./assets/images/avatar1.jpg" alt="Un avatar">
                </div>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
                </ul>
            </li>
        </ul>

        <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
    </div>
</nav>
<!--==============================END OF NAVBAR=========================================-->

<!--==============================SEARCHBAR=========================================-->
<section class="search__bar">
    <form action="" class="container search__bar-container">
        <div>
            <i class="uil uil-search"></i>
            <input type="search" name="" placeholder="Rechercher">
        </div>
        <button type="submit" class="btn">Go</button>
    </form>
</section>
<!--==============================END OF SEARCHBAR=========================================-->

<!--===============================POST=========================================-->
<section class="posts">
    <div class="container posts__container">
        <article class="post">
            <div class="post__thumbnail">
                <img src="./assets/images/blog2.jpg" alt="Image du blog2">
            </div>
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.php">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </a>
                </h3>
                <p class="post__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cupiditate
                    delectus dolore ea expedita id, labore modi non quidem quo quos, repellat voluptatum.
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./assets/images/avatar3.jpg" alt="Avatar de l'auteur">
                    </div>
                    <div class="post__author-info">
                        <h5>Par : Jobbax</h5>
                        <small>3 septempbre 2022 - 17:49</small>
                    </div>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./assets/images/blog3.jpg" alt="Image du blog2">
            </div>
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.php">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </a>
                </h3>
                <p class="post__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cupiditate
                    delectus dolore ea expedita id, labore modi non quidem quo quos, repellat voluptatum.
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./assets/images/avatar2.jpg" alt="Avatar de l'auteur">
                    </div>
                    <div class="post__author-info">
                        <h5>Par : Jobbax</h5>
                        <small>3 septempbre 2022 - 17:49</small>
                    </div>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./assets/images/blog4.jpg" alt="Image du blog2">
            </div>
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.php">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </a>
                </h3>
                <p class="post__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cupiditate
                    delectus dolore ea expedita id, labore modi non quidem quo quos, repellat voluptatum.
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./assets/images/avatar4.jpg" alt="Avatar de l'auteur">
                    </div>
                    <div class="post__author-info">
                        <h5>Par : Jobbax</h5>
                        <small>3 septempbre 2022 - 17:49</small>
                    </div>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./assets/images/blog5.jpg" alt="Image du blog2">
            </div>
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.php">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </a>
                </h3>
                <p class="post__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cupiditate
                    delectus dolore ea expedita id, labore modi non quidem quo quos, repellat voluptatum.
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./assets/images/avatar5.jpg" alt="Avatar de l'auteur">
                    </div>
                    <div class="post__author-info">
                        <h5>Par : Jobbax</h5>
                        <small>3 septempbre 2022 - 17:49</small>
                    </div>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./assets/images/blog6.jpg" alt="Image du blog2">
            </div>
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.php">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </a>
                </h3>
                <p class="post__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cupiditate
                    delectus dolore ea expedita id, labore modi non quidem quo quos, repellat voluptatum.
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./assets/images/avatar6.jpg" alt="Avatar de l'auteur">
                    </div>
                    <div class="post__author-info">
                        <h5>Par : Jobbax</h5>
                        <small>3 septempbre 2022 - 17:49</small>
                    </div>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./assets/images/blog7.jpg" alt="Image du blog2">
            </div>
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.php">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </a>
                </h3>
                <p class="post__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cupiditate
                    delectus dolore ea expedita id, labore modi non quidem quo quos, repellat voluptatum.
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./assets/images/avatar7.jpg" alt="Avatar de l'auteur">
                    </div>
                    <div class="post__author-info">
                        <h5>Par : Jobbax</h5>
                        <small>3 septembre 2022 - 17:49</small>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
<!--==============================END POST=========================================-->
<!--==============================LIST CATEGORIES=========================================-->
<section class="category__buttons">
    <div class="container category__buttons-container">
        <a href="" class="category__button">Art</a>
        <a href="" class="category__button">Wild Life</a>
        <a href="" class="category__button">Travel</a>
        <a href="" class="category__button">Science & Technologie</a>
        <a href="" class="category__button">Musique</a>
        <a href="" class="category__button">Nourriture</a>
    </div>
</section>
<!--==============================END LIST CATEGORIES=========================================-->
<!--==============================FOOTER=========================================-->
<footer>
    <div class="footer__socials">
        <a href="https://www.instagram.com/el_eliohs/" target="_blank"><i class="uil uil-instagram"></i></i></a>
        <a href="https://www.linkedin.com/in/elias-cardon-693a31a2/" target="_blank"><i class="uil uil-linkedin"></i></i></a>
        <a href="https://github.com/elias-cardon" target="_blank"><i class="uil uil-github"></i></i></a>
    </div>
    <div class="container footer__container">
        <article>
            <h4>Catégories</h4>
            <ul>
                <li><a href="">Art</a></li>
                <li><a href="">Wild Life</a></li>
                <li><a href="">Travel</a></li>
                <li><a href="">Science & Technologie</a></li>
                <li><a href="">Musique</a></li>
                <li><a href="">Nourriture</a></li>
            </ul>
        </article>
        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="">Support en ligne</a></li>
                <li><a href="">Numéro d'appel</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Support social</a></li>
                <li><a href="">Location</a></li>
            </ul>
        </article>
        <article>
            <h4>Blog</h4>
            <ul>
                <li><a href="">CGU</a></li>
                <li><a href="">Articles récents</a></li>
                <li><a href="">A la une</a></li>
                <li><a href="">Catégories</a></li>
            </ul>
        </article>
        <article>
            <h4>Permalinks</h4>
            <ul>
                <li><a href="">Accueil</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">A propos</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </article>
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Elias Cardon</small>
    </div>
</footer>
<!--==============================END FOOTER=========================================-->
<script src="./assets/main.js"></script>
</body>
</html>