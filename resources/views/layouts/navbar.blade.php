<style>
    i {
        margin-right: 10px;
    }

    .navbar-mainbg {
        background: rgb(34, 193, 195);
        background: linear-gradient(#6366F1, #9F7AEA, #F472B6);
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
        font-size: 13px;
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
        background: linear-gradient(#6366F1, #9F7AEA, #F472B6);
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

<nav class="navbar navbar-expand-custom navbar-mainbg  hidden d:ml-6 sm:block">
    <div class="navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav space-x-4">
            <div class="hori-selector">
                <div class="left"></div>
                <div class="right"></div>
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="home"><i class="fas fa-tachometer-alt"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index"><i class="far fa-address-book"></i>Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="calender"><i class="far fa-copy"></i>Calender</a>
            </li>
        </ul>
        {{-- @include('layouts.buttonLightAndDark') --}}

    </div>

</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        function activateNavItem(target) {
            $('#navbarSupportedContent ul li').removeClass("active");
            target.parent().addClass('active');

            var activeWidth = target.innerHeight();
            var itemPosTop = target.position();
            var itemPosLeft = target.position();

            $(".hori-selector").css({
                "top": itemPosTop.top + "px",
                "left": itemPosLeft.left + "px",
                "height": activeWidth + "px",
                "width": target.innerWidth() + "px"
            });
        }

        // Initial setup for the current page
        var path = window.location.pathname.split("/").pop();
        if (path == '') {
            path = 'index.html';
        }
        var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
        activateNavItem(target);

        // Handle navigation click
        $("#navbarSupportedContent").on("click", "li", function(e) {
            e.preventDefault();
            var target = $(this).find('a');
            activateNavItem(target);
            window.location.href = target.attr('href');
        });

        // Responsive behavior
        function test() {
            // Your existing test function code
        }

        $(window).on('resize', function() {
                clearTimeout(this.id);
                this.id = setTimeout(function() {
                    test();
                }, 100);
            });

        $(window).on('resize', function() {
            setTimeout(function() {
                test();
            }, 100);
        });

        $(".navbar-toggler").click(function() {
            $(".navbar-collapse").slideToggle(300);
            setTimeout(function() {
                test();
            });
        });
    });
</script>
    