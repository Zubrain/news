<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    @include('admin.inc.admin_header')    
<body>


        <!-- Left Panel -->

    @include('admin.inc.admin_sidebar')

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        @include('admin.inc.header_section')
        <!-- Header-->
        @yield('content')
        {{-- Content area --}}
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    @include('admin.inc.admin_footer')
    {{-- Scripts --}}

</body>
</html>
