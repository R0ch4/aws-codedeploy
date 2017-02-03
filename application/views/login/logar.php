<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div class="login-box">
        <!-- /.login-logo -->
        <div class="login-box-body">
            <div class="login-logo">
                <a href="index"><img id="logo" src="/public/img/logo.png"></a>
            </div>
            <p class="login-box-msg"><?php echo $msg; ?></p>

            <form method="post">

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="row">
                    <!-- <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div> -->
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a class="btn btn-link" href="url('/password/reset')">Forgot Your Password?</a>
            <a id="register-member" href="<?php echo URL::site('user/add')?>" class="text-center">
                Register a new membership
            </a>

        </div>
        <!-- /.login-box-body -->
    </div>
