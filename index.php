<?php include ('config/connection.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>OLX | Online Shopping</title>
    <?php include('config/css.php'); ?>
    <?php include('config/js.php'); ?>
</head>

<body>
    <div class="container">
        
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title text-center">OLX</h3>
          </div>
          <div class="panel-body">
              
       <div class="row"> 
              
             <div class="col-md-3"> 
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h3 class="panel-title text-center">Products</h3>
                  </div>
                  <div class="panel-body">
                    <?php include ('template/buttons.php'); ?>
                  </div> <!-- panel body -->  
               </div> 
                   <div class="col-md-8 btn-block">
                   <button type="button" class="btn btn-success btn-block">Bill</button>
                   </div>
                </div> <!-- products panel -->  
                
                
                <!-- bags -->
                <div class="col-md-9" id="bag">
                    <?php include ('forms/bag.php'); ?>
                </div> 
                <!-- dress -->
                <div class="col-md-9" id="dress">
                    <?php include ('forms/dress.php'); ?>
                </div> 
                <!-- shoes -->
                <div class="col-md-9" id="shoes">
                    <?php include ('forms/shoes.php'); ?>
                </div> 
                    <!-- script -->
                    <script>
                        $( "#btn-bag" ).click(function() {
                        $( "#dress,#shoes" ).hide("slow"); $( "#bag" ).show("slow");
                        });
                        $( "#btn-dress" ).click(function() {
                        $( "#bag,#shoes" ).hide("slow"); $( "#dress" ).show("slow");
                        });
                        $( "#btn-shoes" ).click(function() {
                        $( "#bag,#dress" ).hide("slow"); $( "#shoes" ).show("slow");
                        });
                    </script>
                
          </div> <!-- end row -->
                
        </div> <!-- panel body -->
        
      </div> <!-- olx panel -->
        
    </div>
</body>

</html>