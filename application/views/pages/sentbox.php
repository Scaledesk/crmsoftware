<div id="main-wrapper" class="container">
                    <div class="row m-t-md">
                        <div class="col-md-12">
                            <div class="row mailbox-header">
                                <div class="col-md-2">
                                    <a href="<?php echo base_url().'Message_control/compose_msg' ?>" class="btn btn-success btn-block">Compose</a>
                                </div>
                                <div class="col-md-6">
                                    <h2>Sent Box</h2>
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

                        <div class="col-md-2">
                            <ul class="list-unstyled mailbox-nav">
                                <li class="active"><a href="<?php echo base_url().'Message_control/inbox'; ?>"><i class="fa fa-inbox"></i>Inbox <span class="badge badge-success pull-right">4</span></a></li>
                                <li><a href="<?php echo base_url().'Message_control/sentbox'; ?>"><i class="fa fa-sign-out"></i>Sent</a></li>
                            </ul>
                        </div>
                        <div class="col-md-10">
                            <div class="panel panel-white">
                            <div class="panel-body mailbox-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="1" class="hidden-xs">
                                            <span><input type="checkbox" class="check-mail-all"></span>
                                        </th>
                                        <th colspan="1" class="hidden-xs">
                                          <div class="fa-item col-md-3 col-sm-6"><i class="fa fa-trash"></i>
                                        </div>
                                        </th>
                                        <th class="text-right" colspan="5">
                                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
                                            <a class="btn btn-default m-r-sm" data-toggle="tooltip" data-placement="top" title="Refresh"><i class="fa fa-refresh"></i></a>
                                            <div class="btn-group m-r-sm mail-hidden-options">
                                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Report Spam"><i class="fa fa-exclamation-circle"></i></a>
                                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Mark as Important"><i class="fa fa-star"></i></a>
                                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Mark as Read"><i class="fa fa-pencil"></i></a>
                                            </div>
                                            <div class="btn-group m-r-sm mail-hidden-options">

                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                  <?php foreach ($s->result() as $row) { ?>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            <?php echo $row->reciever_id; echo $row->message_title; ?>
                                        </td>
                                        <td>
                                            <?php echo $row->message_body; ?>
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
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
