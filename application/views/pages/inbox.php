<div id="main-wrapper" class="container">
                    <div class="row m-t-md">
                        <div class="col-md-12">
                            <div class="row mailbox-header">
                                <div class="col-md-2">
                                    <a href="<?php echo base_url().'Message_control/compose_msg' ?>" class="btn btn-success btn-block">Compose</a>
                                </div>
                                <div class="col-md-6">
                                    <h2>Inbox</h2>
                                </div>
                                <div class="col-md-4">
                                    <form action="#" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control input-search" placeholder="Search...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div><!-- Input Group -->
                                    </form>
                               </div>
                            </div>
                        </div>
                        <div align="center">
                          <?php if($massage!='') echo $massage; ?>
                        </div>
                        <div class="col-md-2">
                            <ul class="list-unstyled mailbox-nav">
                                <li class="active"><a href="<?php echo base_url().'Message_control/inbox'; ?>"><i class="fa fa-inbox"></i>Inbox <span class="badge badge-success pull-right"><?php echo $count; ?></span></a></li>
                                <li><a href="<?php echo base_url().'Message_control/sentbox'; ?>"><i class="fa fa-sign-out"></i>Sent <span class="badge badge-success pull-right"><?php echo $countSentbox; ?></span></a></li>
                            </ul>
                        </div>
                        <div class="col-md-10">
                            <div class="panel panel-white">
                            <div class="panel-body mailbox-content">
                              <form name="form1" id="form1" method="post">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="1" class="hidden-xs">
                                            <span><input type="checkbox" class="check-mail-all"></span>
                                        </th>
                                        <th colspan="1" class="hidden-xs">

                                          <a href="#" onclick="delmessage()"><i class="fa fa-trash"> Delete</i>
                                         </a>
                                        </th>
                                        <th class="text-right" colspan="5">

                                          <?php foreach ($links as $link) {
                                            echo "<li>". $link."</li>";
                                            } ?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                  <?php foreach ($m->result() as $row) { ?>

                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" name="chk[]" value="<?php echo $row->id ?>" id="chk[]" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">

                                        </td>
                                        <td class="hidden-xs">
                                            <?php echo $row->sendar_name.'&nbsp&nbsp&nbsp&nbsp'; echo $row->message_title; ?>
                                        </td>
                                        <td>
                                          <a href="<?php echo base_url().'Message_control/message_view/'.$row->id; ?>">  <?php $body =$row->message_body;
                                            echo substr($body, 1, 50);
                                             ?> </a>

                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <?php echo $row->message_time; ?>
                                        </td>
                                    </tr>
                                    <?php } ?>




                                </tbody>
                            </table>
                          </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                function delmessage()
                {
                   var l=document.form1.elements.length;
                   var ele=document.form1.elements;
                   var f=0;
                   for(i=0;i<l;i++)
                   {
                     if(ele[i].type=="checkbox" && ele[i].name=="chk[]" && ele[i].checked==true)
                	 f=1;
                   }
                   if(f==0)
                   {
                     alert("Please Select Any One Record.!");
                	 return false;
                   }
                   else
                   {
                     if(confirm("Do You want to delete.!"))
                	 {
                	   //document.form1.act.value="delMultiple";
                	   document.form1.action="<?php echo base_url().'Message_control/deleteMessageIn/'; ?>";
                	   document.form1.submit();
                	 }
                   }

                }
                </script>
