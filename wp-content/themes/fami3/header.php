<!DOCTYPE html>

<head>
    <title>Fami-3</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Combatible" content="IE-edge" />
    <meta name="discription" content="Fami-3" />
    <meta name="viewpoint" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <?php wp_head(); ?>
</head>

<body>
    <div class="header">
        <a href="index.php" id="nav_loco">
            <a href="<?php echo home_url() ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" />
            </a>
        </a>
        <nav id="navbar_nav">
            <a href="<?php echo home_url(); ?>/news/">
                <p>ニュース</p>
            </a>
            <a href="<?php echo home_url(); ?>/maps/">
                <p>マップ</p>
            </a>
            <a href="<?php echo home_url(); ?>/weapons/">
                <p>武器</p>
            </a>
            <a href="<?php echo home_url(); ?>/armors/">
                <p>防具</p>
            </a>
            <a href="<?php echo home_url(); ?>/boss/">
                <p>ボス攻略</p>
            </a>
            <a href="<?php echo home_url(); ?>/npc/">
                <p>NPC</p>
            </a>
        </nav>
    </div>
</body>