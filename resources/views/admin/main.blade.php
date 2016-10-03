<div class="container">

    <!-- upper section -->
    <div class="row">
        <div class="col-sm-3">
            <!-- left -->
            @yield('mainMenu')

            <hr>

        </div><!-- /span-3 -->
        <div class="col-sm-9">

            <!-- column 2 -->
            @yield('mainContent')
            <!--/col-->

        </div><!--/col-span-9-->

    </div><!--/row-->
    <!-- /upper section -->

    <!-- lower section -->
    <div class="row">

            <!-- Posts -->
            @yield('posts')
            <!-- /Posts -->

    <!--/col-->

    </div><!--/row-->

</div><!--/container-->
