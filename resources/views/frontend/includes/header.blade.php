<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top" style="flex-direction: column">
    <div class="container-fluid container-xl d-flex align-items-center" style="color: blue">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-flex-start">
            <a href="#" class="mx-2"><span class="bi-telephone"> (0285) 392219 | </span></a>
            <a href="#" class="mx-2"><span class="bi-"> diskominfo@batangkab.go.id</span></a>
        </div>
        <div class="search-form-wrap js-search-form-wrap">
            <form action="{{ route('searchNewsEnd') }}" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="seacrh news"
                        aria-describedby="button-addon2" name="keyword">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>

                </div>
            </form>
        </div>
    </div>
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Dinas Komunikasi dan Informatika
                Kabupaten Batang</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>

                <a href="#" class="mx-2"><span class="bi-instagram"></span></a>
                <li></li>

                {{-- @foreach ($nav_category as $row)
                    <li><a href="{{ route('detailCategory', $row->slug) }}">{{ $row->name }}</a></li>
                @endforeach --}}
            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative">
            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            {{-- <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="{{ route('searchNewsEnd') }}" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="seacrh news"
                            aria-describedby="button-addon2" name="keyword">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>

                    </div>
                </form>
            </div><!-- End Search Form --> --}}

            @guest
                <a href="/login">Login</a>
            @else
                <a href="/home">Home</a>
            @endguest

        </div>

    </div>

</header><!-- End Header -->
