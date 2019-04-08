<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larashop Admin | Password Reset</title>

        <!-- Bootstrap -->
        <link href="<?php echo e(asset('public/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo e(asset('public/bootstrap/css/font-awesome.min.css')); ?>" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo e(asset('public/bootstrap/css/nprogress.css')); ?>" rel="stylesheet">
        <!-- Animate.css -->
        <link href="<?php echo e(asset('public/bootstrap/css/animate.min.css')); ?>" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo e(asset('public/bootstrap/css/custom.min.css')); ?>" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="lostpassword"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                        <?php endif; ?>
                        <form role="form" method="POST" action="<?php echo e(route('password.reset')); ?>">
                            <h3>Reset Password</h3>

                            <?php echo e(csrf_field()); ?>


                            <input type="hidden" name="token" value="<?php echo e($token); ?>">

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <?php if($errors->has('email')): ?>
                                <span class="help-block"><strong><?php echo e($errors->first('email')); ?></strong></span>
                                <?php endif; ?>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email"/>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <?php if($errors->has('password')): ?>
                                <span class="help-block"><strong><?php echo e($errors->first('password')); ?></strong></span>
                                <?php endif; ?>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                <?php if($errors->has('password_confirmation')): ?>
                                <span class="help-block"><strong><?php echo e($errors->first('password_confirmation')); ?></strong></span>
                                <?php endif; ?>
                                <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"/>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-default submit">Reset Password</button>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-paw"></i> Larashop Admin Panel</h1>
                                    <p>�2017 All Rights Reserved.</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>