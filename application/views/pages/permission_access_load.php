<div class="col-md-12">
    <div class="form-group col-md-6">
        <label>Access permission</label></br>
            <?php
            error_reporting(0);
            if($user_perm!='')
            {
              $arr=explode(',',$user_perm[0]->page_id);
            }
                foreach($k->result() as $row)
                {
                  ?>
                    <input type="checkbox" value="<?php echo $row->children_id; ?>"  name="page[]" <?php foreach ($arr as $key => $v) { if($row->children_id==$v) echo "checked"; } ?> /><?php echo $row->text.'<br/>';
                }
              ?>
    </div>
        <div class="form-group col-md-6 left">
                    <!--<label>Remove permission</label></br>
                    <input type="checkbox"  id="" name="">-->
       </div>
</div>
<?php if($user_perm!='')
{ ?>
<center><input type="submit" class="btn btn-info" value="Update" name="submit"></center>
<?php }
else { ?>
<center><input type="submit" class="btn btn-info" value="Submit" name="submit"></center>
<?php } ?>
