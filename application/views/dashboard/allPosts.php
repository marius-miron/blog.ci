
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
                        <?php if ($success = $this->session->flashdata('postUpdatedFlashSuccess')): ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span></button><?php echo $success; ?></div>
                        <?php endif;?>
                    </div>

                    <ul>
                    <?php foreach ($subjects as $id => $subject): ?>
                        <li><?php echo $subject; ?>
                            <a href= "<?php echo "/dashboard/edit/" . $id ?>
                               "onclick="return confirm('Vreti sa editati aceasta postare?')"> Edit</a>
                            <span> | </span> 
                            <a href= "<?php echo "/dashboard/deletePost/" . $id ?>
                               "onclick="return confirm('Vreti sa stergeti aceasta postare?')"> Elimina</a>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>

<?php $this->load->view('includes/dashboard_footer'); ?>          
