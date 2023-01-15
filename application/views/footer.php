<footer>
    <div class="overlay">
        <div class="container">
            <div class="row">

                <!-- _______ Logo ______ -->

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 logo_footer">
                  
                    <p>Our Address</p>
                    <div class="address">
                        <span><i class="fa fa-map-marker"></i> <?=$this->db->get('settings')->row()->address;?></span>
                        <span><i class="fa fa-phone"></i> <?=$this->db->get('settings')->row()->email1;?></span>
                        <span><i class="fa fa-envelope-o"></i> <?=$this->db->get('settings')->row()->phone1;?></span>
                    </div> <!-- End .address -->

                    <ul class="social_icon">
                        <li class="round_border transition3s"><a href="<?=$this->db->get('settings')->row()->facebook;?>"><i class="fa fa-facebook"></i></a></li>
                        <li class="round_border transition3s"><a href="<?=$this->db->get('settings')->row()->twitter;?>"><i class="fa fa-twitter"></i></a></li>
                        <li class="round_border transition3s"><a href="<?=$this->db->get('settings')->row()->instagram;?>"><i class="fa fa-instagram"></i></a></li>
                        <li class="round_border transition3s"><a href="<?=$this->db->get('settings')->row()->whatsapp;?>"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                </div> <!-- End .logo_footer -->

                <!-- _____ Service ________ -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 service_footer">

                    <ul>
                        <li><a href="practise-area-details.html" class="transition3s">Terms of Use</a></li>
                        <li><a href="practise-area-details.html" class="transition3s">Cookie Policy</a></li>
                        <li><a href="practise-area-details.html" class="transition3s">Other Link</a></li>
                        <li><a href="practise-area-details.html" class="transition3s">LInk2</a></li>
                       
                    </ul>
                </div> <!-- End .service_footer -->

                <!-- ____________ News area ___________ -->
             
        </div> <!-- End .container -->

        <p class="bottom_text">Crafted By <a href="#" target="_blank"> SATA Technologies</p>
    </div> <!-- End .overlay -->
</footer>



<!-- ==================================== /Footer ============================ -->



<!-- ==================Js File============== -->

<!-- j Query -->
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-2.1.4.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
<!-- Google map js -->

<!-- revolution -->
<script src="<?=base_url();?>assets/vendor/revolution/jquery.themepunch.tools.min.js"></script>
<script src="<?=base_url();?>assets/vendor/revolution/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendor/revolution/revolution.extension.slideanims.min.js">
</script>
<script type="text/javascript"
    src="<?=base_url();?>assets/vendor/revolution/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendor/revolution/revolution.extension.navigation.min.js">
</script>
<script type="text/javascript" src="<?=base_url();?>assets/vendor/revolution/revolution.extension.kenburn.min.js">
</script>
<script type="text/javascript" src="<?=base_url();?>assets/vendor/revolution/revolution.extension.actions.min.js">
</script>
<!-- Owl carousel -->
<script src="<?=base_url();?>assets/vendor/owl-carousel/owl.carousel.min.js"></script>
<!-- Fancybox js -->
<script type="text/javascript" src="<?=base_url();?>assets/vendor/fancy-box/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendor/fancy-box/jquery.fancybox-media.js"></script>
<!-- js count to -->
<script type="text/javascript" src="<?=base_url();?>assets/vendor/jquery.appear.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendor/jquery.countTo.js"></script>
<!-- Jquery ui js -->
<script type="text/javascript" src="<?=base_url();?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<!-- Validation -->
<script type="text/javascript" src="<?=base_url();?>assets/js/validate.js"></script>

<!-- Theme js -->
<script type="text/javascript" src="<?=base_url();?>assets/js/theme-map-script.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/theme.js"></script>

</body>

</html>