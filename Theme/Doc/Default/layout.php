<?php $this->header(); ?>
<div class="am-cf am-padding-top am-padding-bottom">
    <div class="tm-sidebar am-offcanvas am-margin-left-xs" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <?php include 'sidebar.php'; ?>
        </div>
    </div>
    <?php include $file; ?>

    <?php include 'sidebar_listsort.php'; ?>
    <a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
        <span class="am-icon-btn am-icon-th-list"></span>
    </a>
</div>
<?php $this->footer(); ?>