<?php $this->load->view('admin/components/page_head'); ?>

    <!-- Navigation Start -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Home</a></li>
                    <li><?php echo anchor('admin/page', 'Pages'); ?></li>
                    <li><?php echo anchor('admin/user', 'Pages'); ?></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><?php echo mailto('get@codearchitect.in', '<span class="glyphicon glyphicon-envelope"></span>  get@codearchitect.in'); ?></li>
                    <li><?php echo anchor('admin/user/logout', '<span class="glyphicon glyphicon-off"></span> Logout'); ?></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation Ends -->



<div class="container">
    <div class="row">
        <!-- Main Column -->
        <div class="col-md-9 col-sm-9 col-xs-12">
            <section>
                <h2>Page Name</h2>
            </section>
        </div>
        <!-- Main Column Ends -->

        <!-- Sidebar Column -->
        <div class="col-md-3">
            ok
        </div>
        <!-- Sidebar Column Ends -->
    </div>

</div><!-- /.container -->


<?php $this->load->view('admin/components/page_footer'); ?>