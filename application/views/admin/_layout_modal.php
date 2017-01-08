<?php $this->load->view('admin/components/page_head'); ?>

    <!-- Modal -->
    <div id="myModal" class="modal show" role="dialog" style="background: #555;">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    &copy; <?php echo $meta_title; ?>
                </div>
            </div>

        </div>
    </div>



<?php $this->load->view('admin/components/page_footer'); ?>