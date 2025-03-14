 <!-- footer section -->
 <footer class="container-fluid footer_section">
    <!-- <p>
      Copyright &copy; 2020 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p> -->
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
      <div id="footer-widget-area">
          <?php dynamic_sidebar('footer-widget-area'); ?>
      </div>
    <?php endif; ?>

  </footer>

  <?php wp_footer(); ?>
</body>

</html>