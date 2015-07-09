<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                  <center><label><h2>Add invoice</h2></label></center>  
                                <div class="row m-b-lg">
                                <form action="" method="post">    
                                <div class="col-md-12 center">
                                    
                                        <div class="form-group col-md-8">
                                            <label>Select order id</label>
                                            <select  class="form-control" id="exampleInputEmail1" name="order_id" onchange="loadinvoice(this)" required="">
                                                <option value="0">-select-</option>
                                            <?php
                                            foreach ($k->result() as $row) 
                                            { ?>
                                                <option value="<?php echo $row->order_id; ?>"><?php echo $row->order_title; ?></option>
                                        <?php } ?>
                                                
                                            </select>
                                        </div>
                                         <!--containner-start-->
                                            
                                        <div class="form-group col-md-12" id="container">


                                        </div>
                                
                                </div>

                                    </form>
                                        </div>


                                        <!--container-end-->
                                                           

                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->




                <script>

                function loadinvoice()
                {
                    //alert(obj.value);
                     $.ajax({
                    'url' : "<?php echo base_url().'sales_management/loadinvoice'; ?>",
                    'success' : function(data){
                     var container = $('#container'); //jquery selector (get element by id)
                       container.html(data);
                    }
                    });
                }

                </script>