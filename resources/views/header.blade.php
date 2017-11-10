<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    {{--<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('/css/bootstrap-grid.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('/css/bootstrap-reboot.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('/css/custom/megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom/megamenu2.css') }}" rel="stylesheet">
    <script href="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script href="{{asset('js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v3.0.0/dist/bootstrap-float-label.min.css"/>
    <link href="{{'css/custom/bootstrap.min.css?v=1.8'}}" rel="stylesheet">
    <link href="{{'css/custom/font-awesome.min.css?v=1.8'}}" rel="stylesheet">
    <link href="{{'css/custom/animate.css?v=1.8'}}" rel="stylesheet">
    <link href="{{'css/custom/owl.carousel.css?v=1.8'}}'" rel="stylesheet">
    <link href="{{'css/custom/slick.css?v=1.8'}}" rel="stylesheet">
    <link href="{{'css/custom/slick-theme.css?v=1.8'}}" rel="stylesheet">
    <link href="{{'css/custom/jquery-ui.min.css?v=1.8'}}" rel="stylesheet">
    <link href="{{'css/custom/icons.css?v=1.8'}}" rel="stylesheet">
    <link href="{{'css/custom/component.css?v=1.8'}}" rel="stylesheet">
    <link href="{{'css/custom/new_web.css?v=1.8'}}" rel="stylesheet">
    <link href="{{'css/custom/rubique.css?v=1.8'}}" rel="stylesheet">
    {{--<link href="{{'css/bootstrap.min.css'}}" rel="stylesheet">--}}

<!-- Custom styles for this template -->
    {{--<link href="{{'css/scrolling-nav.css'}}" rel="stylesheet">--}}



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="https://github.com/kswedberg/jquery-smooth-scroll/blob/master/jquery.smooth-scroll.min.js"></script>
    <script>

        $(document).ready(function () {


            $(document).on("scroll", onScroll);

            //smoothscroll
            $('a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");

                $('a').each(function () {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');

                var target = this.hash,
                    menu = target;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top + 2
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        });

        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
            $('#menu-center a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('#menu-center li a').removeClass("active");
                    currLink.addClass("active");
                }
                else {
                    currLink.removeClass("active");
                }
            });
        }
    </script>


    {{--<style>--}}
        {{--.active {--}}
            {{--font-family: 'Droid Sans', serif;--}}
            {{--font-size: 14px;--}}
            {{--color: lightblue;--}}
            {{--text-decoration: none;--}}
            {{--line-height: 50px;--}}
        {{--}--}}
    {{--</style>--}}
</head>
<body>


<div class="navbar navbar-inverse navbar-fixed-top opaque-navbar black-font" role="navigation" id="slide-nav"
     style="position: fixed;">
    <div class="top-header hidden-xs">
        <!-- <span>
                <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                <script type="IN/Share"></script>
        </span> -->
        <span style="position:relative" data-target="#downloadApp" data-toggle="modal" title="Download App">
				<i class="fa fa-mobile" aria-hidden="true"></i> Download App
			</span>
        <span><a href="mailto:Info@instantaccesshealth.com" title="Info@instantaccesshealth.com"><i
                        class="fa fa-envelope-o"
                        aria-hidden="true"></i> Info@instantaccesshealth.com</a></span>
        <span><a href="tel:123456789" title="123456789"><i class="fa fa-phone"
                                                           aria-hidden="true"></i> 123456789</a></span>
        <span title="Mon - Sat : 9:00 AM to 9:00 PM"><i class="fa fa-clock-o" aria-hidden="true"></i> Mon - Sat : 9:00 AM to 9:00 PM</span>
    </div>
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" data-ubermenu-target="ubermenu-main-2-primary"
                    class="ubermenu-responsive-toggle ubermenu-responsive-toggle-main ubermenu-skin-black-white-2 ubermenu-loc-primary
                    ubermenu-responsive-toggle-content-align-left ubermenu-responsive-toggle-align-full navbar-toggle"
                    data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
		        <span class="wt-burger">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </span>
            </button>
            <a class="navbar-brand " href="/">

                <img id="logo-img" class="hidden-xs" src="{{'images/logo.png'}}"
                     style="width: 140px">
                <img id="logo-img2" class="visible-xs" src="{{'images/logo.png'}}"
                     style="width: 140px">
            </a>
            <li id="profile-login" class="dropdown logout-li-comp  hidden visible-xs"><a class="dropdown-toggle "
                                                                                         href="#" tabindex="0"
                                                                                         data-toggle="dropdown"
                                                                                         title="Retail"><span
                            class="ubermenu-target-title ubermenu-target-text "></span><img
                            src="/assets/images/websitev2/user.svg" class="user-login"></a>
                <ul class="dropdown-menu user-account">
                    <li><a href="#" class="track-application">My Account</a></li>
                    <li><a href="#" class="reg-li">Logout</a></li>
                </ul>
            </li>
        </div>

        <div id="slidemenu" class="clearfix">

            <nav id="ubermenu-main-2-primary"
                 class="ubermenu ubermenu-main ubermenu-menu-2 ubermenu-loc-primary ubermenu-responsive ubermenu-responsive-default ubermenu-responsive-collapse ubermenu-horizontal ubermenu-transition-shift ubermenu-trigger-hover_intent ubermenu-skin-black-white-2 ubermenu-has-border ubermenu-bar-align-full ubermenu-items-align-left ubermenu-bound-inner ubermenu-disable-submenu-scroll ubermenu-hide-bkgs ubermenu-sub-indicators ubermenu-retractors-responsive ubermenu-notouch">
                <ul id="ubermenu-nav-main-2-primary" class="ubermenu-nav">

                    <div id="menu-center">


                        <li class=" ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-home ubermenu-current-menu-item ubermenu-page_item ubermenu-page-item-5 ubermenu-current_page_item ubermenu-item-3 ubermenu-item-level-0">
                            <a class=" ubermenu-target ubermenu-target-with-icon ubermenu-item-layout-default ubermenu-item-layout-icon_left" id="active" href="#partners" tabindex="0" title="Partners">
                                <span class="ubermenu-target-title ubermenu-target-text active">Partners</span>
                            </a>
                        </li>


                        <li
                            class="js-scroll-trigger ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-home ubermenu-current-menu-item ubermenu-page_item ubermenu-page-item-5 ubermenu-current_page_item ubermenu-item-3 ubermenu-item-level-0">
                            <a class="ubermenu-target ubermenu-target-with-icon ubermenu-item-layout-default ubermenu-item-layout-icon_left" href="#team" tabindex="0" title="Team">
                                <span class="ubermenu-target-title ubermenu-target-text">Team</span>
                            </a>
                        </li>

                        <li  class=" js-scroll-trigger ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-home
                        ubermenu-current-menu-item ubermenu-page_item ubermenu-page-item-5 ubermenu-current_page_item ubermenu-item-3 ubermenu-item-level-0">
                            <a class="ubermenu-target ubermenu-target-with-icon ubermenu-item-layout-default ubermenu-item-layout-icon_left" href="#careers" tabindex="0" title="Careers">
                                <span class="ubermenu-target-title ubermenu-target-text">Careers</span>
                            </a>
                        </li>


                        <li  class="js-scroll-trigger hidden-xs hidden-sm ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-home ubermenu-current-menu-item ubermenu-page_item ubermenu-page-item-5 ubermenu-current_page_item ubermenu-item-5 ubermenu-item-level-0">
                            <a class="ubermenu-target ubermenu-target-with-icon ubermenu-item-layout-default ubermenu-item-layout-icon_left" href="#contact" tabindex="0" title="Contact">
                                <span class="ubermenu-target-title ubermenu-target-text">Contact</span>
                            </a>
                        </li>


                        <!-- Login -->

                        <li id="menu-item-6"
                            class=" hidden ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-home ubermenu-current-menu-item ubermenu-page_item ubermenu-page-item-5 ubermenu-current_page_item ubermenu-item-3 ubermenu-item-level-0 reg-li clearfix reg-li-style-btn">
                            <a href="/register-new" id="" class="ubermenu-target-with-icon ubermenu-item-layout-default ubermenu-item-layout-icon_left "
                               tabindex="0" title="Register">
                                <span href="javascript:void(0);" class="ubermenu-target-title ubermenu-target-text">Register</span></a>
                        </li>


                        <li id="menu-item-17"
                            class="ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-home ubermenu-current-menu-item ubermenu-page_item ubermenu-page-item-5 ubermenu-current_page_item ubermenu-item-3 ubermenu-item-level-0  clearfix login-li-comp">
                            <p id=""
                               class="ubermenu-target-with-icon ubermenu-item-layout-default ubermenu-item-layout-icon_left "
                               tabindex="0" title="Login"><span id="log-btn-header" href="javascript:void(0);"
                                                                data-toggle="modal" data-target="#modal-login-newid"
                                                                class="ubermenu-target-title ubermenu-target-text login-btn-style modal-login-href">Login</span>
                            </p>
                        </li>

                        <li id="menu-item-18"
                            class="hidden-xs ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-home ubermenu-current-menu-item ubermenu-page_item ubermenu-page-item-5 ubermenu-current_page_item ubermenu-item-has-children ubermenu-item-7 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega dropdown logout-li-comp hidden">
                            <a class="ubermenu-target ubermenu-target-with-icon ubermenu-item-layout-default ubermenu-item-layout-icon_left dropdown-toggle "
                               href="#" tabindex="0" data-toggle="dropdown" title="Retail"><span
                                        class="ubermenu-target-title ubermenu-target-text "></span><img
                                        src="/assets/images/websitev2/user.svg" class="user-login"></a>
                            <ul class="dropdown-menu user-account">
                                <li><a href="#" class="track-application">My Account</a></li>
                                <li><a href="#" class="reg-li">Logout</a></li>
                            </ul>
                        </li>
                    </div>

                </ul>
            </nav>
        </div>
    </div>
</div>



</body>


</html>