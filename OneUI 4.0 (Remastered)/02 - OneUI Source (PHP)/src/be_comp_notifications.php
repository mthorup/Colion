<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Notifications <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Powerful alerts based on Bootstrap Notify plugin.</small>
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Notifications</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Bootstrap Notify (.js-notify class is initialized in Helpers.notify()) -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Bootstrap Notify</h3>
        </div>
        <div class="block-content">
            <!-- Info -->
            <h4 class="border-bottom pb-2">Info</h4>
            <div class="row items-push">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        A notification with an informational message
                    </p>
                </div>
                <div class="col-lg-8">
                    <button type="button" class="js-notify btn btn-sm btn-info push" data-type="info" data-icon="fa fa-fw fa-info-circle mr-1" data-message="Congrats! You've reached level 12!">
                        <i class="fa fa-bell mr-1"></i> Launch Notification
                    </button>
                    <p class="font-w600 mb-0">
                        You can also trigger it with JS:
                    </p>
                    <p>
                        <code>One.helpers('notify', {type: 'info', icon: 'fa fa-info-circle mr-1', message: 'Your message!'});</code>
                    </p>
                </div>
            </div>
            <!-- END Info -->

            <!-- Success -->
            <h4 class="border-bottom pb-2">Success</h4>
            <div class="row items-push">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        A notification with a success message
                    </p>
                </div>
                <div class="col-lg-8">
                    <button type="button" class="js-notify btn btn-sm btn-success push" data-type="success" data-icon="fa fa-fw fa-check mr-1" data-message="App was updated successfully to 1.2 version">
                        <i class="fa fa-bell mr-1"></i> Launch Notification
                    </button>
                    <p class="font-w600 mb-0">
                        You can also trigger it with JS:
                    </p>
                    <p>
                        <code>One.helpers('notify', {type: 'success', icon: 'fa fa-check mr-1', message: 'Your message!'});</code>
                    </p>
                </div>
            </div>
            <!-- END Success -->

            <!-- Warning -->
            <h4 class="border-bottom pb-2">Warning</h4>
            <div class="row items-push">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        A notification with a warning message
                    </p>
                </div>
                <div class="col-lg-8">
                    <button type="button" class="js-notify btn btn-sm btn-warning push" data-type="warning" data-icon="fa fa-fw fa-exclamation-triangle mr-1" data-message="Please make a backup before updating!">
                        <i class="fa fa-bell mr-1"></i> Launch Notification
                    </button>
                    <p class="font-w600 mb-0">
                        You can also trigger it with JS:
                    </p>
                    <p>
                        <code>One.helpers('notify', {type: 'warning', icon: 'fa fa-exclamation mr-1', message: 'Your message!'});</code>
                    </p>
                </div>
            </div>
            <!-- END Warning -->

            <!-- Error -->
            <h4 class="border-bottom pb-2">Error</h4>
            <div class="row items-push">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        A notification with an error message
                    </p>
                </div>
                <div class="col-lg-8">
                    <button type="button" class="js-notify btn btn-sm btn-danger push" data-type="danger" data-icon="fa fa-fw fa-times mr-1" data-message="Update failed! :-(">
                        <i class="fa fa-bell mr-1"></i> Launch Notification
                    </button>
                    <p class="font-w600 mb-0">
                        You can also trigger it with JS:
                    </p>
                    <p>
                        <code>One.helpers('notify', {type: 'danger', icon: 'fa fa-times mr-1', message: 'Your message!'});</code>
                    </p>
                </div>
            </div>
            <!-- END Error -->

            <!-- Position -->
            <h4 class="border-bottom pb-2">Position</h4>
            <div class="row items-push">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        You can show your notification in multiple screen positions
                    </p>
                </div>
                <div class="col-lg-8">
                    <button type="button" class="js-notify btn btn-sm btn-secondary push" data-message="Your message!">
                        Top Right
                    </button>
                    <p class="font-w600 mb-0">
                        You can also trigger it with JS:
                    </p>
                    <p class="mb-5">
                        <code>One.helpers('notify', {message: 'Your message!'});</code>
                    </p>
                    <button type="button" class="js-notify btn btn-sm btn-secondary push" data-align="center" data-message="Your message!">
                        Top Center
                    </button>
                    <p class="font-w600 mb-0">
                        You can also trigger it with JS:
                    </p>
                    <p class="mb-5">
                        <code>One.helpers('notify', {align: 'center', message: 'Your message!'});</code>
                    </p>
                    <button type="button" class="js-notify btn btn-sm btn-secondary push" data-align="left" data-message="Your message!">
                        Top Left
                    </button>
                    <p class="font-w600 mb-0">
                        You can also trigger it with JS:
                    </p>
                    <p class="mb-5">
                        <code>One.helpers('notify', {align: 'left', message: 'Your message!'});</code>
                    </p>
                    <button type="button" class="js-notify btn btn-sm btn-secondary push" data-from="bottom" data-message="Your message!">
                        Bottom Right
                    </button>
                    <p class="font-w600 mb-0">
                        You can also trigger it with JS:
                    </p>
                    <p class="mb-5">
                        <code>One.helpers('notify', {from: 'bottom', message: 'Your message!'});</code>
                    </p>
                    <button type="button" class="js-notify btn btn-sm btn-secondary push" data-from="bottom" data-align="center" data-message="Your message!">
                        Bottom Center
                    </button>
                    <p class="font-w600 mb-0">
                        You can also trigger it with JS:
                    </p>
                    <p class="mb-5">
                        <code>One.helpers('notify', {from: 'bottom', align: 'center', message: 'Your message!'});</code>
                    </p>
                    <button type="button" class="js-notify btn btn-sm btn-secondary push" data-from="bottom" data-align="left" data-message="Your message!">
                        Bottom Left
                    </button>
                    <p class="font-w600 mb-0">
                        You can also trigger it with JS:
                    </p>
                    <p>
                        <code>One.helpers('notify', {from: 'bottom', align: 'left', message: 'Your message!'});</code>
                    </p>
                </div>
            </div>
            <!-- END Position -->
        </div>
    </div>
    <!-- END Bootstrap Notify -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/bootstrap-notify/bootstrap-notify.min.js'); ?>

<!-- Page JS Helpers (BS Notify Plugin) -->
<script>jQuery(function(){ One.helpers('notify'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
