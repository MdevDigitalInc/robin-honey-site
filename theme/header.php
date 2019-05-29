<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- [ FACEBOOK OG ] -->
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta property="og:type" content="website" />
    <meta property="og:url"  content="https://robinhoney.com" />
    <meta property="og:title" content="ROBIN HONEY: Brand Consultant" />
    <meta property="og:description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>" />
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/robin-honey-fb-card.png" />
    <!-- Twitter Card  -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@honeylondon">
    <meta name="twitter:creator" content="@honeylondon">
    <meta name="twitter:title" content="ROBIN HONEY: Brand Consultant"/>
    <meta name="twitter:description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>"/>
    <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/robin-honey-tw-card.png"/>
    <meta name="Keywords" content="<?php echo get_post_meta($post->ID, 'keywords', true); ?>">
    <!-- Viewport Settings -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Chrome Browser Bar Color -->
    <meta name="theme-color" content="#8ccecf">
    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="57x57"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-180x180.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="icon" type="image/png" sizes="32x32"
      href="<?php bloginfo('template_url'); ?>/dist/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
      href="<?php bloginfo('template_url'); ?>/dist/icons/favicon-16x16.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/dist/icons/favicon.ico">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-320x460.png">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-640x920.png">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-640x1096.png">
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-750x1294.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-1182x2208.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-1242x2148.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-748x1024.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-768x1004.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-1496x2048.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-1536x2008.png">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140210722-1"></script>
    <script>
    // window.dataLayer = window.dataLayer || [];
    // function gtag()

    // {dataLayer.push(arguments);}
    // gtag('js', new Date());

    // gtag('config', 'UA-140210722-1');
    </script>

   <?php wp_head(); ?>
	</head>
	<body>
	<button class="rhd-toggle-nav" data-toggle="nav">
    <span></span>
		<span></span>
		<span></span>
		<span></span>
  </button>
	<div class="rhd-overlay" data-toggle="nav"></div>
  <header class="rhd-main-header">
    <div class="rhd-header-container">
      <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
        <div class="rhd-brand-area">
          <a href="<?php echo home_url('/'); ?>" class="rhd-brand">
              <img src="<?php echo bloginfo('template_url'); ?>/img/robin-honey-logo.svg" alt="<?php echo bloginfo('name'); ?>">
          </a>
        </div>
          <div class="rhd-nav-area">
            <nav>
						<?php include 'main-nav.php'; ?>
						<div class="rhd-social-nav">
							<ul class="rhd-social">
                <li>
                  <a href="https://ca.linkedin.com/in/robinhoney/" title="follow us on linkedin" target="_blank">
                    <i class="fab fa-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/honeylondon?lang=en" title="follow us on twitter" target="_blank">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/robin.honey/" title="follow us on instagram" target="_blank">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
						</div>
            </nav>
          </div>
        </div>
      </div>
	</header>