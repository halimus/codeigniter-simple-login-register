<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-primary" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
                <div style="float:right; font-size: 80%; position: relative; top:-16px"><a href="<?php echo site_url('auth/forgot_password'); ?>">Forgot password?</a></div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form method="post" action="" class="form-horizontal" role="form">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="Email address">                                        
                    </div>

                    <div style="margin-bottom:7px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>

                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                            </label>
                        </div>
                    </div>

                    <div style="margin-top:15px" class="form-group">
                        <div class="col-sm-12 controls">
                            <input type="submit" class="btn btn-primary" value=" Login ">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                Don't have an account ! <a href="<?php echo site_url('auth/register'); ?>">Sign Up Here</a>
                            </div>
                        </div>
                    </div>    
                </form>     
                
            </div>                     
        </div>  
    </div>
</div>



