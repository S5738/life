
<?php include_once('header.php');
include('hms/include/config.php');?>


<!--div class="site-content">
      <div id="content1" class="main-content">

        
<div class="klb-shop-page-header style-2 with-background">
  <div class="container">
    <div class="row">
      <div class="col">

        
          <a href="index.php">Home</a><i>&nbsp;/&nbsp;</i>Lips</nav>
        <div class="shop-page-header--inner">
          <div class="shop-page-header--title">
                                        <h1 class="entry-title">Category:<span>Lips</span></h1>
                        <div class="entry-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen</p>
            </div>
          </div>

                    
                 
                  </div>
</div>
</div>
</div>
</div>
      </div>
    </div>
  </div>
</div>  

        
    
  </div>
</div-->



<div class="top-banner" style="background-image: url('img/banner8.png');">
    <div class="container">
      <div class="row">
        <div class="banner-title">
          <h2>Product</h2>
          <div class="banner-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home / Lips</nava></li></a></li>
              
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </div>


<div class="main-courses tnb animatedParent" id="courses">

  <div class="container">
    <div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="ti_heading_wraper">
                  <div class="big-title">
           <div class="heading">Lips <span>Products</span></div>
          </div>
        </div>
            </div>
    </div>
    <div class="row">
      <?php
             $procat='lips';
$sql=mysqli_query($con,"select * from product where procat='$procat'");
if (!empty($sql)) {

while($row=mysqli_fetch_array($sql))
{ 
?>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="course">
          <div class="course-thumb">
          <img loading="lazy" width="350" height="265" src="hms/images/<?php echo $row['proimg'];?>" alt=" "class="attachment-wc-grid-course-thumb size-wc-grid-course-thumb wp-post-image" alt="">
          
        </div>

            <div class="wc-course-details" style="height: ;">
             <div><a href="#" rel="tag"><h2>Lipstick</h2></a></div>
 <h3><?php echo $row['proname'];?></h3>
              
              <p>&#8377  <?php echo $row['proprice'];?><span class="fa-solid fa-cart-shopping"></span></p>
              
            </div>
             <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

                                        <button id="addItem" class="more_btn btn-success btn button">Add To Cart</button>
                                      </form>
            
          </div>
           </div>
           
           <?php }}else{
                echo "No Records.";
              } ?>
 
            
     
    </div>
    
    
  </div>
</div>
<script>
  $(document).ready(function(){
 $(document).on('click','#addItem',function(e){
e.preventDefault();
var form=$(this).closest(".form-submit");
var pcode=form.find('.pcode').val();
var pname=form.find('.pname').val();
var pimage=form.find('.pimage').val();
var alertmsg=form.find('.alert-message');

var pprice=form.find('.pprice').val();

$.ajax({
url:'action.php',
method:'post',
data:{pcode:pcode,pname:pname,pimage:pimage,pprice:pprice},
success:function(response){
  console.log(response);
  alertmsg.html(response);
  //$(".alert-message").html(response);
  //window.scrollto(0,0);
  load_cart_item_number();
}
});

 });

  load_cart_item_number();
function load_cart_item_number(){
  $.ajax({
url:'action.php',
method:'get',
data:{cartItem:"cart_item"},
success:function(response){

  $("#cart-item").html(response);
  
}
});
}

  });
 
</script>



<?php include_once('footer.php');?>
