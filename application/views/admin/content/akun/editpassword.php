                   
<script type="text/javascript">
function checkPass(){
	//Store the password field objects into variables ...
	var pass1 = document.getElementById('password');
	var pass2 = document.getElementById('password_ulang');
	//Store the Confimation Message Object ...
	var message = document.getElementById('confirmMessage');
	//Set the colors we will be using ...
	var goodColor = "#66cc66";
	var badColor = "#ff6666";
	//Compare the values in the password field 
	//and the confirmation field
	if(pass1.value == pass2.value){
		//The passwords match. 
		//Set the color to the good color and inform
		//the user that they have entered the correct password 
		//pass2.style.backgroundColor = goodColor;
		message.style.color = goodColor;
		message.innerHTML = "Password Sesuai!"
	}else{
		//The passwords do not match.
		//Set the color to the bad color and
		//notify the user.
		//pass2.style.backgroundColor = badColor;
		message.style.color = badColor;
		message.innerHTML = "Password Tidak Sesuai!"
	}
}  
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/admin/js/password-strength.js"></script>
<style type="text/css">
#formMenu .short{color:#FF0000;}
#formMenu .short_param{width:25px;background:#FF0000;}
#formMenu .weak{color:#E66C2C;}
#formMenu .weak_param{width:50px;background:#E66C2C;}
#formMenu .good{color:#2D98F3; }
#formMenu .good_param{width:75px;background:#2D98F3;}
#formMenu .strong{color:#006400;}
#formMenu .strong_param{width:100px;background:#006400;}
</style>
<div class="page">
    <div class="page-title blue">
        <h3>
            <?php echo $breadcrumb; ?>
        </h3>
        <p>Informasi Mengenai
            <?php echo $breadcrumb; ?>
        </p>
    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h5 class="panel-title">Edit Password</h5>
                    </div>
                    <!-- ========== Flashdata ========== -->
                    <?php if ($this->session->flashdata('success') || $this->session->flashdata('warning') || $this->session->flashdata('error')) { ?>
                    <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="fa fa-check sign"></i>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php } else if ($this->session->flashdata('warning')) { ?>
                    <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="fa fa-check sign"></i>
                        <?php echo $this->session->flashdata('warning'); ?>
                    </div>
                    <?php } else { ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="fa fa-warning sign"></i>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                    <?php } ?>
                    <?php } ?>
                    <!-- ========== End Flashdata ========== -->
                    <div class="panel-body container-fluid">
                        <form action="<?php echo site_url();?>akun/editpassword/<?php echo $username;?>" method="post" enctype="multipart/form-data" id="exampleStandardForm"
                            autocomplete="off">
                            <input type="hidden" name="username" value="<?php echo $username;?>" />
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Password Sekarang</label>
                                <input type="password" class="form-control input-sm" id="password_recent" name="password_recent" placeholder="Masukan Password Sekarang" required />
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Password Baru</label>
                                <input type="password" class="form-control input-sm" id="password" name="password" placeholder="Masukan Password Baru" required />
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Ulangi Password</label>
                                <input type="password" class="form-control input-sm" id="password_ulang" name="password_ulang" placeholder="Ulangi Password" required />
                            </div>
                            <div class='button center'>
                                <input class="btn btn-primary btn-sm" type="submit" name="simpan" value="Simpan Data" id="validateButton2">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>