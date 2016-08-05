<div class="container" id="main">    

    <div id="signupbox" style="margin-top:80px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-16px"><a href="<?php echo site_url('auth/login'); ?>">Sign In</a></div>
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
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $this->input->post('email');?>">
                        </div>
                    </div>

                    <div style=""  class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="submit" class="btn btn-primary" value=" &nbsp Reset &nbsp">
                        </div>                                           
                    </div>

                </form>
            </div>
        </div>
        
    </div> 
</div>

