<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
   <head>
      <meta charset = " <?php bloginfo ('charset');?> ">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link href="style.css" type="text/css" rel="stylesheet">
      <tittle><?php bloginfo('name');?></title>

      <?php wp_head(); ?>
   </head>

   <body <?php body_class();?>>
      <header>
          <div class= "container">
            <div class="row">
                <div class="col-lg-6 logo-container">

                <?php

                 //display logo if its set, if not display site title
                  if (get_header_image()=='') { ?>
                  <h1><a href="<?php echo get_home_url(); ?>"> <?php bloginfo ('name'); ?> </a></h1>
                     
                    <?php
                    }else {?>
                       <a href ="<?php echo get_home_url(); ?> "> <img class="logo" scr="<?php header_image(); ?>"
                       
                    <?php
                    }
                  ?>
       
               
            </div> <!col-lg-6.logo-container->

            <div class="col-lg-6 navigation">

            <nav class="custom-menu-class">
                <?php 
                  wp_nav_menu(array(

                       'theme_location' => 'main-menu',


                   ) );


                  ?>

             </nav>

           </div> <!col-lg-6.navigation->
       </div> <!-row->
   </div> <!-container->
</header>


