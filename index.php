<!DOCTYPE html>
<html lang="ja">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/stylesheet.css">
    <script src="https://kit.fontawesome.com/1dfa588bb9.js" crossorigin="anonymous"></script>
    <title>Document</title>

</head>

<body>
    <!--１番目-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class=" navbar-brand" href="#"><img src="<?php echo get_template_directory_uri();?>/img/spaicon.svg" alt="" whith="38" height="35">Royal
                SPA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>

            </div>

        </nav>
    </div>
    <!--カルーセル-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner text-center">
            <!--カルーセル１-->
            <div class="carousel-item active top_image1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <!--カルーセル2-->
            <div class="carousel-item top_image2">
            </div>
            <div class="carousel-item top_image3">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--エンドカルーセル-->




    <!--上から２番め-->
    <div class="containar">
        <div class="row">
            <div class="col-md-12">
                <div class="icon-box text-center">
                    <img src="<?php echo get_template_directory_uri();?>/img/woman.jpg" alt="">
                    <h4>Civil Litigation</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident incidut<br>
                        velit, ipsa consequuntur quaerat a possimus repellat corporis minima. Vero<br>
                        a atque dolorum deleniti quos!. </p>
                    <button class="button-outline">Read More</button>

                </div>

            </div>
        </div>
    </div>

    <!--３番目-->
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="news">
                    <h2 class="md-0">What Do You Need?</h2>
                    <p class="letter-space-5">LOREM IPSUM DOLOR.</p>
                    <img src="<?php echo get_template_directory_uri();?>/img/kaigara.jpg" alt="">
                </div>
            </div>

            <div class="col-md-7">
                <div class="text-icon">
                    <img src="<?php echo get_template_directory_uri();?>/img/前面オブジェクトで型抜き 1.jpg" alt="" width="90" height="90"></li>
                    <p class="small">ANYI AGING</p>
                    <img src="<?php echo get_template_directory_uri();?>/img/前面オブジェクトで型抜き 2.jpg" alt="" width="90" height="90">
                    <p class="small">RELAXATION</p>
                    <img src="<?php echo get_template_directory_uri();?>/img/前面オブジェクトで型抜き 3.jpg" alt="" width="90" height="90">
                    <p class="small">DECOR SET</p>
                    <img src="<?php echo get_template_directory_uri();?>/img/前面オブジェクトで型抜き 4.jpg" alt="" width="90" height="90">
                    <p class="small">DETOXIFICATION</p>
                </div>
                <div class="text-letter">
                    <h2>HIC UNDE IMPEDIT</h2>
                    <span class="font-28 letter-space-4">cum commodi</span>
                    <p>Lorem ipsum dolor sit amet, consectetur&emsp;&emsp;&emsp;Lorem isum dolor sitamet,consectetur<br>
                        adipisicing elit. Amet minus insto,&emsp;&emsp;&emsp;&emsp;&emsp;radipisicing elit.Commodquisam
                        optio<br>
                        possimus enim nats iure inventore, sunt.&emsp;&emsp;voluptates quem rem reiciendis sit<br>
                        Minima,possimus id sint exercitationsem&emsp;&emsp;&Eacute;dignissimos molitia aut, diatinctio
                        ea<br>
                        invautore nihil! Incidunt laudantiium ea in&emsp;&emsp;&emsp;veniam at vitea cupiditate et
                        consequuntur,<br>
                        excepturi preasentiunm explicabo aperiam!&emsp;&emsp;&emsp;voluptatem tunetur itaque
                        ratione.<br>
                        itaque aperiam commodi distinctio,porro&emsp;&emsp;&emsp;&emsp;Voluptate dolorum,<br>
                        error doloribus at?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;cupiditate explicabo sit
                        iste qui.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--4番目-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center px-0">
                <div class="section-title">
                    <h2>Pricing Table</h2>
                    <p class="subtitle font-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatea,
                        quasi!<br>
                        Beatae quidem modi mollitia exolicabo.
                    </p>
                    <img src="<?php echo get_template_directory_uri();?>/img/shopping-bag-solid.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--5番目-->
    <div class="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center my-5">
                    <div class="card border-0" style="width: 25rem;">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/img/tyler-nix-fwerhCFalbc-unsplash.jpg" alt="エステ画像" width="100%"
                            height="260">
                        <div class="card-img-overlay">
                            <h3 class="font-20  text-white text-uppercase">Silver</h3>
                            <h4 class="card-text text-white">50$<br>month</h4>
                        </div>
                        <p class="card-text2">Full Body Massage<br>
                            Deep Tissue Massage<br>
                            Hot Stone Massage<br>
                            Body Polish (1 hr)
                        </p>
                        <a href="#" class="btn btn-primary border-0">Purchase</a>
                    </div>
                </div>
                <div class="col-md-4 text-center my-5">
                    <div class="card border-0" style="width: 25rem;">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/img/head-650878_1280.jpg" alt="エステ画像" width="100%" height="260">
                        <div class="card-img-overlay">
                            <h3 class="text-white text-uppercase">GOLD</h3>
                            <h4 class="card-text text-white">70$<br>month</h4>
                        </div>
                        <p class="card-text2">Full Body Massage<br>
                            Deep Tissue Massage<br>
                            Hot Stone Massage<br>
                            Body Polish (1 hr)
                        </p>
                        <a href="#" class="btn btn-danger border-0">Purchase</a>
                    </div>
                </div>
                <div class="col-md-4 text-center my-5">
                    <div class="card border-0" style="width: 25rem;">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/img/wellness-285587_1280.jpg" alt="エステ画像" width="100%"
                            height="260">
                        <div class="card-img-overlay">
                            <h3 class="text-white text-uppercase">DIAMOND</h3>
                            <h4 class="card-text text-white">90$<br>month</h4>
                        </div>
                        <p class="card-text2">Full Body Massage<br>
                            Deep Tissue Massage<br>
                            Hot Stone Massage<br>
                            Body Polish (1 hr)
                        </p>
                        <a href="#" class="btn btn-warning border-0">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--6番目-->
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 text-center mb-5 px-0">
                <div class="section-title bg-white">
                    <h2>Amazing Services</h2>
                    <p class="subtitle font-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatea,
                        quasi!<br>
                        Beatae quidem modi mollitia exolicabo.
                    </p>
                    <img src="<?php echo get_template_directory_uri();?>/img/shopping-bag-solid.jpg" alt="">
                </div>

            </div>
        </div>
    </div>
    <!--7番目-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 px-0 mb-5">
                <div class="bg-items">
                    <div class="bg-items_text text-center yellow">
                        <img src="<?php echo get_template_directory_uri();?>/img/bath.jpg " alt="" width="70" height="70">
                        <h5>AMET MINUS NATUS</h5>
                        <h6>QUASI BEATAE QUIDEM</h6>
                        <p class="font-10">Lorem ipsum dolor sit amet, consectetur<br>
                            adipisicing elit. Quos,corrupiipsa. Dolore<br>
                            minima quod sunt evenit</p>
                        <a href="#" class="btn btn-colored">Read More</a>
                    </div>
                    <div class="bg-items_text text-center blue">
                        <img src="<?php echo get_template_directory_uri();?>/img/candle1.jpg" alt="" width="70" height="70">
                        <h5>AMET MINUS NATUS</h5>
                        <h6>QUASI BEATAE QUIDEM</h6>
                        <p class="font-10">Lorem ipsum dolor sit amet, consectetur<br>
                            adipisicing elit. Quos,corrupiipsa. Dolore<br>
                            minima quod sunt evenit</p>
                        <a href="#" class="btn btn-colored">Read More</a>
                    </div>

                </div>
            </div>
            <div class="col-md-4 px-0">
                <div class="bg-items">
                    <div class="bg-items_text text-center pink">
                        <img src="<?php echo get_template_directory_uri();?>/img/hat.jpg" alt="" width="70" height="70">
                        <h5>AMET MINUS NATUS</h5>
                        <h6>QUASI BEATAE QUIDEM</h6>
                        <p class="font-10">Lorem ipsum dolor sit amet, consectetur<br>
                            adipisicing elit. Quos,corrupiipsa. Dolore<br>
                            minima quod sunt evenit</p>
                        <a href="#" class="btn btn-colored">Read More</a>
                    </div>
                    <div class="bg-items_text text-center yellow">
                        <img src="<?php echo get_template_directory_uri();?>/img/glass.jpg" alt="" width="70" height="70">
                        <h5>AMET MINUS NATUS</h5>
                        <h6>QUASI BEATAE QUIDEM</h6>
                        <p class="font-10">Lorem ipsum dolor sit amet, consectetur<br>
                            adipisicing elit. Quos,corrupiipsa. Dolore<br>
                            minima quod sunt evenit</p>
                        <a href="#" class="btn btn-colored">Read More</a>
                    </div>

                </div>

            </div>
            <div class="col-md-4 px-0">
                <div class="bg-items_text text-center pink">
                    <img src="<?php echo get_template_directory_uri();?>/img/robot.jpg" alt="" width="70" height="70">
                    <h5>AMET MINUS NATUS</h5>
                    <h6>QUASI BEATAE QUIDEM</h6>
                    <p class="font-10">Lorem ipsum dolor sit amet, consectetur<br>
                        adipisicing elit. Quos,corrupiipsa. Dolore<br>
                        minima quod sunt evenit</p>
                    <a href="#" class="btn btn-colored">Read More</a>
                </div>
                <div class="bg-items_text text-center blue">
                    <img src="<?php echo get_template_directory_uri();?>/img/paper.jpg" alt="" width="70" height="70">
                    <h5>AMET MINUS NATUS</h5>
                    <h6>QUASI BEATAE QUIDEM</h6>
                    <p class="font-10">Lorem ipsum dolor sit amet, consectetur<br>
                        adipisicing elit. Quos,corrupiipsa. Dolore<br>
                        minima quod sunt evenit</p>
                    <a href="#" class="btn btn-colored">Read More</a>
                </div>

            </div>
        </div>
    </div>
    <!--8番目-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="schedule-image" height="400">
                    <img src="<?php echo get_template_directory_uri();?>/img/interior-2685521_1920.jpg" class="img-responsive " alt="" width="960" height="400">
                </div>
            </div>
            <div class="col-md-6 px-0">

                <div class="schedule yellow">
                    <h2>OPENING HOURS</h2>
                    <ul class="list-unstyled font-15 ">
                        <li class="text-center pb-1">Monday - Friday</li>
                        <li>9.00 - 20.00</li>
                        <li class="text-center pb-1">Saturday</li>
                        <li>10:00 - 16:00</li>
                        <li class="text-center pb-1">Sunday</li>
                        <li>9:30 - 11:00</li>
                        <li class="text-center pb-1">Emergency Services</li>
                        <li>24 hours Open</li>
                        <a href="#" class="btn btn-colored no-boder hover-bg-1 btn-dark">Contact&nbsp;us</a>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--9番目-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="section-title text-center">
                    <h2>Our Gallery</h2>
                    <p class="subtitle font-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Beatae, quasi!
                        Beatae quidem modi mollitia explicabo.</p>
                    <img src="<?php echo get_template_directory_uri();?>/img/shopping-bag-solid.jpg" alt="">
                </div>

            </div>
        </div>
    </div>
    <!--10番目-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 px-0">
                <div class="item-photo">
                    <img class="photo mb-2" src="<?php echo get_template_directory_uri();?>/img/col31.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/img/col32.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3 px-0">
                <div class="item-photo">
                    <img class="photo mb-2" src="<?php echo get_template_directory_uri();?>/img/col33.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/img/col34.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3 px-0">
                <div class="item-photo">
                    <img class="photo mb-2" src="<?php echo get_template_directory_uri();?>/img/col35.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/img/col36.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3 px-0 mb-5">
                <div class="item-photo">
                    <img class="photo mb-2" src="<?php echo get_template_directory_uri();?>/img/col37.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/img/col38.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--11番目-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="section-title text-center bg-white">
                    <h2>Latest News</h2>
                    <p class="subtitle font-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae,
                        quasi!<br>
                        Beatae quidem modi mollitia explicabo.
                    </p>
                    <img src="<?php echo get_template_directory_uri();?>/img/shopping-bag-solid.jpg" alt="">
                </div>

            </div>
        </div>
    </div>
    <!--12番目-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="diary-item">
                    <img class="item_1" src="<?php echo get_template_directory_uri();?>/img/12spa.jpg" alt="スパ画像">
                    <img class="item_2" src="<?php echo get_template_directory_uri();?>/img/robot.jpg" alt="">
                    <h1 class="diary-title">05</h1>
                    <h6 class="diary-title">NOV</h6>
                    <h3>A movie about the Apollo<br>spacesuits</h3>
                    <img class="diary-icon" src="<?php echo get_template_directory_uri();?>/img/icon1.jpg" alt="">
                    <span>By Crumia</span>
                    <img class="diary-icon ml-0" src="<?php echo get_template_directory_uri();?>/img/icon2.jpg" alt="">
                    <span>100 comments</span>
                    <p class="diary-title">Lorem ipsum dolor sit ament, consectetur adipiscing elit,sed do eiusmod<br>
                        tempor inchididunt ut labore et dolore magna et sed alique. Ut enim ad minim<br>
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliqup ex ea<br>
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit<br>
                        esse cillum dolore eu fugiat nulla pariatur.</p>
                    <a href="#" class="btn btn-secondary">Read More</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="diary-item">
                    <img class="item_1" src="<?php echo get_template_directory_uri();?>/img/12spa2.jpg" alt="スパ画像">
                    <img class="item_2" src="<?php echo get_template_directory_uri();?>/img/robot.jpg" alt="">
                    <h1 class="diary-title">05</h1>
                    <h6 class="diary-title">NOV</h6>
                    <h3>A movie about the Apollo<br>spacesuits</h3>
                    <img class="diary-icon" src="<?php echo get_template_directory_uri();?>/img/icon1.jpg" alt="">
                    <span>By Crumia</span>
                    <img class="diary-icon ml-0" src="<?php echo get_template_directory_uri();?>/img/icon2.jpg" alt="">
                    <span>100 comments</span>
                    <p class="diary-title">Lorem ipsum dolor sit ament, consectetur adipiscing elit,sed do eiusmod<br>
                        tempor inchididunt ut labore et dolore magna et sed alique. Ut enim ad minim<br>
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliqup ex ea<br>
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit<br>
                        esse cillum dolore eu fugiat nulla pariatur.</p>
                    <a href="#" class="btn btn-secondary">Read More</a>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <!--13番目-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5 mb-5">
                <div class="diary_last">
                    <img src="<?php echo get_template_directory_uri();?>/img/icon3.jpg" alt="">
                    <a href="#" class="btn no-border rounded-0">View all</a>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <footer class="footer bg-dark">
        <div class=" container">
            <div class="row">
                <div class="col-md-3 mt-5">
                    <div class="action-icon">
                        <h4 class="title_last border-bottom border-info" style=" padding: 5px; width: 80px;">LOCATION
                        </h4>
                        <a href="#">
                            <i class="fas fa-map-marker-alt">121 King Street</i>
                        </a>

                        <a href="#">
                            <i class="fas fa-phone-alt">+262 695 2601</i>
                        </a>
                        <a href="#">
                            <i class="fas fa-user-alt">you@yourdomain.com</i>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 mt-5">
                    <div class="action-icon">
                        <h4 class="title_last border-bottom border-info" style=" padding: 5px; width: 80px;">TAGS</h4>
                        <div class="category">
                            <a href="#">beauty</a>
                            <a href="#">face</a>
                            <a href="#">hair cut</a>
                            <a href="#">skin care</a>
                            <a href="#">style</a>
                            <a href="#">hair beauty</a>
                            <a href="#">massage</a>
                            <a href="#">waxing</a>
                            <a href="#">pedicures</a>
                            <a href="#">manicures</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mt-5">
                    <div class="action-icon">
                        <h4 class="title_last border-bottom border-info" style=" padding: 5px; width: 80px;">PAGES
                        </h4>
                        <ul class="category2 px-0" style="list-style: none;">
                            <li><a href="#" class="text-decoration-none">Delivery Information</a></li>
                            <li><a href="#" class="text-decoration-none">Privacy Policy</a></li>
                            <li><a href="#" class="text-decoration-none">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 mt-5 mb-5">
                    <div class="action-icon">
                        <h4 class="title_last border-bottom border-info" style=" padding: 5px; width: 80px;">PROMOTIONS
                        </h4>
                        <img src="<?php echo get_template_directory_uri();?>/img/sale.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="end">
                        <h3 class=" text-center text-white">Tel: 800-2345-6789</h3>
                        <h5 class="text-center">MY COMPANY 4578 MARMORA ROAD, GLASGOW DO4 89GR </h5>
                        <div class="icon_end text-center">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-google-plus-g"></i>

                            <p class="mt-3">Copyright @2015 ThemeMascot. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

</body>

</html>