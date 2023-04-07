<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency</title>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/style.css">
    <link rel="icon" type="image/x-icon" href="assets/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
</head>

<body>
    <header>
        <div class="row-1">
            <section class="logo">
            <a href="<?php echo site_url() ?>">
                <div class="logo-name">
               
                    <div>
                        <img src=" <?php echo get_header_image(  ) ?>" alt="logo">
                    </div>
                    <div>
                   
                        <h3>Agency</h3>
                        <p>Creative</p>
                    </div>
               
                </div>
                </a>
            </section>
        </div>
        <div class="row-2">
            <div class="header--container">
                <button class="nav-toggle" aria-expanded="false">
                    <span class="visually-hidden">
                        <i class="material-icons" style="font-size:48px;color:#377DFF">menu</i>
                    </span>
                </button>
            
                <nav class="primary-navigation">
                    <div class="nav-list">
                        <!-- <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li class="contact"><a href="#">Contact Us</a></li> -->
                        <?php wp_nav_menu( array( 'theme_location'=>'primary-menu') ) ?>
                    </div>
                </nav>
            </div>
        </div>
    </header>