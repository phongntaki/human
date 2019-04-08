<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larashop Admin Login</title>

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
                            <div class="alert-tb alert alert-success">
                                <span class="fa fa-check"> </span> <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <form class="form-horizontal" role="form" method="POST" action="">
                            <h1>Password Reset</h1>
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <?php if($errors->has('email')): ?>
                                <span class="help-block"><strong><?php echo e($errors->first('email')); ?></strong></span>
                                <?php endif; ?>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email"/>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-default submit">Send Password Reset Link</button>
                                <a class="reset_pass" href="<?php echo e(route('login')); ?>">Login</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-paw"></i> Star Enzi Panel</h1>
                                    <p>�<?php echo e(now()->year); ?> All Rights Reserved.</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>