<?php
  include ("template/header.php");
?>
<style>
    footer {
        background-color: #f2f2f2;
        padding: 25px;
    }

    .carousel-inner img {
        width: 100%;
        min-height: 200px;
    }
    @media (max-width: 600px) {
        .carousel-caption {
            display: none; 
        }
    }
</style>

<div class="main">
    <div class="wrap">
    <div class="col-md-12">
        <div class="col-md-2"></div>
        <a href="general.php">
          <div class="col-md-3">
                <p class="menu">ចំណេះដឹងទូទៅ</p>
          </div>
        </a>
        <a href="forienglang.php">
            <div class="col-md-3">
                <p class="menu">ភាសាបរទេស</p>
            </div>
        </a>
        <a href="sport.php">
            <div class="col-md-3">
                <p class="menu">សិល្បៈ នឹង កីឡា</p>
            </div>
        </a>
        <div class="col-md-2"></div>
    </div>
  </div>
</div>
<div class="clear"></div>
<div class="main">
    <div class="wrap">
      <div class="col-sm-12">
          <div class="col-sm-4">
                <div style="height:270px; background: #fbfbfb">
                    <p class="text1">Hello All Teacher!</p>
                </div>
                <div style="height:270px; background: #85ceef;">
                    <p class="text1">Contact Us: 012 123 456</p>
                </div>
                <div>
                    <img src="resource/images/teacher.jpg" style="width:100%;" alt="Image">
                </div>
          </div>
          <div class="col-sm-8">
              <div class="banner1">
                  <img src="resource/images/banner1.jpg" width="100%" alt="Image">
              </div>
              <div class="well">
                  <h3 class="text-center">What we do</h3>
                  <p>We are providing you with quality school and teacher.</p>
              </div>
          </div>
      </div>
      <br/>
      <hr>
        <div class="text-center">    
          <h3>Our Partners</h3>
          <br>
          <div class="col-sm-12">
            <div class="col-sm-2 col-xs-4">
              <img src="resource/images/1.jpg" class="img-responsive" alt="Image">
              <p>School 1</p>
            </div>
            <div class="col-sm-2 col-xs-4"> 
              <img src="resource/images/2.jpg" class="img-responsive" alt="Image">
              <p>School 2</p>    
            </div>
            <div class="col-sm-2 col-xs-4"> 
              <img src="resource/images/3.jpg" class="img-responsive" alt="Image">
              <p>School 3</p>
            </div>
            <div class="col-sm-2 col-xs-4"> 
              <img src="resource/images/1.jpg" class="img-responsive" alt="Image">
              <p>School 4</p>
            </div>
            <div class="col-sm-2 col-xs-4"> 
              <img src="resource/images/1.jpg" class="img-responsive" alt="Image">
              <p>School 4</p>
            </div>
            <div class="col-sm-2 col-xs-4"> 
              <img src="resource/images/1.jpg" class="img-responsive" alt="Image">
              <p>School 4</p>
            </div>
          </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php
  include ("template/footer.php");
?>

