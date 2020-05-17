
<?php

?>
<div  class="modal fade"   id="add_customer">
     <div class="modal-dialog">
         
        <div style ="width:500px;" class="modal-content">
            	 <div class="modal-header card-outline card-primary" >
                    <h4 class="modal-title"><b>Customer Information</b></h4>
               </div>  

                <form class="form-horizontal" id ="userform" method="POST" action= "<?php htmlspecialchars("PHP_SELF"); ?>"  enctype="multipart/form-data">
               	<div class="modal-body" style =align:center; width:80%;>
                    
                    
                     <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label ">Name: </label>
                    <div class="col-sm-10">
                      <input type="text" name ="name" class="form-control" id="name" required>
                    </div>  
                    </div>


                    <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label ">Contact No.: </label>
                    <div class="col-sm-10">
                      <input type="text" name ="contact" class="form-control" id="contact" required>
                    </div>  
                    </div>

                    <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label ">Address </label>
                    <div class="col-sm-10">
                      <input type="text" name ="address" class="form-control" id="address" required>
                    </div>  
                    </div>

                    <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label ">Place Detail </label>
                    <div class="col-sm-10">
                      <input type="textarea" name ="detail" class="form-control" id="detail" >
                    </div>  
                    </div>
                    
                  


                    <div class="modal-footer">
                
                       <button type = "submit" class="btn btn-primary btn-sm" name="insert_customer"><i class="fa fa-save"></i> Save</button>
                       
                       <button class="btn btn-default btn-sm pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>              
                    </div> <!-- modal footer -->
                 </form>      
         </div> <!-- modal content -->
    </div> <!-- modal dialog -->
</div> <!-- modal -->
</div>