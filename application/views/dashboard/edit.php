
<?php $this->load->view('includes/dashboard_header'); ?>

            <div class="container">
                <div class="row">
                    <form role="form" action="<?php echo base_url('dashboard/editPost'); ?>" class="form-signin" method="POST">
                        <h2 class="form-signin-heading">Please edit this post !</h2>
                        </br>
                        <input type="hidden" value="<?php echo $id ?>" name="id">
                        <input type="text" autofocus="" value="<?php echo $subject; ?>" required="" name="subject" placeholder="Subject here" class="form-control">
                        </br>
                        <textarea required="" name="message" placeholder="Your comment goes here" 
                                  class="form-control" rows="6"><?php echo $message ?></textarea>
                        </br></br>
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Save</button>

                    </form>
                    </div>
                </div>
            </div>
       </div>            

    
<?php $this->load->view('includes/dashboard_footer'); ?>
