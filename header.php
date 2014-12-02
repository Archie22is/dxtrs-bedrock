<?php

/**
 * Header page for bedrock
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="HandheldFriendly" content="true">

    <?php $title =  get_bloginfo( 'name' ) . ( wp_title( '', false ) == '' ? '' : ' - ' ) . wp_title( '', false ); ?>
    <?php $description = ''; ?>
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">

    <!-- Facebook meta -->
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:image" content="<?php echo IMAGES; ?>/facebook-meta-img.png">
    <meta property="og:type" content="website">
    <meta property="og:description" content="<?php echo $description; ?>">

    <!-- Google+ meta -->
    <meta itemprop="name" content="<?php echo $title; ?>">
    <meta itemprop="description" content="<?php echo $description; ?>">
    <meta itemprop="image" content="<?php echo IMAGES; ?>/google-plus-meta-img.png">

    <!-- Twitter meta -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="<?php echo site_url(); ?>">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="<?php echo IMAGES; ?>/twitter-meta-img.png">

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="<?php echo IMAGES; ?>/favicon.ico" rel="shortcut icon" />

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <header>
        <div class="row">
            <div class="large-12 columns">
                <nav>

                </nav>
            </div>
        </div>

    </header>

