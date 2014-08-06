<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Add a post</title>
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
                max-width: 360px;
                padding: 15px;
                margin: 0 auto;
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
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
                                    
        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <form role="form" action="<?php echo base_url('dashboard/indexPost'); ?>" class="form-signin" method="POST">
                    <h2 class="form-signin-heading">Please leave us a post !</h2>
                    </br>
                    <input type="text" autofocus="" required="" name="subject" placeholder="Subject here" class="form-control">
                    </br>
                    <textarea required="" name="message" placeholder="Your comment goes here" class="form-control" rows="6"></textarea>
                    </br></br>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Save</button>
                    
                </form>
            </div>
        </div>

        <p class="footer"></p>
    

        
        
    </body>
</html>
