<?php
    $class = "home";
    include("header.php");
?>
<div class="slider">
    <ul class="slides">
        <li>
            <img src="img/placeholders/slide-1.jpg" />
        </li>
        <li>
            <img src="img/placeholders/slide-2.jpg" />
        </li>
        <li>
            <img src="img/placeholders/slide-3.jpg" />
        </li>
    </ul>
</div>
<div role="main">
    <section class="intro">
        <div class="l-wrap">
            <h2>Petit texte d’introduction dolor amet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor eu enim nec posuere. Sed orci dolor, porttitor sit amet erat a, faucibus lacinia sem. Donec tempus volutpat risus, quis consequat justo vestibulum eget. Quisque a mauris in nisi tristique pellentesque. Ut nec convallis dui, sed lobortis lacus. Aliquam erat volutpat. Praesent molestie nisl eget eros mollis suscipit. Cras accumsan lectus vel vulputate fringilla.</p>
        </div>
    </section>
    <section class="alt-content">
        <div class="l-wrap">
            <header>
                <h1>Nos services</h1>
                <span class="tagline">C'est plus qu'un travail, c'est une passion!</span>
            </header>
            <div class="services">
                <div class="service">    
                    <a href="#">
                        <h2>Cuisine</h2>
                        <img src="img/placeholders/placeholder-1.jpg" alt="">
                    </a>
                </div>
                <div class="service">    
                    <a href="#">
                        <h2>Salle de bain</h2>
                        <img src="img/placeholders/placeholder-2.jpg" alt="">
                    </a>
                </div>
                <div class="service">    
                    <a href="#">
                        <h2>Mobilier</h2>
                        <img src="img/placeholders/placeholder-3.jpg" alt="">
                    </a>
                </div>
                <a href="#" class="btn-large">Voir les services</a>
            </div> 
        </div>
    </section>
    <section class="content">
        <div class="l-wrap">
            <header>
                <h1>Nos réalisations</h1>
                <span class="tagline">C'est plus qu'un travail, c'est une passion!</span>
            </header>
            <div class="realisations">
                <div class="row">
                    <div class="realisation">
                        <a href="#">
                            <img src="img/placeholders/placeholder-4.jpg" alt="">
                            <span class="btn-plus">+</span>
                        </a>
                    </div>
                    <div class="realisation">
                        <a href="#">
                            <img src="img/placeholders/placeholder-5.jpg" alt="">
                            <span class="btn-plus">+</span>
                        </a>
                    </div>
                    <div class="realisation">
                        <a href="#">
                            <img src="img/placeholders/placeholder-6.jpg" alt="">
                            <span class="btn-plus">+</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="realisation">
                        <a href="#">
                            <img src="img/placeholders/placeholder-4.jpg" alt="">
                            <span class="btn-plus">+</span>
                        </a>
                    </div>
                    <div class="realisation">
                        <a href="#">
                            <img src="img/placeholders/placeholder-5.jpg" alt="">
                            <span class="btn-plus">+</span>
                        </a>
                    </div>
                    <div class="realisation">
                        <a href="#">
                            <img src="img/placeholders/placeholder-6.jpg" alt="">
                            <span class="btn-plus">+</span>
                        </a>
                    </div>
                </div>
                <a href="#" class="btn-large">Voir les réalisations</a>
            </div>
        </div>
    </section>
</div>
<?php include("footer.php"); ?>