<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div class="register-box">
        <div class="register-logo">
            <a href="index"><img id="logo" src="img/logo.png"></a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                    @endif
                    <span id="icon-name" class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                    @endif
                    <span id="icon-email" class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                    @endif
                    <span id="icon-password" class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                              <strong>{{ $errors->first('password_confirmation') }}</strong>
                          </span>
                    @endif
                    <span id="icon-repassword" class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                </div>
            </form>
            <a href="login.html" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div>