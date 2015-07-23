<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-8 center">
                            <div class="panel panel-white">
                                <div class="panel-body">

					               <div class="col-md-8 center">
                              <form id="wizardForm" action="<?=(base_url().'User_control/add_permission/')?>" method="post">
                                        <div class="form-group col-md-12">


								                <label>Select User</label>
                              	                    <select  class="form-control"  name="user_id" required="" onchange="loadpermission(this)">
								                        <option value="">Select</option>
                                                            <?php
                                                                foreach($h->result() as $row)
                                                                {
                                                            ?>
                                                        <option value="<?php echo $row->user_id; ?>"><?php echo $row->user_name; ?></option>
                                                                            <?php } ?>
								                    </select>
                                        </div>

                                        <div class="col-md-12" id='permission'>

                                        </div>
                                        </form>
                                </div>


								</div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
<script>
                function loadpermission(obj)
                {
                    alert(obj.value);
                     $.ajax({
                    'url' : "<?php echo base_url().'User_control/loadpermission'; ?>",
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : {'id' : obj.value},
                    'success' : function(data){
                    //  alert('response');
                     var container = $('#permission'); //jquery selector (get element by id)
                       container.html(data);
                    }
                    });
                }

                </script>
