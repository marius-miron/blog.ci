<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <style>
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #eee;
            }

            .form-signin {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin .checkbox {
                font-weight: normal;
            }
            .form-signin .form-control {
                position: relative;
                height: auto;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 10px;
                font-size: 16px;
            }
            .form-signin .form-control:focus {
                z-index: 2;
            }
            .form-signin input[type="email"] {
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form role="form" action="<?php echo base_url('login/validateUser'); ?>" class="form-signin" method="POST">
                    <h2 class="form-signin-heading">Please sign in</h2>                    
                    <?php if ($message = $this->session->flashdata('message')): ?>
                            <div class="alert alert-danger"><?php echo $message; ?></div>
                    <?php endif;?>
                    <input type="text" autofocus="" required="" name="username" placeholder="Username" class="form-control">
                    <input type="password" required="" name="password" placeholder="Password" class="form-control">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                    <a href="/register" class="btn btn-success btn-lg btn-block" role="button">Register</a>
                </form>
            </div>
        </div>

        <p class="footer"></p>
    </body>
</body>
</html>