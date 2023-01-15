<?php include 'header.php';?>
<!-- ========================== /Header =================== -->



<!-- ========================== Innaer Banner ========================= -->


	<section id="inner_banner">
		<div class="overlay">
			<div class="container">
				<h3>Clients</h3>
			
			</div>
		</div>
	</section> <!-- /inner_banner -->


<!-- ========================== /Innaer Banner ========================= -->



<!-- ======================= Practise Area =========================== -->

		<section class="practise_area container">

			<div class="practise_item_wrapper">
				<div class="practise_item">
					<?php foreach($this->db->get('clients')->result_array() as $row){?>
					<div class="single_item border_right">
						<div class="icon">
							<span class="ficon flaticon-user"></span>
							<h4><?=$row['name'];?></h4>
						</div> <!-- End .icon -->
						<div class="hover_overlay transition4s">
							<h4><?=$row['business'];?></h4>
							<p><?=$row['desc'];?></p>
					
						</div> <!-- End .hover_overlay -->
					</div> <!-- End .single_item -->
					<?php }?>


				</div> <!-- End .practise_item -->
			</div> <!-- End .practise_item_wrapper -->
		</section>		

<!-- ========================= /Practise Area ======================== -->




<?php include 'footer.php';?>