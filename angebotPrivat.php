<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AngebotPrivat</title>
    <?php include('_header.php') ?>
</head>
<body>
<div class="wrapper angebote privat" id="wrapper">
    <?php include('_header-nav.php') ?>
    <!--    section-->
    <section class="section banner">
        <div class="container">
            <div class="banner__banner-bg" style="background-image: url(assets/img/angebotBg.png)">
                <div class="banner-bg__container flex">

                    <div class="title-horizontal">
                        <h2 class="title">
                            Privat-
                            <br>lektionen
                        </h2>
                        <div class="subtitle">Privatunterricht</div>
                        <div class="img-circle">
                            <picture>
                                <source srcset="assets/img/imgCircle8.webp" type="image/webp">
                                <img src="assets/img/imgCircle8.png" alt="img">
                            </picture>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <a href="#formBox" class="scrollForm" id="scrollForm">
            <picture>
                <source srcset="assets/img/group-25@3x.webp" type="image/webp">
                <img src="assets/img/group-25@3x.png" alt="img">
            </picture>
        </a>
    </section>
    <!--    section end-->

    <!--    section-->
    <section class="section step">
        <div class="container flex">
            <div class="step__box-step">
                <div class="box-step__img">
                    <picture>
                        <source srcset="assets/img/icoStep5.webp" type="image/webp">
                        <img src="assets/img/icoStep5.png" alt="img">
                    </picture>
                </div>
                <div class="box-step__title">Was?</div>
                <div class="box-step__text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.
                </div>
            </div>
            <div class="step__box-step">
                <div class="box-step__img">
                    <picture>
                        <source srcset="assets/img/icoStep6.webp" type="image/webp">
                        <img src="assets/img/icoStep6.png" alt="img">
                    </picture>
                </div>
                <div class="box-step__title">Wie?</div>
                <div class="box-step__text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.
                </div>
            </div>
            <div class="step__box-step">
                <div class="box-step__img">
                    <picture>
                        <source srcset="assets/img/icoStep7.webp" type="image/webp">
                        <img src="assets/img/icoStep7.png" alt="img">
                    </picture>
                </div>
                <div class="box-step__title">Wer?</div>
                <div class="box-step__text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.
                </div>
            </div>
            <div class="step__box-step">
                <div class="box-step__img">
                    <picture>
                        <source srcset="assets/img/icoStep8.webp" type="image/webp">
                        <img src="assets/img/icoStep8.png" alt="img">
                    </picture>
                </div>
                <div class="box-step__title">Wo?</div>
                <div class="box-step__text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.
                </div>
            </div>
        </div>
    </section>
    <!--    section end-->

    <!--    section-->
    <section class="section article">
        <div class="container">
            <div class="title-chapter">Jiu Jitsu Privatlektionen</div>
            <div class="article__content">
                <div class="row">
                    <div class="row__text">
                        Unsere Schule ist von offizieller Abstammung der Gründerfamilie unter UFC-Legende Royce Gracie.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                        ullamcorper suscipit lobortis.
                    </div>
                </div>
                <div class="row row-img right">
                    <picture>
                        <source srcset="assets/img/article2.webp" type="image/webp">
                        <img src="assets/img/article2.png" alt="img">
                    </picture>
                    <div class="row__text">
                        Lorem ipsum dolor sit amet consectetuer. Adipum dolor sit amet consectetuer. Adipiscing elit
                        sed diam nonumiscing elit sed diametuer Adipi. Lorem ipsum dolor sit amet consectetuer.
                        Adipum dolor sit amet consectetuer. Adipiscing elit sed diam nonumiscing elit sed diametuer Adipi.
                        <br>
                        <br>
                        Lorem ipsum dolor sit amet consectetuer. Adipum dolor sit amet consectetuer. Adipiscing elit
                        sed diam nonumiscing elit sed diametuer Adipi.
                    </div>

                </div>
            </div>
        </div>
        <div class="title title-big">P r i v a t l e k t i o n e n</div>
    </section>
    <!--    section end-->

    <!--    section-->
    <section class="section feedback" id="formBox">
        <div class="container flex">
            <div class="feedback__form-block">
                <h2 class="form-block__title">Anfrage Privatlektion</h2>
                <form class="form" >
                    <div class="input-box-container">
                        <div class="input-box">
                            <input type="text" placeholder="Vorname">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="E-Mail">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Telefon">
                        </div>
                    </div>
                    <div class="textarea-box">
                        <textarea placeholder="Nachricht"></textarea>
                    </div>
                    <a href="#" class="btn"><span>anfrage absenden</span></a>
                </form>
            </div>
            <div class="feedback__contact">
                <div class="contact__box fragen">
                    <div class="contact__title">
                        Fragen?
                    </div>
                    <div class="contact__text ">
                        <a href="mailto:hello@juijitsu.ch">hello@juijitsu.ch</a>
                        <a href="tel:+41025025000">+41 025 025 000</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--    section end-->
    <?php include('_footer.php') ?>
</div>
</body>
</html>

