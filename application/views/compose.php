<html>
      <head>Compose Message</head>
      <body>
            <?php
            echo form_open(base_url()."Message_control/send_msg");
            ?>
                  <lable for="sender">From</label><input type="text" name="sender" id="sender"/><br/>
                  <lable for="recipient">to</label><input type="text" name="recipient" id="recipient"/><br/>
                  <lable for="subject">subject</label><input type="text" name="subject" id="subject"/><br/>
                  <lable for="body">body</label><input type="textarea" name="body" id="body"/><br/>
                  <input type="hidden" name="priority" id="priority" value="PRIORITY_NORMAL"/><br/>
                  <input type="submit" name="submit" id="submit" value="send"/><input type="reset" name="reset" id="reset" value="reset"/>
            </form>
      </body>
</html>
