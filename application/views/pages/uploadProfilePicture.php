
<div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">Upload Profile Picture</a>
                                 <form class="m-t-md" action="<?=(base_url().'User_control/do_upload_image')?>" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image" id="image" onchange="readUrl()" placeholder="profile picture" required="">
                                    </div>
                                    <div class="form-group">
                                      <img src="" id="img_id" height="100px" width="100px"/>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Upload</button>

                                </form>

                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
<<script type="text/javascript">

function readUrl()
{
  if(document.getElementById('image').value!='')
   {
     var imgid=document.getElementById('image');
	 var freader=new FileReader();
	 freader.readAsDataURL(imgid.files[0]);
	 freader.onloadend=function(event)
	 {
	   var show_id=document.getElementById('img_id');
	   //alert(event.target.result);
	   show_id.src=event.target.result;
	 }
   }


}

</script>
