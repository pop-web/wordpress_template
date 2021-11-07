<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <?php wp_nav_menu(
      array(
        'theme_location' => 'footernav',
        'container' => false,
        'menu_class' => 'd-flex list-unstyled mb-0',
        'fallback_cb' => false
      )
    );
    ?>
    <div style="font-size: 0.8em;" class="text-muted text-end">
      &copy; 2021<script>
        new Date().getFullYear() > 2010 && document.write("-" + new Date().getFullYear());
      </script> みんなのWordPress
    </div>

  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>