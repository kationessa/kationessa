<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

<script> 
var tracksE2 = [] ;

</script>

</head>
<body>

<div class="large">
        <div class="navbar  navbar-fixed-top">
            <div class="navbar-wrap">
                <div class="navtop">
                    <div class="container">
                         <div class = "row">                 
                         <div class="logo col-lg-3 col-md-3">
                        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                    
                </a>
                    </div>
                    <div class="item-cont col-lg-5 col-lg-offset-2 col-md-6 col-md-offset-2">
                        <div class="items">
                           <a href = "https://atmasfera.bandcamp.com/"><div class="item1 bandcamp"><?php echo get_option('omr_bandcamp_url');?></div></a>
                           <a href = "https://itunes.apple.com/us/artist/atmasfera/id1028546822"><div class="item1 itunes"><?php echo get_option('omr_itunes_url');?></div></a>
                            <a href = "https://www.facebook.com/atmasfera/?fref=ts "><div class="item1 facebook"><?php echo get_option('omr_facebook_url');?></div></a>
                            <a href = "https://vk.com/atmasfera"><div class="item1 vk"><?php echo get_option('omr_vk_url');?></div></a>
                            <a href = "https://twitter.com/Atmasfera"><div class="item1 twitter"><?php echo get_option('omr_twitter_url');?></div></a>
                            <a href = "https://www.youtube.com/user/AtmasferaTV"><div class="item1 youtube"><?php echo get_option('omr_youtube_url');?></div></a>
                            <div class="item1 livejournal"><?php echo get_option('omr_livejournal_url');?></div>
                            <a href = "https://myspace.com/atmasfera"><div class="item1 myspace"><?php echo get_option('omr_myspace_url');?></div></a>
                            <a href = "SC - https://soundcloud.com/atmasfera"><div class="item1 soundcloud"><?php echo get_option('omr_soundcloud_url');?></div></a>
                            <a href = "https://www.reverbnation.com/atmasfera/"><div class="item1 rever"><?php echo get_option('omr_rever_url');?></div></a>
                            <div class="liked"></div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="linea linea-first large"></div>
                    <div class="container"> 
                    <?php
                        $args = array(
                            'theme_location' => 'head_menu',
                            'walker'=> new True_Walker_Head_Menu(),
                            'container' => 'div',
                            'container_class' => 'menu container',
                            'items_wrap' => '%3$s'
                        );
                        wp_nav_menu( $args );
                    ?>
</div>
                    <?
                        // if( $menu_items = wp_get_nav_menu_items('head_menu') ) { // "Меню для шапки" - это название моего меню. Вы можете также использовать ID или ярлык
                        //     $menu_list = '';
                        //     foreach ( (array) $menu_items as $key => $menu_item ) {
                        //         $title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
                        //         $url = $menu_item->url; // URL ссылки
                        //         $menu_list .= '<a href="' . $url . '">' . $title . '</a>';
                        //     }
                        //     echo $menu_list;
                        // }
                    ?>
                   <!--  <a class='navitem' href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> 
                    <a class='navitem' href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> 
                    <a class='navitem' href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> 
                    <a class='navitem' href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> 
                    <a class='navitem' href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> 
                    <a class='navitem' href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> 
                    <a class='navitem' href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> 
                    <a class='navitem' href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> 
                    <a class='navitem' href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
                    <a class='navitem' href="#"></a> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>

    <div class="container">
        <div class="container navbar-sm-my col-sm-12 col-xs-12"> 
        <div class="col-sm-6 col-xs-7" ><div class="logo-sm"></div></div>
 <div class="drop-my col-sm-1 col-sm-offset-5 col-xs-2 col-xs-offset-3">
<a href="#" class="ondrop" onclick="opendrop(event)"><img src="<?php bloginfo('url')?>/wp-content/themes/atmasfera/images/dropdown.png"  alt="drop"></a>
 </div>
   </div>
    </div>
<div class="dropdown-menu-sm dropdown ">
              <div class="linea"></div>
              <div class="lang col-sm-12">
              <div class="liked col-sm-1"></div>
               
                <div class="languige col-sm-2 col-sm-offset-9"><a href="#">УКР</a>
            <a href="#">ENG</a>    
            </div>
                </div>
        <div class="linea "></div>
                 <div class="menu-sm-item"><a class='navitem' href="#">про нас</a></div>
                 <div class="menu-sm-item"><a class='navitem' href="#">новини</a> </div>
                 <div class="menu-sm-item"><a class='navitem' href="#">концерти</a> </div>
                 <div class="menu-sm-item"> <a class='navitem' href="#">аудіо</a> </div>
                <div class="menu-sm-item">  <a class='navitem' href="#">відео</a> </div>
                 <div class="menu-sm-item">  <a class='navitem' href="#">магазин</a> </div>
                <div class="menu-sm-item">   <a class='navitem' href="#">відгуки</a></div>
                <div class="menu-sm-item">    <a class='navitem' href="#">райдер</a> </div>
                 <div class="menu-sm-item">    <a class='navitem' href="#">контакти</a></div>
                       <div class="sm-subscribe">
            <div class="sub">
            <div class="podii"><p>події та новини</p></div>
            <div class="area-sm col-sm-10 col-sm-offset-1"><input id="area" type="text" placeholder="Ваш e-mail "></div>
            <div class="sm-but"><button type="button" class="btn btn-succes" data-toggle='modal' data-target="#modal-2">ПІДПИСАТИСЬ</button></div>
            </div>
            
  </div>
    

    </div>