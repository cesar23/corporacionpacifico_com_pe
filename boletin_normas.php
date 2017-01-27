<?php
require_once("config/config.php");
require_once("config/load.php");
require_once("header.php");
?>
    <div class="row">
      <h1></h1>
    </div>
    
    <div class="row">
      <div class="col-lg-9">
        <div id="cuerpo_izq">
          <div id="conent_body">
<div class="row">

<!-- CArga de Frame  -->

<?php 
function file_get_contents_utf8($fn) { 
     $content = file_get_contents($fn); 
      return mb_convert_encoding($content, 'UTF-8', 
          mb_detect_encoding($content, 'UTF-8, ISO-8859-1', false)); 
} 
echo file_get_contents("http://aempresarial.com/web/b_normativo.php");
?>
<!-- CArga de Frame  -->
            
     

                <div class="clearfix"></div>
 

<script>
$(document).ready(function () {


//--------------
var Iframe_boletin = $('#Iframe_boletin');
var Iframe_boletin_Gifload= $('#Iframe_boletin_Gifload');
Iframe_boletin.load(function(){
     
     Iframe_boletin_Gifload.hide('slow/400/fast', function() {
       Iframe_boletin.css("display","");


     });
//Iframe_boletin.contents().find("a").css( "background-color", "#BADA55" );
$("#Iframe_boletin").contents().find("img").css("display","none");
          //------
          /*
      var $head = Iframe_boletin.contents().find("head"); 
var url = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css";
$head.append($("<link/>", { rel: "stylesheet", href: url, type: "text/css" } ));
*/

});
var VarTimeup = setTimeout(exeFuncion, 3000);
function exeFuncion() {
   
  clearTimeout(VarTimeup);
  //iframe_a.css("display","");
  
}



    });
</script>




      
</div>


<h1></h1>
<?php

require_once("partners.php");
?>
    


           
            
            
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        
          <!--body left-->
          <?php require_once("body_left.php");?>
          <!--body left-->
        
      </div>
    </div>
    
    <!-- The content of your page would go here. -->

    <!--footer-->
    <?php require_once("footer.php");?>
    <!--footer-->
    
    
  </div>
  <!-- /container --> 
<?php require_once("footer-script.php");?>
</body>
</html>
