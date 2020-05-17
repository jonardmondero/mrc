
<?php

?>
<div  class="modal fade"   id="add_product">
     <div class="modal-dialog">
         
        <div style ="width:500px;" class="modal-content">
            	 <div class="modal-header card-outline card-primary" >
                    <h4 class="modal-title"><b>Customer Information</b></h4>
               </div>  

                <form class="form-horizontal" id ="userform" method="POST" action= "<?php htmlspecialchars("PHP_SELF"); ?>"  enctype="multipart/form-data">
               	<div class="modal-body" style =align:center; width:80%;>
                    
                    
                     <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label ">Product Name: </label>
                    <div class="col-sm-10">
                      <input type="text" name ="productname" class="form-control" id="productname" required>
                    </div>  
                    </div>


                    <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label ">Price: </label>
                    <div class="col-sm-10">
                      <input type="number" name ="price" class="form-control" id="price" required>
                    </div>  
                    </div>

                    
                  


                    <div class="modal-footer">
                
                       <button type = "submit" class="btn btn-primary btn-sm" name="insert_product"><i class="fa fa-save"></i> Save</button>
                       
                       <button class="btn btn-default btn-sm pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>              
                    </div> <!-- modal footer -->
                 </form>      
         </div> <!-- modal content -->
    </div> <!-- modal dialog -->
</div> <!-- modal -->
</div>