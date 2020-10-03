<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
<<<<<<< HEAD
        <h1>
            Password Değiştir
            <small>Yeni bir Password belirleyin</small>
        </h1>
=======
      <h1>
        Change Password
        <small>Set new password for your account</small>
      </h1>
>>>>>>> old2/master
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-4">
<<<<<<< HEAD
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Bilgilerinizi Giriniz</h3>
                    </div>
                    <!-- /.box-header -->
=======
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Details</h3>
                    </div><!-- /.box-header -->
>>>>>>> old2/master
                    <!-- form start -->
                    <form role="form" action="<?php echo base_url() ?>changePassword" method="post">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
<<<<<<< HEAD
                                        <label for="inputPassword1">Eski Passwordniz</label>
                                        <input type="password" class="form-control" id="inputOldPassword" placeholder="Eski Password" name="oldPassword" maxlength="20"
                                            required>
=======
                                        <label for="inputPassword1">Old Password</label>
                                        <input type="password" class="form-control" id="inputOldPassword" placeholder="Old password" name="oldPassword" maxlength="20" required>
>>>>>>> old2/master
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
<<<<<<< HEAD
                                        <label for="inputPassword1">Yeni Passwordniz</label>
                                        <input type="password" class="form-control" id="inputPassword1" placeholder="Yeni Password" name="newPassword" maxlength="20"
                                            required>
=======
                                        <label for="inputPassword1">New Password</label>
                                        <input type="password" class="form-control" id="inputPassword1" placeholder="New password" name="newPassword" maxlength="20" required>
>>>>>>> old2/master
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
<<<<<<< HEAD
                                        <label for="inputPassword2">Yeni Passwordnizi doğrulayın</label>
                                        <input type="password" class="form-control" id="inputPassword2" placeholder="Yeni Passwordnizi doğrulayın" name="cNewPassword"
                                            maxlength="20" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Gönder" />
                            <input type="reset" class="btn btn-default" value="Sıfırla" />
=======
                                        <label for="inputPassword2">Confirm New Password</label>
                                        <input type="password" class="form-control" id="inputPassword2" placeholder="Confirm new password" name="cNewPassword" maxlength="20" required>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
>>>>>>> old2/master
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
<<<<<<< HEAD
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                    <?php } ?>
                    <?php  
=======
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
>>>>>>> old2/master
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
<<<<<<< HEAD
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php } ?>

                    <?php  
=======
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <?php  
>>>>>>> old2/master
                    $noMatch = $this->session->flashdata('nomatch');
                    if($noMatch)
                    {
                ?>
<<<<<<< HEAD
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('nomatch'); ?>
                    </div>
                    <?php } ?>

                    <div class="row">
                        <div class="col-md-12">
                            <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                        </div>
                    </div>
=======
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('nomatch'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
>>>>>>> old2/master
            </div>
        </div>
    </section>
</div>