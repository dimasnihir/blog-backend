<!DOCTYPE html>
<html>

<head>
    <title>DIMA&IHOR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href={{asset("assets/css/style.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/bootstrap.css")}}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<header>
    <div class="header-container">
        <div class="logo">
            <img src="{{asset('assets/pictures/logo.png')}}">
        </div>
        <div class="header__logo">
            <p>duhoot</p>
        </div>
    </div>
    <ul>
        <li><a>Reality</a></li>
        <li><a>Living</a></li>
        <li><a>Education</a></li>
        <li><a>Entertainmemt</a></li>
        <li><a>mobility</a></li>
    </ul>
    <div>
        <button class="search"><i class="fa fa-search"></i></button>
    </div>
    <div>
        <button class="login">
            <i class="fa fa-user-o"></i>LOGIN
        </button>
    </div>
</header>
<main>
    <section class="top-slide">
        <h2>What are you looking for?</h2>
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2">

                </div>
                <div class="col-md-auto">
                    <select class="select_search" name="">
                        <option value="1">Dubai</option>
                        <option value="2">Зеленый</option>
                    </select>
                    <select class="select_search" name="">
                        <option value="1">Education</option>
                        <option value="2">Зеленый</option>
                    </select>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-lg-2">
            </div>
            <div class="col-md-auto">
                <select class="select_to" name="">
                    <option value="1">Keyword,name,date,...</option>
                    <option value="2">Зеленый</option>
                </select>
            </div>
            <div class="col col-lg-2">
            </div>
            <div class="row justify-content-md-center">
                <div class="col col-lg-2">
                </div>
                <div class="col-md-auto">

                    <button class="button_search">SEARCH</button>

                </div>
                <div class="col col-lg-2">
                </div>

            </div>
        </div>
    </section>
</main>
<header>
    <div class="header-container">
        <ul class="main-menu">
            <li><a>Recommended</a></li>
            <li><a>Latest</a></li>
            <li><a>nightlights</a></li>
        </ul>
    </div>
    <div class="low_navbar">
        <select class="select_po" name="">
            <option value="1">Dubai</option>
            <option value="2">Зеленый</option>
        </select>
        <select class="select_po" name="">
            <option value="1">Education</option>
            <option value="2">Зеленый</option>
        </select>
        <ul class="filter-button">
            <li class="li_filter"><button class="filter tey"><i class="fa fa-home"></i></button></li>
            <li class="li_filter"><button class="filter ter"><i class="fa fa-user"></i></button></li>
            <li class="li_filter"><button class="filter ter"><i class="fa fa-graduation-cap"></i></button></li>
            <li class="li_filter"><button class="filter tew"><i class="fa fa-music"></i></button></li>
            <li class="li_filter"><button class="filter tym"><i class="fa fa-subway"></i></button></li>
        </ul>

    </div>

</header>
<div class="container">
    <!-- content -->
    <div class="card-content">
        <div class="container text-center">
            <!-- 4 card -->
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src={{asset("assets/pictures/photo.png")}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src={{asset("assets/pictures/photo.png")}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src={{asset("assets/pictures/photo.png")}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src={{asset("assets/pictures/photo.png")}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- 2 cadr -->
        <div class="container text-center card_2">
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <img src={{asset("assets/pictures/photo_2.jpg")}} class="card-img-top photo_card_2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <img src={{asset("assets/pictures/photo_2.jpg")}} class="card-img-top  photo_card_2 " alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 4 card -->
    <div class="container text-center">

        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src={{asset("assets/pictures/photo.png")}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src={{asset("assets/pictures/photo.png")}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src={{asset("assets/pictures/photo.png")}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src={{asset("assets/pictures/photo.png")}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- 2 card -->
    <div class="container text-center card_2">
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <img src={{asset("assets/pictures/photo_2.jpg")}} class="card-img-top photo_card_2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    <img src={{asset("assets/pictures/photo_2.jpg")}} class="card-img-top  photo_card_2 " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script src="js/bootstrap.js"></script>

</html>
