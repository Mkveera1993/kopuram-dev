<!doctype html>
<html <?php language_attributes();?>>

<head>
    <!-- Required meta tags -->
    <title><?php wp_title();?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
</head>

<body>
    <div class="container-fluid">
            <header>
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="40"
                            height="40" alt="Kopuram Logo"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_text.svg"
                            alt="Kopuram Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" style="color:red"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kopuram</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Why Kash?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Schemes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
