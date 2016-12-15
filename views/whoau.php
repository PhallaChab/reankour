<?php
  include ("template/header.php");
?>
<style>
    .carousel-inner img {
        width: 100%;
        min-height: 200px;
    }
    footer{
      padding: 25px;
    }
</style>
<div class="main">
    <div class="wrap">
        <div class="col-md-12">
            <div class="col-sm-8">
                <div class="carousel-inner" role="listbox">
                    <div class="banner">
                        <img src="resource/images/banner1.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <p class="text3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="clear" style="height: 40px;"></div> 
        <div class="col-sm-12">
            <div class="col-sm-4">
                <p class="select">អ្នកគឺជា ៖
                    <select onchange="showDiv(this)">
                        <option style="display: none;"></option>
                        <option value="1" name="student" id="stu">សិស្ស</option>
                        <option value="2" name="graduate" id="grad">និស្សិត</option>
                        <option value="3" name="parents" id="3">មាតាបិតាសិស្ស</option>
                    </select>
                </p>
            </div>
            <div class="col-sm-4"​ id="student" style="display: none;">
                <p class="select">រៀនថ្នាក់ទី ៖
                    <select>
                        <option value="10">១០</option>
                        <option value="11">១១</option>
                        <option value="12">១២</option>
                    </select>
                </p>
            </div>
            <div class="col-sm-4" id="graduate" style="display: none;">
                <p class="select">រៀនឆ្នាំទី ៖
                    <select>
                        <option value="g1">១</option>
                        <option value="g2">២</option>
                        <option value="g3">៣</option>
                        <option value="g4">៤</option>
                    </select>
                </p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function showDiv(select){
       if(select.value==1){
            document.getElementById('student').style.display = "block";
            document.getElementById('graduate').style.display = "none";
       } else if(select.value==2){
            document.getElementById('graduate').style.display = "block";
            document.getElementById('student').style.display = "none";
       }else{
            document.getElementById("graduate").style.display="none";
            document.getElementById('student').style.display = "none";
       }
    } 
</script>
<div class="clear"></div>
<?php
  include ("template/footer.php");
?>