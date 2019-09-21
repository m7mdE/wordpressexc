<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?> 
</head>

<header class="sticky-top">
 <!-- Navigation -->

    <div class="container">
    <div class="row">
    <div class="col-4">
        <img src="/wordpressexc/wp-content/uploads/2019/09/logo.png" title="logo" alt="logo" width="100px" />
    </div>
    <div class="col-8">
    <?php wp_nav_menu (

        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'navigation'
        )
    ) 
    ?>
    </div>
    </div>
    </div>

  </header>
 

<body <?php body_class(); ?> >
     