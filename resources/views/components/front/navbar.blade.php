<header class="header-area">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" height="60px" width="40px">
                        </a>
                        <h3 class="njavike">Njavike Softcom</h3>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#features">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#facts">Why</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#blog">Blog</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <a class="main-btn" data-scroll-nav="0" href="tel:+255 712 828 561">Hire ME!</a>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->
    <x-front.header />
</header>
