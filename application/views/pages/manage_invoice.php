<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                  <center><label><h2>Manage invoice</h2></label></center>  
                                <div class="row m-b-lg">
        
                                <div class="col-md-8 center">
                                    
                                        <div class="form-group col-md-12">
                                            <label>Select order invoice</label>
                                            <select  class="form-control" id="exampleInputEmail1" name="order_id" required="" onchange="loadinvoice(this)">
                                                <option value="0">Select</option>
                                            <?php
                                            foreach ($k->result() as $row) 
                                            { ?>
                                                   <option value="<?php echo $row->order_id; ?>"><?php echo $row->order_title; ?></option>
                                        <?php } ?>
                                            </select>
                                        </div>
                                        </div> 
                                  







                                    <!--containner-start-->

                                        <div class="col-md-12 center">

                                            
                                        <div class="form-group col-md-12" id="invoiceview">

                                            
                                        </div>
                                            
                                        </div>


                                        </div>


                                        <!--container-end-->
                                                           

                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

                  <script>

                function loadinvoice(obj)
                {
                    //alert(obj.value);
                     $.ajax({
                    'url' : "<?php echo base_url().'sales_management/loadinvoice'; ?>",
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : {'id' : obj.value},
                    'success' : function(data){
                     var container = $('#invoiceview'); //jquery selector (get element by id)
                       container.html(data);
                    }
                    });
                }

                </script>