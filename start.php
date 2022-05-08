<?php

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MyWords - Quiz</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dist/css/style.css">
<style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
            background-color: #0c2e60;
            border-radius: 15px;
        }

        .welcome_text {
            width: 400px;
        }

        .welcome_form {
        }

        .welcome_form input,
        .welcome_form button {
            display: block;
        width: 100%;
        }

        .welcome_form input {
            background-color: transparent;
            color: #fff;
            font-size: 30px;
            text-align: center;
            border: none;
            border-bottom: 1px solid #fff;
            margin-bottom: 15px;
        }

        .welcome_form input:focus {
            outline: none;
        }

        .welcome_form button {
            padding: 20px 0;
            border: none;
            border-radius: 100px;
            background-color: #fff;
            color: #0c2e60;
            font-size: 22px;
            transition: 0.4s all;
        }

        .welcome_form button:hover {
            box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
            cursor: pointer;
        }

        .quiz {
            display: grid;
            grid-template-rows: 60px auto;
            width: 800px;
            height: 500px;
            background-color: #fff;
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.3);
            border-radius: 2px;
        }

        .quiz_header {
            display: flex;
            justify-content: space-between;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            background-color: #fff;
            box-shadow: 0px 2px 5px 1px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }
        .quiz_body {
            padding: 30px 30px;
        }
        
        .quiz_user {
            display: flex;
            align-items: center;
            height: 100%;
            padding-left: 30px;
        }

        .quiz_timer {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100px;
            background-color: #ff7a00;
            color: #fff;
        }
        
        .quiz_body {
            background-color: #ecf0f1;
        }

        .option_group {
            list-style-type: none;
            margin: 30px 0;
        }

        .option {
            display: block;
            width: 300px;
            background-color: #fff;
            margin-bottom: 20px;
            padding: 15px 20px;
            border-radius: 100px;
            border: 2px solid transparent;
            transition: 0.4s all;
        }

        .option:hover {
            cursor: pointer;
            /* background-color: rgba(255, 255, 255, 0.1); */
            border: 2px solid #0c2e60;
            color: #341f97;
        }
        .option.active {
            background-color: #0c2e60;
            color: #fff;
        }
        .btn-next {
            border: none;
            padding: 15px 35px;
            background-color: #0c2e60;
            color: #fff;
            border-radius: 27px;
            transition: 0.4s all;
        }

        .btn-next:hover {
            cursor: pointer;
            background-color: #fff;
            color: #0c2e60;
            box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.1);
        }

        .award_icon {
            display: block;
            font-size: 300px;
            color: #fff;
        }

        .username,
        .userpoints,
        .usertime {
            color: #fff;
            text-align: center;
            margin-top: 15px;
        }

</style>    
</head>

<body>
    <!--::menü::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="img/mywordslogo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Ana Sayfa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="flashcards.php">Flashcards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="start.php">Quiz</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="flashcards.php">Öğrenmeye Başla</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- menü-->

    <!-- quiz-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                 <div class="wrapper">
                    <div class="welcome_text">
                        <form class="welcome_form" name="welcome_form" onsubmit="submitForm(event)">
                            <input type="text" name="name" value="İsminizi giriniz">
                            <button>Quize Başla</button>
                        </form>
                    </div>
                </div>
                <script src="dist/js/start.js"></script>
            </div>
        </div>
    </section>
    <!-- quiz-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Quiz</h2>
                            <p>Quiz bölümünde ki testler ile Öğrendiğiniz kelimeleri daha kolay pekiştireceksiniz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- veri sayıları-->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">10</span>
                        <h4>MyWordste bulunan Soru Sayısı</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                   
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5>Güncel</h5>
                        <h2>Arşiv verilerimiz</h2>
                </div>
            </div>
        </div>
    </section>
    
    <!-- footer-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.php"> <img src="img/mywordslogo.png" alt=""> </a>
                        <p>MyWords, 2020 yılında hayata geçirilen ve gelişmeye devam eden bir İngilizce öğrenme platformudur.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Sosyal Medya</h4>
                        <div class="social_icon">
                            <a href="https://www.facebook.com/mertgaygusuz"> <i class="ti-facebook"></i> </a>
                            <a href="https://tr.linkedin.com/in/mert-gaygusuz-056500161"> <i class="ti-linkedin"></i> </a>
                            <a href="mailto:mertgaygusuz@hotmail.com"> <i class="ti-envelope"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Navigasyon</h4>
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li><a href="index.php">Ana Sayfa</a></li>
                                    <li><a href="flashcards.php">Flashcards</a></li>
                                    <li><a href="start.php">Quiz</a></li>
                                </ul>
                            </div>									
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tüm Hakları saklıdır. | Merga Yazılım </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>