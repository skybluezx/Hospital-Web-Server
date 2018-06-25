<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span><i class="zmdi zmdi-flight-land zmdi-hc-fw"></i>广告投放</span>
            <i class="zmdi zmdi-flight-land zmdi-hc-fw"></i>
        </li>
        <li>
            <a @if ($moduleName === "overall_effect")class="active"@endif href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr">
                <div class="pull-left">
                    <i class="zmdi zmdi-chart mr-20"></i>
                    <span class="right-nav-text">总体投放效果</span>
                </div>
                <div class="pull-right">
                    <i class="zmdi zmdi-caret-down"></i>
                </div>
                <div class="clearfix"></div>
            </a>
            <ul id="dashboard_dr" class="collapse collapse-level-1">
                <li>
                    <a href="/advertisement/overall_effect">总体效果</a>
                </li>
            </ul>
        </li>
        <li>
            <a @if ($moduleName === "bucket_effect")class="active"@endif href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr">
                <div class="pull-left">
                    <i class="zmdi zmdi-camera-switch mr-20"></i>
                    <span class="right-nav-text">插件投放效果</span>
                </div>
                <div class="pull-right">
                    <span class="label label-success">hot</span>
                </div>
                <div class="clearfix"></div>
            </a>
            <ul id="ecom_dr" class="collapse collapse-level-1">
                <li>
                    <a href="/advertisement/bucket_contrast_effect">插件对比效果</a>
                </li>
                {{--<li>--}}
                    {{--<a href="/advertisement/">单插件效果</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href=/advertisement/">插件分布</a>--}}
                {{--</li>--}}
            </ul>
        </li>
        <li>
            <a @if ($moduleName === "bucket_effect")class="active"@endif href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr">
                <div class="pull-left">
                    <i class="zmdi zmdi-camera-switch mr-20"></i>
                    <span class="right-nav-text">文档</span>
                </div>
                <div class="pull-right">
                    <i class="zmdi zmdi-caret-down"></i>
                </div>
                <div class="clearfix"></div>
            </a>
            <ul id="ecom_dr" class="collapse collapse-level-1">
                <li>
                    <a href="/advertisement/bucket_contrast_effect">插件对比效果</a>
                </li>
            </ul>
        </li>

        <li><hr class="light-grey-hr mb-10"/></li>

        <li class="navigation-header">
            <span><i class="zmdi zmdi-account-box zmdi-hc-fw"></i>广告主</span>
            <i class="zmdi zmdi-account-box zmdi-hc-fw"></i>
        </li>
        {{--<li>--}}
            {{--<a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr">--}}
                {{--<div class="pull-left">--}}
                    {{--<i class="zmdi zmdi-smartphone-setup mr-20"></i>--}}
                    {{--<span class="right-nav-text">UI Elements</span>--}}
                {{--</div>--}}
                {{--<div class="pull-right">--}}
                    {{--<i class="zmdi zmdi-caret-down"></i>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</a>--}}
            {{--<ul id="ui_dr" class="collapse collapse-level-1 two-col-list">--}}
                {{--<li>--}}
                    {{--<a href="panels-wells.html">Panels & Wells</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

        <li><hr class="light-grey-hr mb-10"/></li>

        <li class="navigation-header">
            <span><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>广告受众</span>
            <i class="zmdi zmdi-male-female zmdi-hc-fw"></i>
        </li>
        {{--<li>--}}
            {{--<a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr">--}}
                {{--<div class="pull-left">--}}
                    {{--<i class="zmdi zmdi-google-pages mr-20"></i>--}}
                    {{--<span class="right-nav-text">Special Pages</span>--}}
                {{--</div>--}}
                {{--<div class="pull-right">--}}
                    {{--<i class="zmdi zmdi-caret-down"></i>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</a>--}}
            {{--<ul id="pages_dr" class="collapse collapse-level-1 two-col-list">--}}
                {{--<li>--}}
                    {{--<a class="active" href="blank.html">Blank Page</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>--}}
                    {{--<ul id="auth_dr" class="collapse collapse-level-2">--}}
                        {{--<li>--}}
                            {{--<a href="login.html">Login</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="documentation.html"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">documentation</span></div><div class="clearfix"></div></a>--}}
        {{--</li>--}}

        <li><hr class="light-grey-hr mb-10"/></li>

        <li class="navigation-header">
            <span><i class="zmdi zmdi-tv-list zmdi-hc-fw"></i>基础数据平台</span>
            <i class="zmdi zmdi-tv-list zmdi-hc-fw"></i>
        </li>
        {{--<li>--}}
            {{--<a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr">--}}
                {{--<div class="pull-left">--}}
                    {{--<i class="zmdi zmdi-google-pages mr-20"></i>--}}
                    {{--<span class="right-nav-text">Special Pages</span>--}}
                {{--</div>--}}
                {{--<div class="pull-right">--}}
                    {{--<i class="zmdi zmdi-caret-down"></i>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</a>--}}
            {{--<ul id="pages_dr" class="collapse collapse-level-1 two-col-list">--}}
                {{--<li>--}}
                    {{--<a class="active" href="blank.html">Blank Page</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>--}}
                    {{--<ul id="auth_dr" class="collapse collapse-level-2">--}}
                        {{--<li>--}}
                            {{--<a href="login.html">Login</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="documentation.html">--}}
                {{--<div class="pull-left">--}}
                    {{--<i class="zmdi zmdi-book mr-20"></i>--}}
                    {{--<span class="right-nav-text">documentation</span>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</a>--}}
        {{--</li>--}}
    </ul>
</div>