<?php
$pageTitle = "N+ Duality";
$content_data_title = "Hello World";
$content_data_body = "Calculus is the branch of mathematics that studies continuous change, and is the principal precursor of modern mathematical analysis. Originally called infinitesimal calculus or the calculus of infinitesimals, it has two major branches, differential calculus and integral calculus. Differential calculus studies instantaneous rates of change and slopes of curves; integral calculus studies accumulation of quantities and areas under or between curves. 
";
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
                <img src="" class="br-md">
                <span>link</span>
            </a>
            <a href="">
                <img src="" class="br-md">
                <span>link</span>
            </a>
            <a href="">
                <img src="" class="br-md">
                <span>link</span>
            </a>
            <a href="">
                <img src="" class="br-md">
                <span>link</span>
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
                            <img src="" class="br-md">
                            <span>link</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="" class="br-md">
                            <span>link</span>
                        </a>
                    </li>
                </ul>

                <ul class="flex-row">
                    <li>
                        <a href="">
                            <img src="" class="br-md">
                            <span>link</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="" class="br-md">
                            <span>link</span>
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
