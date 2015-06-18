<?php
    /*
     * On initialise la session
     */
    session_start();
    include_once 'Include/includeClass.php';
?>

<!doctype html>
<html>
    <head>
        <title>Article</title>
        <!-- Personal Css -->
        <?php
            /*
             * Importe les dépendances
             */
            include 'Include/Header.php';
        ?>

    </head>
    <body>

    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <a class="blog-nav-item active" href="#">Home</a>
                <a class="blog-nav-item" href="#">New features</a>
                <a class="blog-nav-item" href="#">Press</a>
                <a class="blog-nav-item" href="#">New hires</a>
                <a class="blog-nav-item" href="#">About</a>
            </nav>
        </div>
    </div>

    <div class="container">

        <?php

            echo "test connection db";

            $bdd = Database::getInstance();
            var_dump($bdd);


        ?>
        <div class="row">

            <div class="col-sm-8 blog-main">

                <div class="blog-post">

                </div><!-- /.blog-post -->

                <div class="blog-post">

                </div><!-- /.blog-post -->

                <div class="blog-post">

                </div><!-- /.blog-post -->

                <div class="blog-post">

                </div><!-- /.blog-post -->

                <div class="blog-post">

                </div><!-- /.blog-post -->

                <nav>
                    <ul class="pager">
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </nav>

            </div><!-- /.blog-main -->

        </div><!-- /.row -->

    </div><!-- /.container -->

    </body>
</html>