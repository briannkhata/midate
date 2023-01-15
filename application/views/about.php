<?php include 'header.php';?>
<!-- ========================== /Header =================== -->



<!-- ========================== Innaer Banner ========================= -->


	<section id="inner_banner">
		<div class="overlay">
			<div class="container">
				<h3>About Us</h3>
				
			</div>
		</div>
	</section> <!-- /inner_banner -->


<!-- ========================== /Innaer Banner ========================= -->


<!-- =================== We are Right Firm Style two ================= -->

	<section class="right_firm container right_firm_style_two">
		<div class="title_holder_center title_holder">
			<!--p class="upper_title">About Us</p-->
			<h3>We are Right <span class="firm">PLace</span></h3>
			<span></span>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have</p>
		</div> <!-- /title_holder_center -->
        <div class="our_goal row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <h4 class="mTop">Mission</h4>
            <p><?=$this->db->get('settings')->row()->mission;?></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <h4 class="mTop">Vision</h4>
            <p><?=$this->db->get('settings')->row()->vision;?></p>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h4 class="mTop">Motto</h4>
            <p><?=$this->db->get('settings')->row()->motto;?></p>

        </div>
    </div>
	</section>








<section class="why_choose_us">

<div class="left_side"></div>

<div class="right_side">
    <div class="opacity">
        <div class="title_holder">
            <h3 style="margin-top:-6px;">Why <span>Choose us ?</span></h3>
            <span></span>
        </div>
        <div class="text">
        <?php
                $count = 1;
                foreach($this->db->get('why')->result_array() as $row){?>
                <div class="choose_reason item<?=$count++;?>">
                    <h5><?=$row['why'];?></h5>
                    <p><?=$row['desc'];?>.</p>
                </div>
                <?php }?>
        </div> <!-- End .text -->
    </div> <!-- End .opacity -->
</div> <!-- End .right_side -->
<div class="clear_fix"></div>
</section> <!-- /why_choose_us -->

<!-- ======================== /Why choose us ===================== -->




<section class="clinet_feedback">
<div class="container">
    <div class="title_holder_center title_holder">
        <h3>Client <span>Feedback</span></h3>
        <span></span>
    </div> <!-- /title_holder_center -->
    <div id="client_slider" class="row">
    <?php foreach($this->db->get('testimonials')->result_array() as $row){?>
            <div class="item">
                <div class="speach">
                    <p><?=$row['testimonial'];?></p>
                </div>
                <div class="meta">
                    <h6><?=$row['name'];?></h6>
                    <span><?=$row['occupation'];?></span>
                </div>
            </div> <!-- /item -->
            <?php }?>

  

    </div> <!-- /#client_slider -->
</div>
</section> <!-- /clinet_feedback -->


<!-- ====================== Need legal advice ======================== -->




<!-- =============================== Bottom Banner ====================== -->




<!-- =============================== /Bottom Banner ====================== -->



<!-- ==================================== Footer ============================ -->

<?php include 'footer.php';?>