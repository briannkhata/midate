<script src="<?=base_url();?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?=base_url();?>assets/js/modernizr-3.6.0.min.js"></script>
<script src="<?=base_url();?>assets/js/plugins.js"></script>
<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/js/heandline.js"></script>
<script src="<?=base_url();?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?=base_url();?>assets/js/magnific-popup.min.js"></script>
<script src="<?=base_url();?>assets/js/owl.carousel.min.js"></script>
<script src="<?=base_url();?>assets/js/wow.min.js"></script>
<script src="<?=base_url();?>assets/js/countdown.min.js"></script>
<script src="<?=base_url();?>assets/js/odometer.min.js"></script>
<script src="<?=base_url();?>assets/js/viewport.jquery.js"></script>
<script src="<?=base_url();?>assets/js/nice-select.js"></script>
<script src="<?=base_url();?>assets/js/main.js"></script>
</body>

</html>

<script>
$(document).ready(function() {


    $(".alert").fadeTo(2000, 500).slideUp(500, function() {
      $(".alert").slideUp(500);
    });

    $('#password').focusout(function(){
        var pass = $('#pass').val();
        var pass2 = $('#pass2').val();
        if(pass != pass2){
            alert('the passwords didn\'t match!');
        }

    });
































    $('#butsave').on('click', function() {
        $("#butsave").attr("disabled", "disabled");
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var location = $('#location').val();
        var password = $('#password').val();
        var dob = $('#dob').val();
        var gender = $('#gender').val();
        var looking_for = $('#looking_for').val();
        var age_from = $('#age_from').val();
        var age_to = $('#age_to').val();

        if (name != "" || email != "" || phone != "" || location != "" || location != "" || dob != "" ||
            password != "" || gender != "" || looking_for != "" || age_from != "" || age_to != "") {
            $.ajax({
                url: "<?=base_url();?>User/register",
                type: "POST",
                data: {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    location: $('#location').val(),
                    password: $('#password').val(),
                    dob: $('#dob').val(),
                    gender: $('#gender').val(),
                    looking_for: $('#looking_for').val(),
                    age_from: $('#age_from').val(),
                    age_to: $('#age_to').val()
                },
                cache: false,
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        $("#butsave").removeAttr("disabled");
                        $('#fupForm').find('input:text').val('');
                        $("#success").show();
                        $('#success').html('Data added successfully !');
                    } else if (dataResult.statusCode == 201) {
                        alert("Error occured !");
                    }

                }
            });
        } else {
            alert('Please fill all the field !');
        }
    });
});
</script>