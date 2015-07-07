
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <link rel="stylesheet" href="/resources/demos/style.css"> 

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  
  <script>
  $(function() {
    $( "#datepicker1,#datepicker2,#datepicker3" ).datepicker({ dateFormat: 'yy-mm-dd' });
  });
  </script>



<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-8 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                     <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i><b>Add Lead</b></a></li>
                                            
                                        </ul>
                          
                                    
                                        
                                        <form id="wizardForm" action="<?=(base_url().'sales_management/do_add_lead')?>" method="post">
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Add Lead</label>
                                                                    <input type="text" class="form-control" id="exampleInputName" placeholder="Add Lead" required="" name="lead_name">
                                                                </div>
                                                                
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputEmail">Lead Date</label>
                                                                    Date <input type="text" class="form-control" id="datepicker1" placeholder="Lead Date" required="" name="lead_generate_date">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword1">Lead Source</label>
                                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lead Source" required="" name="lead_source">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Lead Services</label>
                                                                    <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Lead Services" required="" name="lead_service">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            
                                                           
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group col-md-6 center">
                                                    <button type="submit" class="btn btn-primary btn-block">Add Lead</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

                <?php
            include_once("footer.php")


                ?>