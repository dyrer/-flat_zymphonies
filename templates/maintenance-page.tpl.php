<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in page.tpl.php. Some may be left
 * blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 */
?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <?php backdrop_get_html_head($head); ?>
  <title><?php print $head_title; ?></title>
  <?php backdrop_get_css(); ?>
  <?php backdrop_get_js(); ?>
</head>

<body class="<?php print implode(' ', $classes); ?>" <?php print backdrop_attributes($attributes);?>>

<div id="wrapper">
  <header id="header" role="banner">
    <?php if ($logo): ?><div id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>"/></a></div><?php endif; ?>
    <h1 id="site-title"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
    <div id="site-description"><?php print $site_slogan; ?></div>
    <div class="clear"></div>
  </header>

  <div id="container">
  <div id="content">
    <section id="main" role="main" class="clearfix">
    <?php print $messages; ?>
    <a id="main-content"></a>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print $content; ?>
    </section> <!-- /#main -->
 </div>
 </div>
</div>

</body>
</html>
