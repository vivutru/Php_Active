<?php
$pageTitle = "N+ Duality";
$content_data_title = "Hello World";
$content_data_body = "A 'Hello, world' program is a simple computer program that outputs the message 'Hello, world' to a display device, often used to illustrate the basic syntax of a programming language. It is typically the first program written by beginners learning to code.
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

    <div id="master" class="flex-col m-2 screen-80 g-1">

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
            <img class="br-lg" src="">
            <h1 class="mb-1"><?= $pageTitle ?></h1>
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
