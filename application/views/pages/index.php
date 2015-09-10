
<div class="page-inner">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb container">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>

                </div>
                <div class="page-title">
                    <div class="container">
                        <h3>Dashboard</h3>
                    </div>

                </div>

                <div id="main-wrapper" class="container">


                    <div class="row">
                        <div class="col-lg-6 col-md-12">


                          <div class="panel panel-white">
                              <div class="panel-heading clearfix">
                                  <h4 style="align:center;" class="panel-title">Company Details</h4>
                              </div>
                              <div class="panel-body">
                                 <div class="table-responsive">

                                   <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                         <tr>
                                             <th>S No.</th>
                                             <th>Name</th>
                                             <th>Address</th>
                                             <th>Phone Number</th>
                                             <th>Email</th>
                                             <th>Fax</th>
                                             <th>Domain Name</th>
                                             <th>Company Description</th>
                                             <th>Relation</th>
                                         </tr>
                                       </thead>

                                       <tbody>
                                         <?php $i=0;
                                             foreach ($companyDetails->result() as $row)
                                              {
                                                 $i++;
                                              ?>

                                         <tr>
                                             <td><?php echo $i;?></td>
                                             <td><?php echo $row->company_name; ?></td>
                                             <td><?php echo $row->company_address; ?></td>
                                             <td><?php echo $row->company_phone1.','.$row->company_phone2; ?></td>
                                             <td><?php echo $row->company_company_email; ?></td>
                                             <td><?php echo $row->company_fax_number; ?></td>
                                             <td><?php echo $row->company_domain; ?></td>
                                             <td><?php echo $row->company_description; ?></td>
                                             <td><?php echo $row->company_relation; ?></td>

                                         </tr>

                                         <?php } ?>
                                       </tbody>
                                      </table>


                                  </div>
                              </div>
                              <br> <br> <br>
                              <br>
                          </div>
                        </div>


                        <div class="col-lg-6 col-md-12">
                          <div class="panel panel-white">
                              <div class="panel-heading clearfix">
                                  <h4 style="align:center;" class="panel-title">Order Details</h4>
                              </div>
                              <div class="panel-body">
                                 <div class="table-responsive">

                                   <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                         <tr>
                                             <th>S No.</th>
                                             <th>Order Title</th>
                                             <th>Client Name</th>
                                             <th>Cost</th>
                                             <th>Start Date</th>
                                             <th>End Date</th>
                                             <th>Lead</th>
                                        </tr>
                                       </thead>

                                       <tbody>
                                           <?php $ij=0;
                                               foreach ($orderDetails->result() as $row)
                                                {
                                                   $j++;
                                                ?>

                                           <tr>
                                               <td><?php echo $j;?></td>
                                               <td><?php echo $row->order_title; ?></td>
                                               <td><?php echo $row->order_client_name; ?></td>
                                               <td><?php echo $row->order_cost; ?></td>
                                               <td><?php echo $row->order_start_date; ?></td>
                                               <td><?php echo $row->order_proposed_end_date; ?></td>
                                               <td><?php echo $row->lead_id; ?></td>




                                           </tr>

                                           <?php } ?>

                                       </tbody>
                                      </table>
                                    </div>
                              </div>
                              <br> <br> <br>
                              <br>
                          </div>
                        </div>

                      </div>
                      <!--Row -->


                      <div class="row">
                          <div class="col-lg-6 col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 style="align:center;" class="panel-title">Supplier Details</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">

                                     <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                         <thead>
                                             <tr>
                                                 <th>S No.</th>
                                                 <th>Name</th>
                                                 <th>Address</th>
                                                 <th>Phone</th>
                                                 <th>Email</th>
                                                 <th>Fax</th>
                                                 <th>Supplier Description</th>
                                                 <th>Category Name</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                             <?php $k=0;
                                                 foreach ($Supplier->result() as $row)
                                                  {
                                                     $k++;
                                                  ?>

                                             <tr>
                                                 <td><?php echo $k;?></td>
                                                 <td><?php echo $row->supplier_name; ?></td>
                                                 <td><?php echo $row->supplier_address; ?></td>
                                                 <td><?php echo $row->supplier_phone1.', '.$row->supplier_phone2; ?></td>
                                                 <td><?php echo $row->supplier_email; ?></td>
                                                 <td><?php echo $row->supplier_faxno; ?></td>
                                                 <td><?php echo $row->supplier_description; ?></td>
                                                 <td><?php echo $row->category_id; ?></td>
                                              </tr>

                                             <?php } ?>

                                         </tbody>
                                        </table>


                                    </div>
                                </div>
                                <br> <br> <br>
                                <br>
                            </div>
                          </div>


                          <div class="col-lg-6 col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 style="align:center;" class="panel-title">Product Details</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">

                                     <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                         <thead>
                                             <tr>
                                               <th>S. No.</th>
                                                 <th>Name</th>
                                                 <th>Description</th>
                                                 <th>Start Date</th>
                                                 <th>End Date</th>
                                                 <th>Status </th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                           <?php $l=0;
                                               foreach ($products->result() as $row)
                                                {
                                                   $l++;
                                                ?>
                                             <tr>
                                                <td><?php echo $l; ?> </td>
                                                 <td><?php echo $row->product_name; ?></td>
                                                 <td><?php echo $row->product_description; ?></td>
                                                 <td><?php echo date('d/m/Y',strtotime($row->product_start_date)); ?></td>
                                                 <td><?php echo date('d/m/Y',strtotime($row->product_end_date)); ?></td>
                                                 <td><?php echo $row->product_status; ?></td>

                                             </tr>

                                             <?php } ?>
                                         </tbody>
                                        </table>
                                      </div>
                                </div>
                                <br> <br> <br>
                                <br>
                            </div>
                          </div>
                        </div>
                        <!--Row -->

                </div><!-- Main Wrapper -->
</div><!--end page inner-->
