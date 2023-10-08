<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="logo">
                    logo
                </div>
                <div class="searchbox">
                    search
                </div>
            </section>
            <section class="menu-area">
                <nav class="main-menu">
                    <button class="check-box">
                        <div class="menu-icon">
                            <span class="bar1">

                            </span>
                            <span class="bar2">

                            </span>

                            <span class="bar3">

                            </span>
                        </div>
                    </button>
                    <?php wp_nav_menu( array( 'theme_location' => 'wp_devs_main_menu', 'depth' => 2));?>
                </nav>
            </section>
        </header>
        <?php
