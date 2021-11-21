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
    
    </div>
</div>