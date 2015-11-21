<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title><?php echo($page_title); ?></title>
        
        <?php echo($page_meta); ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php get_header(); ?>

        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>style.css">
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>subdiv.css">
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>prism.css">
        <!--
        <link href='//fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
        -->
        
    </head>

    <body class="language-php">
        <?php if($is_home) { ?>
        <article>
            <div class="row">
                <div class="one-quarter meta">
                    <div class="thumbnail">
                        <img src="<?php echo get_default_profile_img(); ?>" alt="profile" />
                    </div>
        
                    <ul>
                        <li><?php echo($blog_title); ?></li>
                        <li><a href="mailto:<?php echo($blog_email); ?>?subject=Hello"><?php echo($blog_email); ?></a></li>
                        <li><a href="http://weibo.com/<?php echo($blog_twitter); ?>">&#64;<?php echo($blog_twitter); ?></a></li>
                        <li></li>
                    </ul>
                </div>
        
                <div class="three-quarters post">
                    <h2><?php echo($intro_title); ?></h2>
        
                    <p><?php echo($intro_text); ?></p>
        <!--
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        -->            
                </div>
            </div>
        </article>
        <?php } ?>
        
        <?php echo($content); ?>
        
        <?php get_footer(); ?>
        <script type="text/javascript" src="<?php echo($template_dir_url); ?>prism.js"></script>
    </body>
</html>
