
<?php $this->load->view('includes/dashboard_header'); ?>

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
                </div>
            </div>

<?php $this->load->view('includes/dashboard_footer'); ?>
