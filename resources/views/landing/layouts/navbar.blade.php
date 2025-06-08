<header class="navbar-landing">
    <div class="container">
        <div class="navbar-head">
            <a href="" class="navbar-logo">
                <img class="nav-logo" src="{{asset('assets/images/Icon.svg')}}" alt="">
            </a>
            <div class="navbar-navs">
                <div class="navbar-nav-list">
                <a href="{{route('homepage')}}" class="navbar-navs-list navbar-link-active" data-target="homepage">Beranda</a>
                <a href="{{route('homepage')}}#cek" class="navbar-navs-list navbar-link" data-target="homepage">Mengapa Kami</a>
                <a href="{{route('homepage')}}#about" class="navbar-navs-list navbar-link" data-target="homepage">Tentang Kami?</a>
                <a href="{{route('homepage')}}#cara-kerja" class="navbar-navs-list navbar-link" data-target="homepage">Cara Kerja</a>
                <a href="{{route('homepage')}}#faq" class="navbar-navs-list navbar-link" data-target="homepage">FAQ</a>
            </div>
        </div>

       
        <div class="navbar-head-mobile">
            <nav class="navbar-mobile">
                <div class="menu-icon" id="menu-toggle">
                    <i class="bi bi-list"></i> <!-- Ikon menu (hamburger) -->
                </div>
            </nav>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <span class="sidebar-title">Beranda</span>
            <span class="back-btn" id="close-sidebar">
                <i class="bi bi-arrow-left"></i>
            </span>
        </div>
        <ul class="menu">
            <li><a href="#cek">Mengapa Kami?</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#cara-kerja">Cara Kerja</a></li>
            <li><a href="#faq">FAQ</a></li>
        </ul>
            </div>
        </div>
    </div>
    </div>

    <!-- <div class="mobile-menu">
        
            </div> -->
</header>
@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.getElementById("menu-toggle");
    const sidebar = document.getElementById("sidebar");
    const closeSidebar = document.getElementById("close-sidebar");

    menuToggle.addEventListener("click", function() {
        sidebar.classList.toggle("show");
    });

    closeSidebar.addEventListener("click", function() {
        sidebar.classList.remove("show");
    });
});

</script>
