<div id="main-wrapper" class="container">
    <div class="row m-t-md">
        <div class="col-md-12">
            <div class="row mailbox-header">
                <div class="col-md-2">
                    <a href="<?php echo base_url().'Message_control/inbox' ?>" class="btn btn-success btn-block">Back to Inbox</a>
                </div>
                <div class="col-md-6">
                    <h2>Compose</h2>
                </div>
                <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <ul class="list-unstyled mailbox-nav">
                <li><a href="<?php echo base_url().'Message_control/inbox'; ?>"><i class="fa fa-inbox"></i>Inbox <span class="badge badge-success pull-right"><?php echo $count; ?></span></a></li>
                <li><a href="<?php echo base_url().'Message_control/sentbox'; ?>"><i class="fa fa-sign-out"></i>Sent <span class="badge badge-success pull-right"><?php echo $countSentbox; ?></span></a></li>
            </ul>
        </div>
        <div class="col-md-10">
            <div class="panel panel-white">
                <div class="panel-body mailbox-content">
                    <div class="compose-body">
                        <form class="form-horizontal" name="myform" action="<?=(base_url().'Message_control/send_msg')?>" method="post">
                            <div class="form-group">
                                <label for="to" class="col-sm-2 control-label">To</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="recipients" id="recipient" required>
                                      <option value="">select</option>
                                      <option value="0">Admin</option>
                                      <?php

                                      foreach($h->result() as $row){
                                       ?>
                                      <option value="<?php echo $row->user_id; ?>"><?php echo $row->user_name; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="col-sm-2 control-label">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="subject" name="subject" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="col-sm-2 control-label">Body</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="body" required></textarea>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="pull-center">
                                <input type="submit" class="form-control" value="Send" />
                                </div>
                            </div>
                        </form>

                 </div>
                </div>
            </div>
        </div>
    </div><!-- Row -->
</div><!-- Main Wrapper -->
