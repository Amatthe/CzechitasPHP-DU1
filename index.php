<?php include __DIR__ . '/config.php' ?>

<!DOCTYPE html>
<html>

<?php include __DIR__ . '/layout/head.php' ?>

  <body>
    <div id="wrapper">
      <!-- SideBar -->
      <?php include __DIR__ . '/layout/sidebar.php' ?>

      <div id="page-wrapper" class="gray-bg">
          <!-- Top bar -->
          <?php include __DIR__ . '/layout/topbar.php' ?>

        <!-- Main content -->
        <div class="wrapper wrapper-content animated fadeInRight">
          <div class="row">
            <?php foreach ($kontakty as $kontakt) : ?>
            
              <div class="col-lg-4">
                <div class="contact-box">
                  <a class="row" href="#">
                    <div class="col-4">
                      <div class="text-center">
                        <img
                          alt="image"
                          class="rounded-circle m-t-xs img-fluid"
                          src="<?php 
                            echo 'assets/images/' . strtolower(str_replace(' ', '-', $kontakt['jmeno'])) . '.png';
                          ?>"
                        />
                        <div class="m-t-xs font-bold">
                          <?php echo $kontakt['pozice']; ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-8">
                      <h3><strong>
                        <?php echo $kontakt['jmeno']; ?>
                      </strong></h3>
                      <address>
                        <i class="fa fa-map-marker"></i> 
                        <?php echo $kontakt['adresa']; ?>
                      </address>
                    </div>
                  </a>
                </div>
              </div>

            <?php endforeach; ?>
            <!--
            <div class="col-lg-4">
              <div class="contact-box">
                <a class="row" href="#">
                  <div class="col-4">
                    <div class="text-center">
                      <img
                        alt="image"
                        class="rounded-circle m-t-xs img-fluid"
                        src="https://source.unsplash.com/128x128/?woman"
                      />
                      <div class="m-t-xs font-bold">PHP Programmer</div>
                    </div>
                  </div>
                  <div class="col-8">
                    <h3><strong>Janet Carton</strong></h3>
                    <address>
                      <i class="fa fa-map-marker"></i> Riviera State 32/106
                    </address>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="contact-box">
                <a class="row" href="#">
                  <div class="col-4">
                    <div class="text-center">
                      <img
                        alt="image"
                        class="rounded-circle m-t-xs img-fluid"
                        src="https://source.unsplash.com/128x128/?woman"
                      />
                      <div class="m-t-xs font-bold">Marketing manager</div>
                    </div>
                  </div>
                  <div class="col-8">
                    <h3><strong>Monica Zimber</strong></h3>
                    <address>
                      <i class="fa fa-map-marker"></i> Riviera State 32/106
                    </address>
                  </div>
                </a>
              </div>
            </div> -->
          </div>
        </div>
        <!-- /End Main content -->

        <!-- Footer -->
        <?php include __DIR__ . '/layout/footer.php' ?>
      </div>
    </div>

    <!-- Scripts -->
    <?php include __DIR__ . '/layout/scripts.php' ?>
  </body>
</html>
