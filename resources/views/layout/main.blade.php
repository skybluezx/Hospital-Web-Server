<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>{{ $pageName }}</title>
        <meta name="description" content="Inner-eye is a platform of effect evaluation, strategy management and data processing based on many kinds of advertising data by weibo advertisement algorithm group." />
        <meta name="keywords" content="inner-eye" />
        <meta name="author" content="weibo_ad_algo"/>

        @section('link_resources')

            <!-- CSS按优先级确定引用顺序：NPM->前端模板->自定义 -->

            <!-- 以下为NPM插件的CSS引用 -->

            <!-- App CSS -->
            <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css"/>

            <!-- 以下为前端模板插件的CSS引用 -->

            <!-- Favicon -->
            <link rel="shortcut icon" href="favicon.ico">
            <link rel="icon" href="favicon.ico" type="/image/x-icon">

            <link href="/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

            <!-- Custom CSS -->
            <link href="/dist/css/style.css" rel="stylesheet" type="text/css">

        @show

    </head>

    <body>
        <!--Preloader-->
        <div class="preloader-it">
            <div class="la-anim-1"></div>
        </div>
        <!--/Preloader-->

        <div class="wrapper theme-3-active pimary-color-green">

            <!-- Top Menu Items -->
            @include('layout.main_top_nav')
            <!-- /Top Menu Items -->

            <!-- Left Sidebar Menu -->
            @include('layout.main_left_nav')
            <!-- /Left Sidebar Menu -->

            <!-- Right Sidebar Menu -->
            {{--@include('layout.main_right_nav')--}}
            <!-- /Right Sidebar Menu -->

            <!-- Right Sidebar Backdrop -->
            <div class="right-sidebar-backdrop"></div>
            <!-- /Right Sidebar Backdrop -->

            <!-- Main Content -->
            <div class="page-wrapper">
                <div class="container-fluid pt-5">
                    @section('main_content')

                    @show
                </div>

                <!-- Footer -->
                <footer class="footer container-fluid pl-30 pr-30">
                    <div class="row">
                        <div class="col-sm-12">
                            <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);">
                                <i class="zmdi zmdi-menu"></i>
                            </a>
                            <p>2018 &copy; 天眼2.0. Developed by 微博广告算法-天眼团队</p>
                        </div>
                    </div>
                </footer>
                <!-- /Footer -->

            </div>
            <!-- /Main Content -->

        </div>
        <!-- /#wrapper -->

        <!-- JavaScript -->
        @section('js_scripts')

            <!-- 以下为NPM插件引用 -->

            <!-- APP JS -->
            <!-- 包括jQuery、bootstrap3和eCharts -->
            <!-- 前端模板依赖jQuery和bootstrap3，不再引用前端模板中的对应插件，改为NPM版本 -->
            <script src="{{ URL::asset('js/app.js') }}"></script>

            <!-- 以下为手动插件引用 -->

            <!-- Bootstrap Multiselect -->
            <!-- NPM版本过期且前端模板不包含该插件，故手动下载包含 -->
            <script src="{{ URL::asset('js/bootstrap-multiselect.js') }}"></script>

            <!-- 以下为前端模板中的插件引用 -->

            <!-- Owl JavaScript -->
            <script src="/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

            <!-- Switchery JavaScript -->
            <script src="/vendors/bower_components/switchery/dist/switchery.min.js"></script>

            <!-- Slimscroll JavaScript -->
            <script src="/dist/js/jquery.slimscroll.js"></script>

            <!-- Fancy Dropdown JS -->
            <script src="/dist/js/dropdown-bootstrap-extended.js"></script>

            <script src="/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

            <!-- Init JavaScript -->
            <script src="/dist/js/init.js"></script>

            <script>
                $(window).load(function(){
                    window.setTimeout(function(){
                        $.toast({
                            heading: '欢迎进入微博广告天眼系统',
                            position: 'top-right',
                            loaderBg:'#f0c541',
                            icon: 'success',
                            hideAfter: 3500,
                            stack: 6
                        });
                    }, 3000);
                });
            </script>
        @show

    </body>
</html>

