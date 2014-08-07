
<?php $this->load->view('includes/dashboard_header'); ?>

                    <ul>
                    <?php foreach ($subjects as $subject): ?>
                        <li><?php echo $subject; ?></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>

<?php $this->load->view('includes/dashboard_footer'); ?>          
