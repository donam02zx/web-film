<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/css/main.css">
    <!-- link swiper css -->
    <link rel="stylesheet" href="./asset/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./asset/fonts/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <!--Header-->
    <header>
        <!--Nav-->
        <div class="nav container">
            <!--Logo-->
            <a href="index.html" class="logo">
                Group<span>9</span>
            </a>
            <!--Search Box-->
            <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="Search movie">
                <i class="search-box-icon fa-brands fa-searchengin"></i>
            </div>
            <!--User-->
            <div class="both">
                <a href="#" class="user">
                    <img src="./asset/img/user.jpg" alt="" class="user-img">
                </a>
                <div class="nav-new">
                    <ul class="nav-noti">
                        <li class="nav-noti-list--1">
                            <a href="logout.php" class="nav-noti-link">
                                <span>Log out</span>
                            </a>
                        </li>
                        <li class="nav-noti-list--2">
                            <a href="" class="nav-noti-link">
                                <span>View History</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Navbar -->
            <div class="navbar">
                <a href="#home" class="nav-link nav--active">
                    <i class="nav-link-icon fa-solid fa-house-user"></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#popular" class="nav-link">
                    <i class="nav-link-icon fa-brands fa-hotjar"></i>
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="#movies" class="nav-link">
                    <i class="nav-link-icon fa-brands fa-wpexplorer"></i>
                    <span class="nav-link-title">Explore</span>
                </a>
                <a href="play-page.html" class="nav-link">
                    <i class="nav-link-icon fa-solid fa-film"></i>
                    <span class="nav-link-title">Movie</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class="nav-link-icon fa-solid fa-heart"></i>
                    <span class="nav-link-title">Favourite</span>
                </a>
            </div>
        </div>
    </header>
    <!-- HOME -->
    <section class="home container" id="home">
        <!-- Home image -->
        <img src="./asset/img/home-background.png" alt="" class="home-img">
        <!-- Home text -->
        <div class="home-text">
            <h1 class="home-title">Hitman's Wife's <br>Bodyguard</h1>
            <p>Releasing 10 April</p>
            <a href="#" class="watch-btn">
                <i class="br fa-solid fa-play"></i>
                <span>Watch the trailer</span>
            </a>
        </div>
    </section>
    <!-- Home end -->
    <!-- Popular Section Start -->
    <section class="popular container" id="popular">
        <!-- Heading -->
        <div class="heading">
            <h2 class="heading-title">Popular Movies</h2>
            <!-- Swiper Buttons -->
            <div class="swiper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <!-- Content -->
        <div class="popular-content swiper">
            <div class="swiper-wrapper">
                <!-- Movie box 1 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="./asset/img/movie-1.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Jumanji: Welcome to the Jungle</h2>
                            <span class="movie-type">Action</span>
                            <a href="play-page.html" class="watch-btn play-btn">
                                <i class="br fa-solid fa-play"></i>
                                
                            </a>
                        </div>
                    </div>
                </div>
                 <!-- Movie box 2 -->
                 <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="./asset/img/popular-movie-2.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Jungle Cruise</h2>
                            <span class="movie-type">Action/Adventure</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="br fa-solid fa-play"></i>
                                
                            </a>
                        </div>
                    </div>
                </div>
                 <!-- Movie box 3 -->
                 <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="./asset/img/popular-movie-3.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Loki</h2>
                            <span class="movie-type">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="br fa-solid fa-play"></i>
                                
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movie box 4 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="./asset/img/popular-movie-4.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Squid Game</h2>
                            <span class="movie-type">Action/Drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="br fa-solid fa-play"></i>
                                
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movie box 5 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="./asset/img/popular-movie-5.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">The Falcon and the Winter Soldier</h2>
                            <span class="movie-type">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="br fa-solid fa-play"></i>
                                
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Popular Section End -->
    <!-- Movie Section Start -->
    <section class="movies container" id="movies">
         <!-- Heading -->
         <div class="heading">
            <h2 class="heading-title">Movies and Shows</h2>
        </div>
        <!-- Movies Content -->
        <div class="movies-content">
            <!-- Movies Box 1 -->
            <div class="movie-box">
                <img src="./asset/img/movie-1.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Jumanji: Welcome to the Jungle</h2>
                    <span class="movie-type">Action</span>
                    <a href="play-page.html" class="watch-btn play-btn">
                        <i class="br fa-solid fa-play"></i>
                        
                    </a>
                </div>
            </div>
            <!-- Movies Box 2 -->
            <div class="movie-box">
                <img src="./asset/img/movie-2.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Hitman's Wife's Bodyguard</h2>
                    <span class="movie-type">Action/Comedy</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="br fa-solid fa-play"></i>
                        
                    </a>
                </div>
            </div>
            <!-- Movies Box 3 -->
            <div class="movie-box">
                <img src="./asset/img/movie-3.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Shang-Chi</h2>
                    <span class="movie-type">Action</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="br fa-solid fa-play"></i>
                        
                    </a>
                </div>
            </div>
            <!-- Movies Box 4 -->
            <div class="movie-box">
                <img src="./asset/img/movie-4.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Eternals</h2>
                    <span class="movie-type">Action</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="br fa-solid fa-play"></i>
                        
                    </a>
                </div>
            </div>
            <!-- Movies Box 5 -->
            <div class="movie-box">
                <img src="./asset/img/movie-5.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Spectre</h2>
                    <span class="movie-type">Action</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="br fa-solid fa-play"></i>
                        
                    </a>
                </div>
            </div>
            <!-- Movies Box 6 -->
            <div class="movie-box">
                <img src="./asset/img/movie-6.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Money Heist</h2>
                    <span class="movie-type">Action</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="br fa-solid fa-play"></i>
                        
                    </a>
                </div>
            </div>
            <!-- Movies Box 7 -->
            <div class="movie-box">
                <img src="./asset/img/movie-7.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">The Wolverine</h2>
                    <span class="movie-type">Action</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="br fa-solid fa-play"></i>
                        
                    </a>
                </div>
            </div>
            <!-- Movies Box 8 -->
            <div class="movie-box">
                <img src="./asset/img/movie-8.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Johny English</h2>
                    <span class="movie-type">Action</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="br fa-solid fa-play"></i>
                        
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Movie Section End -->

    <!-- Next-Page -->
    <div class="next-page">
        <a href="#" class="next-btn">Next Page</a>
    </div>

    <!-- Coppyright -->
    <div class="copyright">
        <p>&#169; Đỗ Nam</p>
    </div>


    <!-- Link swiper js -->
    <script src="./swiper-bundle.min.js"></script>
    <!-- Link to js -->
    <script src="./main.js"></script>
</body>
</html>