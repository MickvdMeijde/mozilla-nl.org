<div id="back">

  <a href="/" id="tabzilla">mozilla</a>
  <div id="wrapper">
    <nav id="headerbar" class="clearfix">
          <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'clearfix')), 'header' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'))));  ?>
     </nav>

  <div id="site-name">
     <h1><a href="<?php print $base_path ?>" title="Home"><img src="<?php print $logo ?>" alt="<?php print $site_name ?> Logo" /></a><?php print($site_slogan) ?></h1>
  </div>
     
   <header>
     <nav id="navigation">
          <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'clearfix')), 'header' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'))));  ?>
     </nav>
   </header>


   <div id="content-wrapper" class="clearfix">
     <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>

   <section id="content">
<!-- START: CONTENT --> 

          

          <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
          <?php print render($tabs2); ?>
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>



<!-- END: CONTENT -->  

  </section>
        
        <section id="pllt">

		<aside id="sidebar" class="rightcolumn">
			
			<?php print render($page['sidebar_first']); ?>
			
		</aside> 

        </section>
 </div><!-- end #content-wrapper -->



<!-- START: FOOTER-->
<footer>
  <div id="footer-wrapper">
        <div id="left">
         <a href="<?php print $base_path ?>" title="Home"><img src="<?php print $logo ?>" alt="<?php print $site_name ?> Logo" /></a>
         <?php print render($page['footer']); ?>
        </div>

      <div id="right">
         <?php print render($page['footer_right']); ?>
      </div>
  </div>
</footer>
<!-- END: FOOTER -->

</div><!-- end #back -->

<?php
drupal_add_css('http://www.mozilla.com/nl/tabzilla/media/css/tabzilla.css', 'external');
drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:300,400', 'external');
drupal_add_js('http://www.mozilla.com/nl/tabzilla/media/js/tabzilla.js', 'external');
?>
