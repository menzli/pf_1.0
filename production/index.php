<?php require_once(dirname(__FILE__)."/head.php"); ?>

  <body class="nav-md">

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title">
                  <i class="fa fa-paw"></i> <span>MY ERP 1.0</span>
              </a>
            </div>
            <div class="clearfix"></div>
            <?php require_once(dirname(__FILE__)."/menu_profile.php"); ?>
            <br />
            <?php require_once(dirname(__FILE__)."/menu_navigation.php"); ?>
            <?php require_once(dirname(__FILE__)."/menu_footer.php"); ?>
          </div>
        </div>
        <?php require_once(dirname(__FILE__)."/menu_top_navigation.php"); ?>

        <?php require_once(dirname(__FILE__)."/page1.php"); ?>

        <?php require_once(dirname(__FILE__)."/page_footer.php"); ?>
      </div>
    </div>

    <?php require_once(dirname(__FILE__)."/compose_body.php"); ?>


    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>