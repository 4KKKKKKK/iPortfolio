<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none">
    <i class="icofont-navigation-menu"></i>
</button>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
        <img src="/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
        <div class="social-links mt-3 text-center">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        </div>

        <nav class="nav-menu">
        <ul>
            <li class="{{ $page==='fact' ? "active" : "" }}"><a href={{ route('fact') }}><i class="bx bx-home"></i> <span>Fact</span></a></li>
            <li class="{{ $page==='personne' ? "active" : "" }}"><a href={{ route('personne') }}><i class="bx bx-user"></i> <span>Personne</span></a></li>
            <li class="{{ $page==='portofolio' ? "active" : "" }}"><a href={{ route('portofolio') }}><i class="bx bx-file-blank"></i> <span>Portfolio</span></a></li>
            <li class="{{ $page==='service' ? "active" : "" }}"><a href={{ route('service') }}><i class="bx bx-book-content"></i> Services</a></li>
            <li class="{{ $page==='skil' ? "active" : "" }}"><a href={{ route('skil') }}><i class="bx bx-server"></i> Skills</a></li>
            <li><a class="border-top pt-5 border-dark" href="/"><i class="bx bx-home"></i> Front</a></li>
        </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bx bx-home"></i></button>

    </div>
</header><!-- End Header -->
