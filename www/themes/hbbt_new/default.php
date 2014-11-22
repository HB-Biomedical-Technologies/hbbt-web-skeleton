

<?php $this->inc('includes/header.php'); ?>



    <div class="row">
        <div class="col-md-12">
            <div class="hero-unit-text">
                <?php
                $a = new Area('header-full-panel');
                $a->display($c);
                ?>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-content">
                <?php
                $a = new Area('main-full-panel');
                $a->display($c);
                ?>
            </div>
        </div>
    </div>

<?php $this->inc('includes/footer.php'); ?>
