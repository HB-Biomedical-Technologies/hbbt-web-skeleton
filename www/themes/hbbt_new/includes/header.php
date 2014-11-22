<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="H&B Biomedical Technologies s.r.o.">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>hbbt.cz skeleton</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->getThemePath()?>/css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>




    <!-- Custom styles for this template -->
    <link href="<?php echo $this->getThemePath()?>/css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo $this->getThemePath()?>/js/js/html5shiv.js"></script>
    <script src="<?php echo $this->getThemePath()?>/js/respond.min.js"></script>
    <![endif]-->

    <?php
    Loader::element('header_required');
    ?>

</head>

<body>

<!-- Wrap all page content here -->
<div id="wrap">
    <!-- Begin page content -->
    <div class="container">
        <div class="paper">

            <div class="row">
                <div class="col-md-12">
                    <!-- Fixed navbar -->
                    <nav id="top-menu-nav" class="navbar my-navbar navbar-inverse" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span><b>M</b></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                <img class="img-responsive" src="<?php echo $this->getThemePath()?>/pics/logo.png" />
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <?php
                                $a = new GlobalArea('top-nav-panel');
                                $a->display();
                            ?>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>