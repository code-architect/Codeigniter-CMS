<?php $this->load->view('admin/components/page_head'); ?>

    <!-- Modal -->
    <div id="myModal" class="modal show" role="dialog" style="background: #555;">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <?php $this->load->view($subview); // ?>

                <div class="modal-footer">
                    &copy; <?php echo $meta_title; ?>
                </div>
            </div>

        </div>
    </div>



<?php $this->load->view('admin/components/page_footer'); ?>