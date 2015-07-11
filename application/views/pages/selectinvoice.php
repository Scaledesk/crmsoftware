                                          <label>Select Invoice</label>
                                            <select  class="form-control" id="exampleInputEmail1" name="invoice" required="" onchange="loadreminder(this)">
                                                <option value="0">-select-</option>
                                            <?php
                                            foreach ($i->result() as $row) 
                                            { ?>
                                                   <option value="<?php echo $row->invoice_id; ?>"><?php echo $row->invoice_id; ?></option>
                                        <?php } ?>
                                            </select>
			<script>

                function loadreminder(obj)
                {
                    //alert(obj.value);
                     $.ajax({
                    'url' : "<?php echo base_url().'sales_management/loadreminder'; ?>",
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : {'id' : obj.value},
                    'success' : function(data){
                     var container = $('#reminderview'); //jquery selector (get element by id)
                       container.html(data);
                    }
                    });
                }
              </script>