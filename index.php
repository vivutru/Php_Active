<?php
$pageTitle = "N+ Duality";
$content_data_title = "Purpose";
$content_data_body = "N+ Duality is an online calculator and learning resource hub dedicated to the topics of Calculus, Probability & Statistics, Discrete Mathematics & Algebra, Accounting and the fundementals of Mathematics. Documention on these topics, their calculators or formula sheets as well as any active work may be found on their respected pages. Feel free to contact us for recommendations or errors encoutered.";
?>

<!DOCTYPE HTML>

<html>

<head>
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="src/css/classes.css">
    <link rel="stylesheet" href="src/css/master.css">
</head>

<body class="flex-center-col screen-full">

    <div id="master" class="flex-col screen-90 txt-primary">

        <!-- x o x [ Define navigation bar ] x o x -->
        <nav id="navi" class="flex-row">
            <a href="">
                <span>
                    <img src="assets/icons/black/home.svg" class="br-md show">
                    <img src="assets/icons/color/home.svg" class="br-md hide">
                </span>
                <span>Home</span>
            </a>
            <a href="">
                <span>
                    <img src="assets/icons/black/notes.svg" class="br-md show">
                    <img src="assets/icons/color/notes.svg" class="br-md hide">
                </span>
                <span>Notes</span>
            </a>
            <a href="">
                <span>
                    <img src="assets/icons/black/calculator.svg" class="br-md show">
                    <img src="assets/icons/color/calculator.svg" class="br-md hide">
                </span>
                <span>Calculators</span>
            </a>
            <a href="">
                <span>
                    <img src="assets/icons/black/save.svg" class="br-md show">
                    <img src="assets/icons/color/save.svg" class="br-md hide">
                </span>
                <span>Saved</span>
            </a>
            <a href="">
                <span>
                    <img src="assets/icons/black/contact.svg" class="br-md show">
                    <img src="assets/icons/color/contact.svg" class="br-md hide">
                    <span>Contact</span>
                </span>
            </a>
        </nav>

        <!-- x o x [ Define hero section ] x o x -->
        <section id="hero" class="flex-col">
            <img src="assets/images/cut2.png">
            <h1 class="mb-1 txt-title"><?= $pageTitle ?></h1>
        </section>

        <!-- x o x [ Define content section ] x o x -->
        <section id="content" class="flex-row">
            <div id="content_links" class="flex-col">

                <ul class="flex-row">
                    <li>
                        <a href="">
                            <span>
                                <img src="assets/icons/black/general.svg" class="br-md show">
                                <img src="assets/icons/color/general.svg" class="br-md hide">
                            </span>
                            <span>General</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span>
                                <img src="assets/icons/black/accounting.svg" class="br-md show">
                                <img src="assets/icons/color/accounting.svg" class="br-md hide">
                            </span>
                            <span>Accounts</span>
                        </a>
                    </li>
                </ul>

                <ul class="flex-row">
                    <li>
                        <a href="">
                            <span>
                                <img src="assets/icons/black/probability.svg" class="br-md show">
                                <img src="assets/icons/color/probability.svg" class="br-md hide">
                            </span>
                            <span>Probability</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span>
                                <img src="assets/icons/black/calculus.svg" class="br-md show">
                                <img src="assets/icons/color/calculus.svg" class="br-md hide">
                            </span>
                            <span>Calculus</span>
                        </a>
                    </li>
                </ul>
            </div>


            <div id="content_data" class="flex-col">
                <h2 class="mb-1"><?= $content_data_title ?></h2>
                <p class="m-0"><?= $content_data_body ?></p>
            </div>

        </section>

    </div>

</body>

</html>
