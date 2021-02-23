	<?php echo $__env->yieldContent('modal'); ?>
	<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="<?php echo e(asset()); ?>images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="<?php echo e(asset()); ?>images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="<?php echo e(asset()); ?>images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="<?php echo e(asset()); ?>images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="<?php echo e(asset()); ?>images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
	<script src="<?php echo e(asset()); ?>js/vendor-all.min.js"></script>
    <script src="<?php echo e(asset()); ?>js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo e(asset()); ?>js/ripple.js"></script>
    <script src="<?php echo e(asset()); ?>js/pcoded.js"></script>
    <script src="<?php echo e(asset()); ?>js/main.js"></script>
    <script src="<?php echo e(asset()); ?>js/plugins/DataTables/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset()); ?>js/plugins/DataTables/DataTables/js/dataTables.bootstrap4.min.js"></script>
    
    <?php echo $__env->yieldContent('js'); ?>
</body>
</html><?php /**PATH C:\MyServer\www\bincigar\app\views/layouts/footer.blade.php ENDPATH**/ ?>