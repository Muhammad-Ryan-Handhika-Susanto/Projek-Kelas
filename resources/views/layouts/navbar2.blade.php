{{-- Dashboard Start --}}
<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="asset/img/rh.png" alt="logo">
            </span>

            <div class="text header-text">
                <span class="name">Ryan Handhika</span>
                <span class="profession">Web Developer</span>
            </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i> 
    </header>

    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                <i class='bx bx-search icon'></i>
                    <input type="search" name="" id="" placeholder="Search...">
            </li>
            <ul class="menu-links">
                <li class="nav-link">
                    <a href="SD">
                        <i class='bx bxs-data icon' ></i>
                        <span class="text nav-text">Students Data</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-face icon' ></i>
                        <span class="text nav-text">Students Profile</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-trophy icon' ></i>
                        <span class="text nav-text">Rank/Smtr</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-folder icon' ></i>
                        <span class="text nav-text">Homeroom Teacher</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-folder icon' ></i>
                        <span class="text nav-text">PPLG Teachers</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-memory-card icon'></i>
                        <span class="text nav-text">Class Memories</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="https://www.google.com/">
                    <i class='bx bx-log-out icon' ></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>
            <li class="mode">
                <div class="moon-sun">
                    <i class="bx bx-moon icon moon" ></i>
                    <i class="bx bx-sun icon sun"></i>
                </div>
                <span class="mode-text text">Dark Mode</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>

            </li>
        </div>
    </div>
</nav>
{{-- Dashboard End --}}

{{-- Content Start --}}
<section class="home">
    <div class="judul">
    @yield('content')
    </div>
</section>
{{-- Content End --}}

{{-- Link Start --}}
<link rel="stylesheet" href="asset/css/navbar.css">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script src="asset/js/navbar.js"></script>
{{-- Link End --}}