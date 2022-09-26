<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <?php include('_header.php') ?>
</head>
<body>
<div class="wrapper kontakt" id="wrapper">
    <?php include('_header-nav.php') ?>
    <!--    section-->
    <section class="section banner">
        <div class="container">
            <div class="banner__banner-bg" style="background-image: url(assets/img/kontaktbg.png)">
                <div class="banner-bg__container">
                    <div class="title-vertical center">
                        <h2 class="title">
                            <span class="lineBottom">kon</span>
                            <span>takt</span>
                        </h2>

                    </div>
                    <div class="img-circle">
                        <picture>
                            <source srcset="assets/img/kontaktCircle.webp" type="image/webp">
                            <img src="assets/img/kontaktCircle.png" alt="img">
                        </picture>
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
    <section class="section feedback" id="formBox">
        <div class="feedback__left-block">
           <div class="left-block__bg">
               <picture>
                   <source srcset="assets/img/kontaktLeft.webp" type="image/webp">
                   <img src="assets/img/kontaktLeft.png" alt="img">
               </picture>
           </div>
            <div class="img-circle">
                <picture>
                    <source srcset="assets/img/imgCircle2.webp" type="image/webp">
                    <img src="assets/img/imgCircle2.png" alt="img">
                </picture>
            </div>
        </div>
        <div class="feedback__feedback-bg">
            <div class="container flex">
                <div class="feedback__form-block">
                    <h2 class="form-block__title">Kontaktanfrage</h2>
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
                        <a href="#" class="btn"><span>Anfrage absenden</span></a>
                    </form>
                </div>
                <div class="feedback__contact">
                    <div class="contact__box trainingsort">
                        <div class="contact__title">
                            Trainingsort
                        </div>
                        <div class="contact__text">
                            Blickensdorferstrasse 2A, <br>6340 Baar

                        </div>
                    </div>
                    <div class="contact__box traningszeiten">
                        <div class="contact__title">
                            Traningszeiten
                        </div>
                        <div class="contact__text">
                            <strong>Montag 19-20 Uhr</strong>
                            Jiu Jitsu Fundamentals<br>Kimono-Training
                        </div>
                        <div class="contact__text">
                            <strong>Samstag 10-11 Uhr</strong>
                            Jiu Jitsu Fundamentals<br>No Kimono-Training
                        </div>
                    </div>
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
        </div>
    </section>
    <!--    section end-->
    <?php include('_footer.php') ?>
</div>
</body>
</html>


