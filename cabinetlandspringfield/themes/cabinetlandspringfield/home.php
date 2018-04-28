<?php 
	defined("C5_EXECUTE") or die(_("Access Denied")); 
	$this->inc('elements/header.php');
?>

<!-- begin slider -->
<div class="fullwidthbanner-container" id="main_slider">
    <div class="fullwidthbanner">
        <ul>
            <!-- slide 1 -->
            <li class="slide1" data-transition="slotzoom-horizontal" data-slotamount="5"  data-masterspeed="300">
                <img alt="" src="<?php echo $this->getThemePath(); ?>/assets/img/HomeSlider/slide1.jpg" />
            </li>
            <!-- slide 2 -->
            <li class="slide2" data-transition="slotzoom-horizontal" data-slotamount="5"  data-masterspeed="300">
                <!-- slide 2 image -->
                <img alt="" src="<?php echo $this->getThemePath(); ?>/assets/img/HomeSlider/slide2.JPG" />
            </li>
            <!-- slide 3 -->
            <li class="slide2" data-transition="slotzoom-horizontal" data-slotamount="5"  data-masterspeed="300">
                <!-- slide 3 image -->
                <img alt="" src="<?php echo $this->getThemePath(); ?>/assets/img/HomeSlider/slide3.JPG" />
            </li>
            <li class="slide2" data-transition="slotzoom-horizontal" data-slotamount="5"  data-masterspeed="300">
                <!-- slide 4 image -->
                <img alt="" src="<?php echo $this->getThemePath(); ?>/assets/img/HomeSlider/slide4.JPG" />
            </li>
        </ul>
    </div>
</div>
<!-- /end slider -->



<div class="promo-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-ms-12">
                <div class="col-sm-8 col-ms-8">
                    <div class="promo-text">
                        <div class="section-title styler_color">
                            <h2><span class="normal">Welcome to</span> <span class="styler_color">Cabinetland of Springfield</span></h2>
                        </div>

                        <h3>Cabinetry Made Simple</h3>
                        <?php
                            $a = new Area('About Content');
                            $a->display($c);
                        ?>
                                  
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="checkList">
                                    <li><i class="fa fa-check-square-o styler_color"></i>Custom Designs</li>
                                    <li><i class="fa fa-check-square-o styler_color"></i>Service</li>
                                    <li><i class="fa fa-check-square-o styler_color"></i>Commitment</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="checkList">
                                    <li><i class="fa fa-check-square-o styler_color"></i>Quality</li>
                                    <li><i class="fa fa-check-square-o styler_color"></i>Trust</li>
                                </ul>
                            </div>
                        </div>
                        <a href="" class="button button-small styler_bg_color">Know More</a>
                    </div>
                </div>
                <div class="col-sm-4 col-ms-4">
                    <div class="promo-image">
                        <img class="img-responsive block-img" src="<?php echo $this->getThemePath(); ?>/assets/img/img_4.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="wide-block">
                <div class="section-title styler_color">
                    <h2><span class="normal">Our</span> <span class="styler_color">manufacturers</span></h2>
                </div>
                <div class="awards-block">
                    <?php
                        $a = new Area('Manufacturers');
                        $a->display($c);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

 <?php $this->inc('elements/footer.php'); ?>