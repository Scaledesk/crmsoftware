<div id="main-wrapper" class="container">
    <div class="row m-t-md">
        <div class="col-md-12">
            <div class="row mailbox-header">
                <div class="col-md-2">
                    <a href="<?php echo base_url().'Message_control/inbox' ?>" class="btn btn-success btn-block">Back to Inbox</a>
                </div>
                <div class="col-md-6">
                    <h2>Message</h2>
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
                  <br/><br/><br/><br/><br/>
                  <div align="left">

                    <?php echo $message[0]->message_title;
                    echo '<br/><br/><br/><br/>';




                          echo $message[0]->message_body;
                          ?>

                  </div>




                </div>
            </div>
        </div>
    </div><!-- Row -->
</div><!-- Main Wrapper -->
