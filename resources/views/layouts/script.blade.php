
    <script src="../../script/jquery-migrate-1.2.1.min.js"></script>
    <script src="../../script/jquery-ui.js"></script>
    <script src="../../script/bootstrap.min.js"></script>
    <script src="../../script/bootstrap-hover-dropdown.js"></script>
    <script src="../../script/html5shiv.js"></script>
    <script src="../../script/respond.min.js"></script>
    <script src="../../script/jquery.metisMenu.js"></script>
    <script src="../../script/jquery.slimscroll.js"></script>
    <script src="../../script/jquery.cookie.js"></script>
    <script src="../../script/icheck.min.js"></script>
    <script src="../../script/custom.min.js"></script>
    <script src="../../script/jquery.news-ticker.js"></script>
    <script src="../../script/jquery.menu.js"></script>
    <script src="../../script/pace.min.js"></script>
    <script src="../../script/holder.js"></script>
    <script src="../../script/responsive-tabs.js"></script>
    <script src="../../script/jquery.flot.js"></script>
    <script src="../../script/jquery.flot.categories.js"></script>
    <script src="../../script/jquery.flot.pie.js"></script>
    <script src="../../script/jquery.flot.tooltip.js"></script>
    <script src="../../script/jquery.flot.fillbetween.js"></script>
    <script src="../../script/jquery.flot.stack.js"></script>
    <script src="../../script/jquery.flot.spline.js"></script>
    <script src="../../script/zabuto_calendar.min.js"></script>
    <script src="../../script/modernizr.min.js"></script>
    <script src="../../script/jplist.min.js"></script>
    <script src="../../script/jplist.js"></script>

    <!--CORE JAVASCRIPT-->
    <script src="../../script/main.js"></script>

<script>
    $(document).ready(function(){
        $("#menu-toggle").click(function(event) {
            $("#wrapper").toggleClass("toggled");
            event.preventDefault();
        });
    });

    //--------------- hide show in responsive ----------------

    $(document).ready(function(){
      $(".btn-filter").click(function(){
        $(".organization_left").toggle();
      });
    });

    $(document).ready(function(){
      $(".menu_filter").click(function(){
        $(".responsive_menu").toggle();
      });
    });

    $(document).ready(function(){
      $(".org_filter").click(function(){
        $(".tab_filter_btn").toggle();
      });
    });
/*
    $(document).ready(function(){
      $(".submenu_filter").click(function(){
        $(".submenu_div").toggle();
      });
    });*/
</script>