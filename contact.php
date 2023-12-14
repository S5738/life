<?php include_once('header.php');?>


<section id="contact" class="contact">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title1">
          
          <p>Contact us the get started</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
              <i class="fa fa-map-marker"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="fa fa-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="fa fa-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <form action="" id="contact-form" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" onkeyup="document.getElementById('nameErr').innerHTML=''"  required="">
                 <label class="text-danger" id="nameErr"></label>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" onkeyup="document.getElementById('emailErr').innerHTML=''"  required="">
                  <label class="text-danger" id="emailErr"></label>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" onkeyup="document.getElementById('subErr').innerHTML=''" required="">
                <label class="text-danger" id="subErr"></label>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" id="message" name="message" rows="10"onkeyup="document.getElementById('msgErr').innerHTML=''"  required=""></textarea>
                <label class="text-danger" id="msgErr"></label>
              </div>
              <div class="my-3">
               
                <div class="error-message"></div>
                <div class="sent-message"></div>
              </div>
              <div class="text-center"><button type="submit" id="btnSubmit">Send Message</button></div>
              <div id="mail-status"></div>
            </form>
          </div>

        </div>

      </div>
    </section>
  <div id="googleMap">
    <div class="google-map-section">
      <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d58391.92348905992!2d90.33451974553982!3d23.83654255462999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3755c14a3366b005%3A0x901b07016468944c!2sMirpur%20DOHS%2C%20Dhaka!3m2!1d23.836468!2d90.36953919999999!5e0!3m2!1sen!2sbd!4v1642575818911!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
<script>

 $(document).ready(function () {

    $("#btnSubmit").click(function (event) {

      event.preventDefault();

        var data = new FormData($('#contact-form')[0]);

        if($('#name').val().trim()==''){

         document.getElementById("nameErr").innerHTML = "Please provide Name";

         document.getElementById("name").focus();

         return;

        }

        if($('#email').val().trim()==''){

         document.getElementById("emailErr").innerHTML = "Please provide Email";

         document.getElementById("email").focus();

         return;

        }

        /*if($('#phone').val().trim()==''){

         document.getElementById("phoneErr").innerHTML = "Please provide Mobile Number";

         document.getElementById("phone").focus();

         return;

        }*/
         if($('#subject').val().trim()==''){

         document.getElementById("subErr").innerHTML = "Please provide subject";

         document.getElementById("subject").focus();

         return;

        }

        if($('#message').val().trim()==''){

         document.getElementById("msgErr").innerHTML = "Please provide Message";

         document.getElementById("message").focus();

         return;

        }

        $("#btnSubmit").prop("disabled", true);

        

   

    //alert(dataString);

     //var form = $(this);

        $.ajax({

            type: "POST",

            url: "result.php",

            data: data,

            processData: false,

        contentType: false,

        cache: false,

        success: function(data) { 
 console.log(data);
               $("#mail-status").removeClass('text-danger');

            $("#mail-status").addClass('text-success');

            $("#mail-status").html("We have received your enquiry successfully!");

            $("#btnSubmit").prop("disabled", false);

            $('#name').val('');

            $('#email').val('');

            //$('#phone').val('');
            $('#subject').val('');

            $('#message').val('');

            },

            error: function(error){

                $("#mail-status").removeClass('text-success');

            $("#mail-status").addClass('text-danger');

            $("#mail-status").html("Something went wrong..Please try again!");

            }

        

            

        

        });

  });

      });

    </script>

   
    
    <?php include_once('footer.php');?>
