{{-- 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>

        i {
            margin-right: 10px;
        }
    
        /*----------bootstrap-navbar-css------------*/
        .navbar-logo {
            padding: 15px;
            color: #fff;
        }
    
        .navbar-mainbg {
            background: rgb(34,193,195);
            background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
            padding: 0px;
        }
    
        #navbarSupportedContent {
            overflow: hidden;
            position: relative;
        }
    
        #navbarSupportedContent ul {
            padding: 0px;
            margin: 0px;
        }
    
        #navbarSupportedContent ul li a i {
            margin-right: 10px;
        }
    
        #navbarSupportedContent li {
            list-style-type: none;
            float: left;
        }
    
        #navbarSupportedContent ul li a {
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
            font-size: 15px;
            display: block;
            padding: 20px 20px;
            transition-duration: 0.6s;
            transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
        }
    
        #navbarSupportedContent>ul>li.active>a {
            color: #5161ce;
            background-color: transparent;
            transition: all 0.7s;
        }
    
        #navbarSupportedContent a:not(:only-child):after {
            content: "\f105";
            position: absolute;
            right: 20px;
            top: 10px;
            font-size: 14px;
            font-family: "Font Awesome 5 Free";
            display: inline-block;
            padding-right: 3px;
            vertical-align: middle;
            font-weight: 900;
            transition: 0.5s;
        }
    
        #navbarSupportedContent .active>a:not(:only-child):after {
            transform: rotate(90deg);
        }
    
        .hori-selector {
            display: inline-block;
            position: absolute;
            height: 100%;
            top: 0px;
            left: 0px;
            transition-duration: 0.6s;
            transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            background-color: #fff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            margin-top: 10px;
        }
    
        .hori-selector .right,
        .hori-selector .left {
            position: absolute;
            width: 25px;
            height: 25px;
            background-color: #fff;
            bottom: 10px;
        }
    
        .hori-selector .right {
            right: -25px;
        }
    
        .hori-selector .left {
            left: -25px;
        }
    
        .hori-selector .right:before,
        .hori-selector .left:before {
            content: '';
            position: absolute;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgb(34,193,195);
        background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
        }
    
        .hori-selector .right:before {
            bottom: 0;
            right: -25px;
        }
    
        .hori-selector .left:before {
            bottom: 0;
            left: -25px;
        }
    
    
        @media(min-width: 992px) {
            .navbar-expand-custom {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
    
            .navbar-expand-custom .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row;
            }
    
            .navbar-expand-custom .navbar-toggler {
                display: none;
            }
    
            .navbar-expand-custom .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
        }
    
    
        @media (max-width: 991px) {
            #navbarSupportedContent ul li a {
                padding: 12px 30px;
            }
    
            .hori-selector {
                margin-top: 0px;
                margin-left: 10px;
                border-radius: 0;
                border-top-left-radius: 25px;
                border-bottom-left-radius: 25px;
            }
    
            .hori-selector .left,
            .hori-selector .right {
                right: 10px;
            }
    
            .hori-selector .left {
                top: -25px;
                left: auto;
            }
    
            .hori-selector .right {
                bottom: -25px;
            }
    
            .hori-selector .left:before {
                left: -25px;
                top: -25px;
            }
    
            .hori-selector .right:before {
                bottom: -25px;
                left: -25px;
            }
        }
    </style>
</head>
<nav class="navbar navbar-expand-custom navbar-mainbg">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector">
                <div class="left"></div>
                <div class="right"></div>
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Documents</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    // --------------add active class-on another-page move----------
    jQuery(document).ready(function($) {
        // Get current path and find target link
        var path = window.location.pathname.split("/").pop();

        // Account for home page with empty path
        if (path == '') {
            path = 'index.html';
        }

        var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
        // Add active class to target link
        target.parent().addClass('active');
    });
</script>


<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script id="rendered-js">
    // ---------Responsive-navbar-active-animation-----------
    function test() {
        var tabsNewAnim = $('#navbarSupportedContent');
        var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
        var activeItemNewAnim = tabsNewAnim.find('.active');
        var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
        var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
        var itemPosNewAnimTop = activeItemNewAnim.position();
        var itemPosNewAnimLeft = activeItemNewAnim.position();
        $(".hori-selector").css({
            "top": itemPosNewAnimTop.top + "px",
            "left": itemPosNewAnimLeft.left + "px",
            "height": activeWidthNewAnimHeight + "px",
            "width": activeWidthNewAnimWidth + "px"
        });

        $("#navbarSupportedContent").on("click", "li", function(e) {
            $('#navbarSupportedContent ul li').removeClass("active");
            $(this).addClass('active');
            var activeWidthNewAnimHeight = $(this).innerHeight();
            var activeWidthNewAnimWidth = $(this).innerWidth();
            var itemPosNewAnimTop = $(this).position();
            var itemPosNewAnimLeft = $(this).position();
            $(".hori-selector").css({
                "top": itemPosNewAnimTop.top + "px",
                "left": itemPosNewAnimLeft.left + "px",
                "height": activeWidthNewAnimHeight + "px",
                "width": activeWidthNewAnimWidth + "px"
            });

        });
    }
    $(document).ready(function() {
        setTimeout(function() {
            test();
        });
    });
    $(window).on('resize', function() {
        setTimeout(function() {
            test();
        }, 500);
    });
    $(".navbar-toggler").click(function() {
        $(".navbar-collapse").slideToggle(300);
        setTimeout(function() {
            test();
        });
    });



    // --------------add active class-on another-page move----------
    jQuery(document).ready(function($) {
        // Get current path and find target link
        var path = window.location.pathname.split("/").pop();

        // Account for home page with empty path
        if (path == '') {
            path = 'index.html';
        }

        var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
        // Add active class to target link
        target.parent().addClass('active');
    });
</script>
 --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <nav class="bg-gradient-to-r from-indigo-500 to-yellow-500">
        <div class="container mx-auto px-4 flex items-center justify-between">
          <div class="text-white font-bold text-2xl">
            <a href="#">Navbar</a> 
          </div>
          
          <div class="hidden md:block">
            <ul class="flex items-center">
              <li class="mr-6">
                <a class="text-white hover:text-gray-200" href="#">Home</a>
              </li>
              <li class="mr-6">
               <a class="text-white hover:text-gray-200" href="#">About</a>
              </li>
              <li class="mr-6">
                <a class="text-white hover:text-gray-200" href="#">Services</a>
              </li>
              <li class="mr-6">
                <a class="text-white hover:text-gray-200" href="#">Contact</a>
              </li>
            </ul>
          </div>
          
          <div class="md:hidden">
            <button class="text-white focus:outline-none">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
              </svg>
            </button>
          </div>
          
        </div>
      </nav>

    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script>
        // ---------Responsive-navbar-active-animation-----------
        function updateHoriSelector() {
            var tabsNewAnim = $('#navbarSupportedContent');
            var activeItemNewAnim = tabsNewAnim.find('.active');
            var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
            var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
            var itemPosNewAnimTop = activeItemNewAnim.position();
            var itemPosNewAnimLeft = activeItemNewAnim.position();

            $(".hori-selector").css({
                "top": itemPosNewAnimTop.top + "px",
                "left": itemPosNewAnimLeft.left + "px",
                "height": activeWidthNewAnimHeight + "px",
                "width": activeWidthNewAnimWidth + "px"
            });
        }

        $(document).ready(function() {
            setTimeout(updateHoriSelector);
        });

        $(window).on('resize', function() {
            setTimeout(updateHoriSelector, 500);
        });

        $(".navbar-toggler").click(function() {
            $(".navbar-collapse").slideToggle(300);
            setTimeout(updateHoriSelector);
        });

        // Add active class to the current page link
        $(document).ready(function($) {
            var path = window.location.pathname.split("/").pop();
            if (path === '') {
                path = 'index.html';
            }
            var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
            target.parent().addClass('active');
            updateHoriSelector();
        });
    </script>

</body>

</html>
