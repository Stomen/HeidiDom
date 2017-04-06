<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <header>
        <div class="center">
           <div class="main-photo">
               <div class="search-and-social">
                   <div class="burger-menu">
                       <div class="burger"></div>
                   </div>
                   <a href=""></a>
                   <a href=""></a>
                   <a href=""></a>
                   <div class="search-item">
                       <form>
                           <input type="submit" value="">
                           <input type="text">
                       </form>
                   </div>
               </div>
               <div class="right-title">
                   <span>Micro-creches </span>
                   <span>&</span>
                   <span>garde d'enfants</span>
               </div>
               <div class="clear"></div>
               <a href="">
                   <div class="logo"></div>
               </a>
               <nav>
                   <?php wp_nav_menu( array('menu' => 'main_menu' )); ?>
               </nav>
           </div>
        </div>
        <div class="shadow"></div>
    </header>