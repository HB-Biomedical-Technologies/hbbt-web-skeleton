

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

    <div class="row">
        <div class="col-md-12">
            <div class="main-content">
                <div class="row">
                    <!--Left column-->
                    <div class="col-md-8">
                        <div class="left-column-wrapper">
                            <?php
                                $a = new Area('main-full-panel');
                                $a->display($c);
                            ?>
                        </div>
                    </div>
                    <!--Right column-->
                    <div class="col-md-4">
                        <div class="right-column-wrapper">
                            <?php
                                $a = new Area('main-sidebar-panel');
                                $a->display($c);
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php $this->inc('includes/footer.php'); ?>
