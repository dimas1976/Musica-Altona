<?php
/*
Template Name: Ueber Uns - statische Seite
*/
get_header();
?>
<div id="motiv-about" class="mb-3" data-aos="fade-down">
    <div class="credit">Foto: &copy; Jürgen Kolmar</div>
</div>

<section id="about-section">
    <div class="container pt-5  pl-4 pr-4 pl-md-3 pr-md-3 pl-lg-0 pr-lg-0 ">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pb-3" data-aos="zoom-in">Bewährtes Konzept: Musizieren in der Gruppe macht stark</h1>
                <p class="pb-3" data-aos="zoom-in-up">
                    Mit dem 'Rollenden Musikkoffer', der ganzjährig durch die Kitas des Stadtteils zieht, erleben die ganz Kleinen ein lebendiges Programm der musikalischen Früherziehung. Bereits hier wird das Prinzip des Gruppenunterrichts gepflegt, der sich dann für Kinder ab dem ersten Schuljahr in den Instrumental- und natürlich auch Orchestergruppen fortsetzt. Unter der Leitung von erfahrenen Dozenten und Musikpädagogen treffen sich die SchülerInnen in Altonaer Schulen und anderen Einrichtungen. Auf einen einzigen Musikstil müssen sich die inzwischen über 300 NachwuchsmusikerInnen nicht festlegen, denn bei        Musica Altona wird in verschiedenen Gruppen »crossover« musiziert : von Schlagzeug, Blasinstrumenten, Klavier, Keyboard, afrikanischen Trommeln über, Saz und Gitarre bis zur klassischen Geige und Cello.
                </p>
                <a class="btn btn-primary" href="./unsere-kurse/" role="button" data-aos="fade-right">ZU DEN KURSEN</a>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-sm-12 text-md-right">
                <picture>
                    <source media="(min-width:1200px)" data-srcset="<?= get_bloginfo("template_url"); ?>/img/refugess.gif 3.5x">
                    <source media="(min-width:992px)" data-srcset="<?= get_bloginfo("template_url"); ?>/img/refugess.gif 3x">
                    <source media="(min-width:768px)" data-srcset="<?= get_bloginfo("template_url"); ?>/img/refugess.gif 2x">
                    <source media="(min-width:576px)" data-srcset="<?= get_bloginfo("template_url"); ?>/img/refugess.gif 1x">
                    <source data-srcset="<?= get_bloginfo("template_url"); ?>/img/refugess.gif">
                    <img data-src="<?= get_bloginfo("template_url"); ?>/img/refugess.gif" class="img-fluid lazyload" alt="Bewährtes Konzept: Musizieren in der Gruppe macht stark" data-aos="fade-right">
                </picture>
            </div>
</section>
<div id="links">
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-md-6 pb-3 pb-md-0 text-center">
                <i class="fas fa-arrow-right"></i><a href="./vorstand" title="Zur Vorstand-Seite">Hier geht es zur Vorstandseite</a><i class="fas fa-arrow-left"></i>
            </div>
            <div class="col-md-6 text-center">
                <i class="fas fa-arrow-right"></i><a href="./geschichte" title="Zur Geschichte-Seite">Hier geht es zur Geschichteseite</a><i class="fas fa-arrow-left"></i>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
