<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none">
    <i class="icofont-navigation-menu"></i>
</button>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
        <img src="/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        {{-- <h1 class="text-light"><a href="index.html">{{ $personnes[0]->prenom }} {{ $personnes[0]->nom }}</a></h1> --}}
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
            <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
            <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
            <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
            {{-- <li><a class="border-top pt-5 border-dark" href={{ Route('backoffice') }}><i class="bx bx-file-blank"></i>Backoffice</a></li> --}}
        </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- End Header -->
