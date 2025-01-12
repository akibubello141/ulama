<!DOCTYPE html>
<html lang="en">
    @include('includes.pages.header')
    <body class="fixed-left">
        <div id="wrapper">
            @include('includes.menus.navbar')
            @auth
                @include('includes.menus.sidebar')
            @endauth            
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        @yield('page-content')
                    </div> 
                </div> 
                <footer class="footer text-right">
                    {{date('Y')}} © isah labbo.
                </footer>
            </div>
        </div>
        @include('includes.pages.footer')
    </body>
</html>