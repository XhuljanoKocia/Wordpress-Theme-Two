<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solo Theme 2</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav id="site-navigation" class="main-navigation" role="navigation">
<<<<<<< HEAD
        <!-- We add our menu named main-menu to be displayed as our site menu in the header. -->
=======
>>>>>>> 7afe6b98c9ad2da252602a0bd48a3c963fd42774
        <?php 
            $args = [
                'theme_location' => 'main-menu'
            ];
            wp_nav_menu( $args ); 
        ?>
    </nav>