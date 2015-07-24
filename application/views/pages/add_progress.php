<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-8 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                     <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i><b>Progress Details</b></a></li>
                                        </ul>




                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <form id="" name="formselct" action="" method="Post">
                                                                        <div class="form-group col-md-12">


                                                                            <select  class="form-control" id="name" name="select1" onchange="checkValue(this)">
                                                                              <option value="select">Select</option>
                                                                                  <option value="0">1</option>
                                                                                      <option>2</option>

                                                                            </select>
                                                                        </div>
                                                                                <div id="ifpaid" style="display:none">

                                                                                      <div class="form-group col-md-12">
                                                                                             <label for="exampleInputPassword1">Title</label>
                                                                                                <input type="text" class="form-control" name="" id="" placeholder="Title" required="">
                                                                                      </div>
                                                                                              <div class="form-group col-md-12">
                                                                                                <label for="exampleInputName">Description</label>
                                                                                                    <textarea class="form-control" name="description" id="description" maxlength='500' placeholder="Description" required=""></textarea>
                                                                                              </div>
                                                                                                          <div class="form-group col-md-12">
                                                                                                              <label>Date</label>
                                                                                                              <input type="text" class="form-control date-picker" id="date" name="" placeholder="Date" required="">
                                                                                                          </div>
                                                                                </div>



                                                      <center>  <input type="submit" value="Add" class="btn btn-primary"></center

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
        <script type="text/javascript">
function checkValue(obj)
   {
      var val = 0;


       for( i = 0; i < document.formselct.select1.length; i++ )
      {


              val = obj.value;



               if(!(val=='select'))
              {


                 var theDiv = document.getElementById('ifpaid');
                   theDiv.style.display='';
               }
                else
               {

                    document.getElementById('ifpaid').style.display='none';
              }

    }
}

</script>
