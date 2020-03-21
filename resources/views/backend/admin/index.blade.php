<!doctype html>
<html lang="en">

    @include('backend.admin.partials.head')

    <body data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('backend.admin.layouts.header')

            @include('backend.admin.layouts.sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                @yield('content')


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2020 © Xoric.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @include('backend.admin.partials.rightSideBar')

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        @include('backend.admin.partials.scripts')

    </body>
</html>
