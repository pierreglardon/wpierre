<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo(‘name’); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1>
            <a href="<?php bloginfo('url'); ?>">
                <?php bloginfo(‘name’); ?>
            </a>
        </h1>
        <nav>
            <?php wp_nav_menu('top'); ?>
        </nav>
    </header>
    <main>
