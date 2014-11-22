

  <?php $this->inc('includes/header.php'); ?>




              <div class="row">
                  <div class="col-md-12">
                      <div id="home-carousel" class="carousel slide">
                          <!-- Indicators -->
                          <!--<ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                          </ol>-->

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                              <div class="item active">
                                  <img class="img-responsive" src="<?php echo $this->getThemePath()?>/pics/photo1.gif" width="1440" height="440"/>
                                  <div class="carousel-caption">
                                      <h2 class="pull-right"><b>Biomedical Engineering</b></h2>
                                  </div>
                              </div>
                              <div class="item">
                                  <img class="img-responsive" src="<?php echo $this->getThemePath()?>/pics/photo3.gif" width="1440" height="440"/>
                                  <div class="carousel-caption">
                                      <h2 class="pull-right"><b>Software Engineering</b></h2>
                                  </div>
                              </div>
                              <div class="item">
                                  <img class="img-responsive" src="<?php echo $this->getThemePath()?>/pics/photo.gif" width="1440" height="440"/>
                                  <div class="carousel-caption">
                                      <h2 class="pull-left"><b>Research</b></h2>
                                  </div>
                              </div>
                              <div class="item">
                                  <img class="img-responsive" src="<?php echo $this->getThemePath()?>/pics/photo4.gif" width="1440" height="440"/>
                                  <div class="carousel-caption">
                                      <h2 class="pull-left"><b>Innovations</b></h2>
                                  </div>
                              </div>
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#home-carousel" data-slide="prev">
                              <span class="icon-prev"></span>
                          </a>
                          <a class="right carousel-control" href="#home-carousel" data-slide="next">
                              <span class="icon-next"></span>
                          </a>
                      </div>

                  </div>
              </div>

              <div class="row">
                     <div class="col-md-12">
                         <div class="home-strip-panel">
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
                          <div class="row">
                              <!--Left column-->
                              <div class="col-md-8">
                                  <?php
                                    $a = new Area('main-full-panel');
                                    $a->display($c);
                                  ?>
                              </div>
                              <!--Right column-->
                              <div class="col-md-4">
                                  <?php
                                    $a = new Area('main-sidebar-panel');
                                    $a->display($c);
                                  ?>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>

  <?php $this->inc('includes/footer.php'); ?>
