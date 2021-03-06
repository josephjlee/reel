<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">   

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <div class="login-box">
            <div class="login-logo">
                <a href=""><b>REEL INVOICING</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in</p>

                <form action="#" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" autocomplete="off" name="email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" autocomplete="off" value="" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                
                <a href="<?= site_url('home/register') ?>">Register</a><br>
                <a href="#">I forgot my password</a><br>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
    </section>
    <!-- /.content -->
</div>



