<!DOCTYPE html>
<html>

<?php include __DIR__ . '/head.php' ?>

  <body>
    <div id="wrapper">
      <!-- SideBar -->
      <?php include __DIR__ . '/sidebar.php' ?>

      <div id="page-wrapper" class="gray-bg">
          <!-- Top bar -->
          <?php include __DIR__ . '/topbar.php' ?>

        <!-- Main content -->
        <?php require __DIR__ . '/../templates/' . $template . '.php' ?>


        <!-- Footer -->
        <?php include __DIR__ . '/footer.php' ?>
      </div>
    </div>

    <!-- Scripts -->
    <?php include __DIR__ . '/scripts.php' ?>
  </body>
</html>