
<?php $this->load->view('includes/dashboard_header'); ?>

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
            </div>
       </div>            

    
<?php $this->load->view('includes/dashboard_footer'); ?>
