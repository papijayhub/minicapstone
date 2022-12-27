<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- <html lang="en" class="no-js"> --}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minicapstone</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link href="{{asset('landing/css/style.css')}}" rel="stylesheet" />
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<a href="#">
								<img class="header-logo-image" src="{{asset('image/logo.svg')}}" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Mater Dei College Online Yearbook</h1>
	                        <p class="hero-paragraph">This is dedicated for minicapstone project.</p>
                            @if (Route::has('login'))
	                        <div class="hero-cta">
                                @auth
                                <a class="button button-primary" href="{{ url('/home') }}">Home</a>
                                @else
                                <a class="button button-primary" href="{{ route('login') }}">Login</a>
                                @if (Route::has('register'))
                                <a class="button" href="{{ route('register') }}">Register</a>
                                @endif
                                @endauth
                            </div>
                            @endif


						</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
					<div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img style="width: 110px" src="{{asset('image/cast.png')}}" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24">CAST</h4>
                                    <p class="text-sm mb-0">Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. A arcu cursus vitae congue mauris. Nam at lectus urna duis convallis. Mauris rhoncus aenean vel elit scelerisque mauris.</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img style="width: 110px" src="{{asset('image/cabm-h.jpg')}}" alt="Feature 02">
                                    </div>
                                    <h4 class="feature-title mt-24">CABM-H</h4>
                                    <p class="text-sm mb-0">Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. A arcu cursus vitae congue mauris. Nam at lectus urna duis convallis. Mauris rhoncus aenean vel elit scelerisque mauris.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img style="width: 110px" src="{{asset('image/nursing.jpg')}}" alt="Feature 03">
                                    </div>
                                    <h4 class="feature-title mt-24">CON</h4>
                                    <p class="text-sm mb-0">Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. A arcu cursus vitae congue mauris. Nam at lectus urna duis convallis. Mauris rhoncus aenean vel elit scelerisque mauris.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img style="width: 110px" src="{{asset('image/coe.jpg')}}" alt="Feature 04">
                                    </div>
                                    <h4 class="feature-title mt-24">COE</h4>
                                    <p class="text-sm mb-0">Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. A arcu cursus vitae congue mauris. Nam at lectus urna duis convallis. Mauris rhoncus aenean vel elit scelerisque mauris.</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img style="width: 110px" src="{{asset('image/cabm.jpg')}}" alt="Feature 05">
                                    </div>
                                    <h4 class="feature-title mt-24">CABM-B</h4>
                                    <p class="text-sm mb-0">Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. A arcu cursus vitae congue mauris. Nam at lectus urna duis convallis. Mauris rhoncus aenean vel elit scelerisque mauris.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img style="width: 110px" src="{{asset('image/ccj.jpg')}}" alt="Feature 06">
                                    </div>
                                    <h4 class="feature-title mt-24">CCJ</h4>
                                    <p class="text-sm mb-0">Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. A arcu cursus vitae congue mauris. Nam at lectus urna duis convallis. Mauris rhoncus aenean vel elit scelerisque mauris.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           

			
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner" style="justify-content: center;">
                    {{-- <div class="brand footer-brand">
						<a href="#">
							<img class="header-logo-image" src="{{asset('image/logo.svg')}}" alt="Logo">
						</a>
                    </div> --}}
                    
                    <div class="footer-copyright" style="justify-content: center;">&copy; Jay Calamba, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{asset('landing/js/main.min.js')}}"></script>
</body>
</html>
