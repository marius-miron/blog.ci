
<?php $this->load->view('includes/header'); ?>

    <body>
        <div class="container">
            <div class="row">
                <form role="form" action="<?php echo base_url('login/validateUser'); ?>" class="form-signin" method="POST">
                    <h2 class="form-signin-heading">Please sign in</h2>                    
                    <?php if ($message = $this->session->flashdata('message')): ?>
                            <div class="alert alert-danger"><?php echo $message; ?></div>
                    <?php endif;?>
                     <div class="row placeholders">
                        <?php if ($success = $this->session->flashdata('flashSuccess')): ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span></button><?php echo $success; ?></div>
                        <?php endif;?>
                         <?php if ($error = $this->session->flashdata('flashError')): ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span></button><?php echo $error; ?></div>
                        <?php endif; ?>
                    </div>       
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

<?php $this->load->view('includes/footer'); ?>