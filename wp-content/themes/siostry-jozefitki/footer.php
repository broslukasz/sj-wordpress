<footer class="footer">
  <nav class="footer-nav">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'footerMenuLocation'
      ));
    ?>
  </nav>

  <p class="footerText">© Zgromadzenie Sióstr Świętego Józefa CSSJ - Prowincja Wrocławska</p>
</footer>

<?php wp_footer() ?>
</body>
</html>