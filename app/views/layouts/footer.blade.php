	@yield('modal')
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
                            <img src="{{ asset() }}images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="{{ asset() }}images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="{{ asset() }}images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="{{ asset() }}images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="{{ asset() }}images/browser/ie.png" alt="">
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
	<script src="{{ asset() }}js/vendor-all.min.js"></script>
    <script src="{{ asset() }}js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset() }}js/ripple.js"></script>
    <script src="{{ asset() }}js/pcoded.js"></script>
    <script src="{{ asset() }}js/main.js"></script>
    <script src="{{ asset() }}js/plugins/DataTables/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset() }}js/plugins/DataTables/DataTables/js/dataTables.bootstrap4.min.js"></script>
    {{-- Custom Js --}}
    @yield('js')
</body>
</html>