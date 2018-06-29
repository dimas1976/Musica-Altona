<?php
/*
Template Name: Foerderer
*/
get_header();
?>
    <div id="motiv-foerderer" data-aos="fade-down" class="lazyload">
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <p class="quotes text-center">
                        Wir bedanken uns bei nachfolgenden Förderern, die unsere Arbeit durch finanzielle Zuwendungen und/oder Beratung ermöglichen.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="bsh">
        <div class="container mt-3 mt-md-5 mb-5 pt-3 pt-md-3 pb-4">
            <div class="row">
                <div class="col-md-4" data-aos="fade-right">
                    <picture>
                        <source media="(min-width:1200px)" data-srcset="<?= get_bloginfo("template_url"); ?>/img/foerderer/schaefer/schaefer_xl.jpg 3.5x">
                        <source media="(min-width:992px)" data-srcset="<?= get_bloginfo("template_url"); ?>/img/foerderer/schaefer/schaefer_lg.jpg 3x">
                        <source media="(min-width:768px)" data-srcset="<?= get_bloginfo("template_url"); ?>/img/foerderer/schaefer/schaefer_md.jpg 2x">
                        <source media="(min-width:576px)" data-srcset="<?= get_bloginfo("template_url"); ?>/img/foerderer/schaefer/schaefer_sm.jpg 1x">
                        <source data-srcset="<?= get_bloginfo("template_url"); ?>/img/foerderer/schaefer/schaefer_xs.jpg">
                        <img class="img-fluid pt-md-3 lazyload" data-src="<?= get_bloginfo("template_url"); ?>/img/foerderer/schaefer/schaefer_xl.jpg"  alt="Wir bedanken uns bei nachfolgenden Förderern-Birgit Schäfer">
                    </picture>
                    <div class="credit">Foto: &copy; Kirsten Haarmann</div>
                </div>
                <div class="col-md-8 pt-3 pb-3 pl-md-5" data-aos="fade-right">
                    <p>
                        Der „Musica Altona e. V.“ wurde 2002 von der BürgerStiftung Hamburg (und einigen anderen Institutionen und Musikern) initiiert und wird seitdem von ihr maßgeblich unterstützt. Seit nunmehr fast 16 Jahren engagierter Arbeit der DozentInnen und vor allem auch des Vorstands gelingt es sehr erfolgreich, Kindern und Jugendlichen in Altona-Altstadt das gemeinsame Musizieren in einem interkulturellem Rahmen zu ermöglichen. Durch das positive Erlebnis beim gemeinschaftlichen Musikmachen fördert „Musica Altona“ soziale Kompetenzen, hilft Vorurteile abzubauen, trägt zum gegenseitigen Verständnis bei und fördert interkulturelle Freundschaften.
                        „Menschen verbinden - Zukunft stiften“ so lautet das Motto der BürgerStiftung Hamburg seit der Gründung der Gemeinschaftsstiftung 1999 – in  diesem Projekt wird es auf besonders überzeugende Weise umgesetzt.<br/>
                    </p>
                    <div class="container pl-0">
                        <div class="row">
                            <div class="col-md-6">
                                Birgit Schäfer<br>
                                Vorsitzende des Vorstands<br>
                                BürgerStiftung Hamburg
                            </div>
                            <div class="col-md-6 bsh-logo">
                                <img class="img-fluid lazyload" data-src="<?= get_bloginfo("template_url"); ?>/img/logos/bsh.jpg" alt="Wir bedanken uns bei nachfolgenden Förderern-BürgerStiftung Hamburg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="logos">
        <div class="container mb-5">
            <div class="row">
                <div class="col-6 pb-4 col-md-3" data-aos="zoom-in">
                    <img class="img-fluid lazyload" data-src="<?= get_bloginfo("template_url"); ?>/img/logos/b.jpg" alt="Wir bedanken uns bei nachfolgenden Förderern-Jürgen & Monika Blankenburg Stiftung">
                </div>
                <div class="col-6 pb-4 col-md-3" data-aos="zoom-in">
                    <img class="img-fluid lazyload" data-src="<?= get_bloginfo("template_url"); ?>/img/logos/buhi.jpg" alt="Wir bedanken uns bei nachfolgenden Förderern-Budnianer Hilfe e.V">
                </div>
                <div class="col-6 pb-4 col-md-3" data-aos="zoom-in">
                    <img class="img-fluid lazyload" data-src="<?= get_bloginfo("template_url"); ?>/img/logos/cello.jpg" alt="Wir bedanken uns bei nachfolgenden Förderern-cello & co">
                </div>
                <div class="col-6 pb-4 col-md-3" data-aos="zoom-in">
                    <img class="img-fluid lazyload" data-src="<?= get_bloginfo("template_url"); ?>/img/logos/esche.jpg" alt="Wir bedanken uns bei nachfolgenden Förderern-Die Esche in Hamburg Altona">
                </div>
            </div>
            <div class="row">
                <div class="col-6 pb-4 col-md-4" data-aos="zoom-in">
                    <img class="img-fluid lazyload" data-src="<?= get_bloginfo("template_url"); ?>/img/logos/ida.jpg" alt="Wir bedanken uns bei nachfolgenden Förderern-Ida Ehre Kulturverein e.V.">
                </div>
                <div class="col-6 pb-4 col-md-4" data-aos="zoom-in">
                    <img class="img-fluid lazyload" data-src="<?= get_bloginfo("template_url"); ?>/img/logos/ikw.jpg" alt="Wir bedanken uns bei nachfolgenden Förderern-Deutsche Telekom Stiftung">
                </div>
                <div class="col-6 pb-4 col-md-4" data-aos="zoom-in">
                    <img class="img-fluid lazyload" data-src="<?= get_bloginfo("template_url"); ?>/img/logos/kinderjahre.jpg" alt="Wir bedanken uns bei nachfolgenden Förderern-Stiftung Kinderjahre">
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
?>