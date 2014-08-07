
<?php $this->load->view('includes/header'); ?>
    <body>
        <div class="container">
            
            <form role="form" action="<?php echo base_url('register/indexPost'); ?>" class="form-signin" method="POST">
                <h2 class="form-signin-heading">Please register with us</h2>
                <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
                <input type="text" autofocus="" required="" name="username" placeholder="Username" class="form-control has-success has-error">
                <input type="password" required="" name="password" placeholder="Password" class="form-control has-success has-error">
                <input type="password" required="" name="password2" placeholder="Confirm password" class="form-control has-success has-error">
                               
                <button type="submit" class="btn btn-lg btn-success btn-block ">Create account</button>
            </form>

        </div>

<?php $this->load->view('includes/footer'); ?>