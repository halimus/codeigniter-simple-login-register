<div class="container" id="main">    

    <div id="signupbox" style="margin-top:80px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-16px"><a id="signinlink" href="<?php echo site_url('auth/login'); ?>">Sign In</a></div>
            </div>  
            <div class="panel-body" >
                <form method="post" action="" class="form-horizontal" role="form">

                    <?php if(!empty(@$notif)){ ?>
                    <div id="signupalert" class="alert alert-<?php echo @$notif['type'];?>">
                        <p><?php echo @$notif['message'];?></p>
                        <span></span>
                    </div>
                    <?php } ?>
 
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php echo $this->input->post('first_name');?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-md-3 control-label">Last Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo $this->input->post('last_name');?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $this->input->post('email');?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $this->input->post('password');?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="icode" class="col-md-3 control-label">Confirmation</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" value="<?php echo $this->input->post('confirm_password');?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-9 icheck pl40">
                            <?php  
                               $checked ='';
                               if(count($_POST)){
                                   if($this->input->post('is_active'))  $checked ='checked';
                               }
                               else $checked ='checked';
                            ?>
                            <input type="checkbox" name="is_active" value="1" <?php echo $checked;?>> <label>Active</label>
                        </div>
                    </div>

                    <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="submit" class="btn btn-primary" value=" &nbsp Sign Up &nbsp">
                        </div>                                           
                    </div>

                </form>
            </div>
        </div>

    </div> 
</div>


