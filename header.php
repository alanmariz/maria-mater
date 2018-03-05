<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>

        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

        <?php wp_head(); ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
        <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
 <div class="container-fluid">
                <div class="row">
                    <!--Butões do topo-->
                    <div class="col-md-12" style="background-color: #3d65f7; height: 50px;">
                        <a href="http://facebook.com"><img src="http://ap.imagensbrasil.org/images/2017/09/21/facebook3c41b.png" alt="facebook3c41b.png" border="0" width="50" height="50" style="position: relative; left: 10px;"></a>
                        <a href="http://twitter.com"><img src="http://ap.imagensbrasil.org/images/2017/09/21/twitter7620b.png" alt="twitter7620b.png" border="0" width="50" height="50" style="position: relative; left: 1px;"></a>
                        <a style="position: relative; left: 900px;" href="eni"><button type="button" class="btn btn-outline-primary">Faça sua doação</button></a>
                        <a style="position: relative; left: 930px; color: white;" href="eni">Fale conosco</a>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <a href="http://localhost"><img src="http://ap.imagensbrasil.org/images/2017/09/21/logo8294b.png" alt="logo8294b.png" border="0" width="300" height="100" style="position: relative; top: 20px; left: 30px;"></a>
                        </div>
                        <div class="col-md-6">
                            <nav style="position: relative; top: 30px;">
                                <ul>
                                    <li><a href="#">A Comunidade</a>
                                      <ul>
                                          <li><a href="http://localhost/index.php/a-comunidade/pequeninos-de-maria/">Projeto Pequeninos de Maria</a></li>
                                      </ul>
                                    </li>
                                    <li><a href="#">Juventude</a>
                                        <ul>
                                            <li><a href="#">Acampa</a></li>
                                            <li><a href="#">HTML</a></li>
                                            <li><a href="#">JavaScript</a>
                                                <ul>
                                                    <li><a href="#">jQuery</a></li>
                                                    <li><a href="#">Angular</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Notícias</a>
                                        <ul>
                                            <li><a href="#">Node.js</a></li>
                                            <li><a href="#">MongoDB</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Eventos</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
        <div id="header">
                <div id="masthead">

                        

                        

                </div><!-- #masthead -->
        </div><!-- #header -->

        <div id="main">
