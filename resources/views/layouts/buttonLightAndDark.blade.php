<style>
    .switch_wrapper {
        height: 30px;
        width: 60px;
        border-radius: 150px;
        position: relative;
        transition: 0.5s linear;
        background-color: white;
        box-shadow: #3e3eae40 0px 50px 100px -20px, #2c79b74d 0px 30px 60px -30px,
            #679cd141 -2px -3px 5px 0px inset;
    }

    .switch_btn::before {
        position: absolute;
        inset: 0;
        content: "";
        height: 100%;
        width: 100%;
        border-radius: 150px;
        z-index: 100;
        box-shadow: 0px 0px 10px 5px #ffffff66 inset;
    }

    .switch_btn::after {
        position: absolute;
        content: "";
        height: 20px;
        width: 6px;
        background-color: white;
        border-radius: 80%;
        transform: rotate(39deg);
        right: 12px;
        top: 10px;
        transition: 0.5s linear;
        filter: blur(5px);
    }

    .active .switch_btn::after {
        transform: rotate(39deg);
        right: 10px;
        top: 10px;
    }

    .switch_btn {
        background-color: #d3e8ed;
        height: 25px;
        width: 25px;
        position: absolute;
        left: 4px;
        top: 52%;
        transform: translate(0, -50%);
        border-radius: 50%;
        transition: 0.5s linear;
        box-shadow: #2f84c540 0px 50px 100px -20px, #1d54ba4d 0px 30px 60px -30px,
            #3b758441 0px -1px 3px 1px;
    }


    .active .switch_btn {
        transform: translate(28px, -50%);
        box-shadow: #2f84c540 0px 50px 100px -20px, #1d54ba4d 0px 30px 60px -30px,
            #3b758441 -1px -3px 3px 1px;
    }

    .day {
        background-color: #5bc7ee;
        transition: 0.5s ease;
        height: 25px;
        width: 25px;
        position: relative;
        top: 50%;
        transform: translate(0, -50%);
        border-radius: 50%;
        overflow: hidden;
    }

    .active .day {
        background-color: #0f1c2d;
        height: 25px;
        width: 25px;
        position: relative;
        top: 50%;
        transform: translate(0, -50%);
        border-radius: 50%;
        overflow: hidden;
    }

    .sun {
        position: relative;
        height: 10px;
        width: 10px;
        top: 38%;
        transform: translate(120%, -120%) scale(0.8);
        background: white;
        opacity: 0.9;
        box-shadow: 0px 0px 40px 17px white;
        border-radius: 50%;
        transition: 0.5s ease;
    }

    .active .sun {
        transform: translate(-0%, -120%) scale(0.8);
        background: beige;
        box-shadow: 0px 0px 20px 1px beige;
    }

    .active .crater {
        position: absolute;
        background-color: #e5e5af;
        border-radius: 50%;
        transform: translate(-50%, -50%);
        box-shadow: 0px 0px 1px 1px #b8b88644 inset;
    }

    .active .crater-1 {
        height: 7px;
        width: 10px;
        top: 20%;
        left: 50%;
    }

    .active .crater-2 {
        height: 5px;
        width: 5px;
        top: 50%;
        left: 20%;
    }

    .active .crater-3 {
        height: 9px;
        width: 11px;
        top: 70%;
        left: 60%;
        box-shadow: none;
    }

    .rays {
        position: relative;
        height: 40px;
        width: 40px;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        transition: 0.5s ease;
    }

    .active .rays {
        opacity: 0;
    }

    .ray-1,
    .ray-2,
    .ray-3,
    .ray-4 {
        position: absolute;
        height: 40px;
        width: 8px;
        transform-origin: center;
        transform: rotate(45deg);
        clip-path: polygon(20% 0%, 40% 0%, 100% 100%, 0% 100%);
        background-color: #ffffff41;
        box-shadow: 0px 2px 10px 2px #ffffff4a inset;
        animation: ray-dim-animation 3s ease-in-out infinite;
    }

    .ray-1 {
        left: 20%;
        top: 10%;
        z-index: 100;
    }

    .ray-2 {
        left: 30%;
        top: 20%;
        transform: rotate(25deg);
        animation-delay: 300ms;
    }

    .ray-3 {
        left: 73%;
        top: 24%;
        transform: rotate(-45deg);
        animation-delay: 1.2s;
    }

    .ray-4 {
        right: 90%;
        top: -10%;
        transform: rotate(95deg);
        animation-delay: 600ms;
    }

    .land {
        position: absolute;
        height: 10px;
        width: 100%;
        background-color: #136d15;
        bottom: 0px;
        transition: 0.5s ease;
    }

    .active .land {
        background-color: #0e4c0f;
    }

    .tree {
        position: relative;
        height: 20px;
        width: 10px;
        bottom: 15px;
        left: 2px;
        transition: 0.5s ease;
    }

    .active .tree {
        left: 30px;
    }

    .tree .stem {
        background-color: brown;
        height: 70%;
        width: 5px;
        position: absolute;
        left: 40%;
        transform: translate(-50%, 0);
        bottom: 0px;
        clip-path: polygon(50% 0%, 0% 100%, 70% 100%);
        z-index: -2;
    }

    .tree .leaves {
        background-color: #268b07;
        height: 0%;
        width: 15px;
        position: relative;
        left: 55%;
        transform: translate(-50%, -40%);

        border-radius: 50%;
        z-index: -1;
    }

    .active .tree .leaves {
        background-color: #20680a;
    }

    .tree .leaves::before {
        position: absolute;
        content: "";
        height: 15px;
        width: 15px;
        background-color: #54aa1e;
        border-radius: 70%;
        bottom: -0px;
        right: 0px;
        box-shadow: -1px -1px 0px 0px #62a538;
    }

    .active .tree .leaves::before {
        background-color: #448c18;
    }

    .tree .leaves::after {
        position: absolute;
        content: "";
        height: 10px;
        width: 10px;
        background-color: #54aa1e;
        border-radius: 70%;
        top: 2px;
        left: 0px;
        box-shadow: 0px 1px 0px 0px #387711;
    }

    .active .tree .leaves::after {
        background-color: #499719;
    }

    .shadow {
        position: absolute;
        height: 6px;
        width: 80%;
        background-color: #122612;
        bottom: -5px;
        border-radius: 50%;
        opacity: 0.5;
        filter: blur(2px);
    }

    .active .shadow {
        left: 10px;
    }

    .tree2 {
        position: absolute;
        bottom: 0px;
        transform: translate(5px, -3px) scale(0.3);
    }

    .tree3 {
        position: absolute;
        bottom: 7px;
        transform: translate(30px, 10px) scale(0.6);
    }

    .wing-1 {
        position: absolute;
        height: 7px;
        width: 7px;
        border-top: 1px solid black;
        border-radius: 50%;
        top: 15px;
        left: 4px;
        transform: rotate(-10deg);
        transform-origin: right;
        animation: wing-flapping-left 0.5s ease-in-out infinite;
    }

    .wing-2 {
        position: absolute;
        height: 7px;
        width: 7px;
        border-top: 1px solid black;
        border-radius: 50%;
        top: 15px;
        left: 10px;
        transform: rotate(10deg);
        transform-origin: left;
        animation: wing-flapping-right 0.5s ease-in-out infinite;
    }

    .bird-2 .wing-1 {
        left: 0px;
        top: 10px;
        height: 5px;
        width: 5px;
    }

    .bird-2 .wing-2 {
        left: 5px;
        top: 10px;
        height: 5px;
        width: 5px;
    }

    .bird {
        position: absolute;
        height: 10px;
        width: 10px;
        top: 0px;
        left: 10px;
    }

    .active .star {
        position: absolute;
        height: 1px;
        width: 1px;
        clip-path: polygon(50% 0%,
                61% 35%,
                98% 35%,
                68% 57%,
                79% 91%,
                50% 70%,
                21% 91%,
                32% 57%,
                2% 35%,
                39% 35%);
        background-color: #fcfc9e;
        right: 40%;
        top: 20%;
        filter: blur(1px);
        animation: star-rotate-scale 6s linear infinite forwards;
        transition: 0.5s ease;
    }

    .active .star-2 {
        height: 4px;
        width: 4px;
        right: 50%;
        top: 10%;
        background-color: #fcfc9e;
        animation-delay: 300ms;
    }

    .active .star-3 {
        height: 3px;
        width: 3px;
        right: 60%;
        top: 30%;
        background-color: #fcfc9e;
        animation-delay: 600ms;
    }

    .active .star-4 {
        height: 2px;
        width: 2px;
        right: 46%;
        top: 25%;
        background-color: #fcfc9e;
        animation-delay: 900ms;
    }

    .active .star-5 {
        height: 2px;
        width: 2px;
        right: 30%;
        top: 10%;
        background-color: #fcfc9e;
        animation-delay: 1200ms;
    }

    .active .star-6 {
        height: 2px;
        width: 2px;
        right: 20%;
        top: 30%;
        background-color: #fcfc9e;
        animation-delay: 1500ms;
    }

    .active .shooting-star {
        position: absolute;
        height: 5px;
        width: 1px;
        left: 100%;
        top: -5%;
        transform: rotate(45deg);
        z-index: -10;
        background: linear-gradient(to top, #ffffffa8, transparent);
        animation: shooting-star-movement 3s cubic-bezier(0.55, 0, 1, 0.45) infinite;
    }

    .active .sh-star-2 {
        height: 5px;
        width: 1px;
        left: 70%;
        top: -15%;
        background: linear-gradient(to top, #ffffffb5, transparent);
    }

    .active .sh-star-3 {
        height: 5px;
        width: 1px;
        left: 80%;
        top: -50%;
        background: linear-gradient(to top, rgba(255, 255, 255, 0.594), transparent);
    }

    @keyframes wing-flapping-right {
        0% {
            transform: rotate(0deg);
        }

        50% {
            transform: rotate(40deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    @keyframes wing-flapping-left {
        0% {
            transform: rotate(0deg);
        }

        50% {
            transform: rotate(-40deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    @keyframes ray-dim-animation {
        0% {
            opacity: 0.9;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 0.9;
        }
    }

    @keyframes star-rotate-scale {
        0% {
            transform: rotate(0deg) scale(1);
        }

        50% {
            transform: rotate(180deg) scale(1.2);
        }

        100% {
            transform: rotate(360deg) scale(1);
        }
    }

    @keyframes shooting-star-movement {
        0% {}

        50% {
            opacity: 1;
        }

        100% {
            opacity: 0;
            transform: rotate(45deg) translate(700%, 700%);
        }
    }

    @keyframes bird-exit {
        0% {
            transform: translate(0, 0);
        }

        100% {
            transform: perspective(50rem) translate(-40px, -10px) scale(1.5) rotate(-45deg);
        }
    }
</style>

<body>
    <div class="switch_wrapper">
        <div class="switch_btn">
            <div class="day">
                <div class="sun">
                    <div class="rays">
                        <div class="ray-1"></div>
                        <div class="ray-2"></div>
                        <div class="ray-3"></div>
                        <div class="ray-4"></div>
                    </div>
                    <div class="crater crater-1"></div>
                    <div class="crater crater-2"></div>
                    <div class="crater crater-3"></div>
                </div>
                <div class="land"></div>
                <div class="tree">
                    <div class="stem"></div>
                    <div class="leaves"></div>
                    <div class="shadow"></div>
                </div>
                <div class="tree tree2">
                    <div class="stem"></div>
                    <div class="leaves"></div>
                    <div class="shadow"></div>
                </div>
                <div class="tree tree3">
                    <div class="stem"></div>
                    <div class="leaves"></div>
                    <div class="shadow"></div>
                </div>
                <div class="bird">
                    <div class="wing-1"></div>
                    <div class="wing-2"></div>
                </div>
                <div class="bird bird-2">
                    <div class="wing-1"></div>
                    <div class="wing-2"></div>
                </div>
                <div class="star star-1"></div>
                <div class="star star-2"></div>
                <div class="star star-3"></div>
                <div class="star star-4"></div>
                <div class="star star-5"></div>
                <div class="star star-6"></div>
                <div class="shooting-star"></div>
                <div class="shooting-star sh-star-2"></div>
                <div class="shooting-star sh-star-3"></div>
            </div>
        </div>
    </div>
</body>
<!-- Add the following script tag after your existing <script> tag -->
    <script>
        const button = document.querySelector(".switch_btn");
        const btnWrapper = document.querySelector(".switch_wrapper");
        const bird = document.querySelectorAll(".bird");
    
        // Function to set the theme in localStorage and update classes
        function setTheme(theme) {
            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark'); // Store the theme in localStorage
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light'); // Store the theme in localStorage
            }
        }
    
        // Toggle theme and button state on button click
        button.addEventListener("click", () => {
            btnWrapper.classList.toggle("active");
            bird.forEach((item) => {
                btnWrapper.classList.contains("active") ?
                    (item.style.animation = "bird-exit 2s ease-in-out forwards") :
                    (item.style.animation = "bird-enter 2s ease-in-out infinite alternate");
            });
    
            // Toggle between dark and light themes and update localStorage
            if (localStorage.getItem('theme') === 'dark') {
                setTheme('light');
            } else {
                setTheme('dark');
            }
        });
    
        // Function to apply the stored theme
        function applyStoredTheme() {
            const storedTheme = localStorage.getItem('theme');
            if (storedTheme === 'dark' || (!storedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                setTheme('dark');
                btnWrapper.classList.add("active"); // Add 'active' class to switch_wrapper
            } else {
                setTheme('light');
                btnWrapper.classList.remove("active"); // Remove 'active' class from switch_wrapper
            }
        }
    
        // Apply the stored theme when the page loads
        applyStoredTheme();
    </script>
