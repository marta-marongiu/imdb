<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>IMDb</title>

        <!-- Bootstrap--> 
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        

        <!--additional fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                      <a class="navbar-brand" href="#"><img src="img/logo.jpg" class="img-responsive"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">Celebs & Photos</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right settings">
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
                            <li><a href="#"><img src="img/profpic.png" class="img-responsive"></a></li>
                        </ul>  
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="text-left main-selection">
                <div>
                    <h1>The Martian</h1>
                    <ul class="film-category">
                        <li><a href="#">Adventure</a></li>
                        <li><a href="#">Sci-Fi</a></li>
                        <li><a href="#">Thriller</a></li>
                    </ul>
                    <button class="btn btn-default">Watch Trailer <i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
                </div>
                <div class="save-the-date">
                    <h3>In theaters</h3>
                    <p>15 Oct, 2015 (USA)</p>
                </div>
            </div>

        </header>

        <main class="container options">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="#">In theaters</a></li>
                            <li><a href="#">Coming soon</a></li>
                            <li><a href="#">Charts</a></li>
                            <li><a href="#">TV series</a></li>
                            <li><a href="#">Trailers</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Details</a></li>
                                <li><a href="#">Storyline</a></li>
                                <li><a href="#">Photo & Video</a></li>
                                <li><a href="#">Opinions</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Related items</a></li>
                              </ul>
                            </li>
                            <li><button class="like"><i class="fa fa-star" aria-hidden="true"></i>179</button></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <div class="row">
                <div class="hidden-xs col-sm-2 view-type">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                    <i class="fa fa-th fa-lg" aria-hidden="true"></i>
                </div>
                <div class="col-xs-12 col-sm-6 filter-bar">
                    <img src="img/bar.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-4 search-bar">
                    <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button></span>
                    </div><!-- /input-group -->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 card">
                    <div>
                        <a href="#"><img src="img/madmax.jpg" class="img-responsive poster"></a>
                        <h4>Mad Max: Fury Road</h4>
                        <ul>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Sci-Fi</a></li>
                        </ul>
                        <span><i class="fa fa-heart" aria-hidden="true"></i>8.3</span>
                    </div>    
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class=" card">
                        <a href="#"><img src="img/hunger-games.jpg" class="img-responsive"></a>
                        <h4>The Hunger Games: Mocki...</h4>
                        <ul>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Sci-Fi</a></li>
                            <li><a href="#">Thriller</a></li>
                        </ul>
                        <span><i class="fa fa-heart" aria-hidden="true"></i>6.8</span>
                    </div>    
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class=" card">
                        <a href="#"><img src="img/jurassic.png" class="img-responsive"></a>
                        <h4>Jurassic World</h4>
                        <ul>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Sci-Fi</a></li>
                        </ul>
                        <span><i class="fa fa-heart" aria-hidden="true"></i>7.2</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class=" card">
                        <a href="#"><img src="img/everest.jpg" class="img-responsive"></a>
                        <h4>Everest</h4>
                        <ul>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Drama</a></li>
                            <li><a href="#">Thriller</a></li>
                        </ul>
                        <span><i class="fa fa-heart" aria-hidden="true"></i>7.4</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class=" card">
                        <a href="#"><img src="img/insurgent.jpg" class="img-responsive"></a>
                        <h4>Insurgent</h4>
                        <ul>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Sci-Fi</a></li>
                            <li><a href="#">Thriller</a></li>
                        </ul>
                        <span><i class="fa fa-heart" aria-hidden="true"></i>6.4</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class=" card">
                        <a href="#"><img src="img/sicario.jpg" class="img-responsive"></a>
                        <h4>Sicario</h4>
                        <ul>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Crime</a></li>
                            <li><a href="#">Drama</a></li>
                        </ul>
                        <span><i class="fa fa-heart" aria-hidden="true"></i>8</span>
                    </div>
                </div>
                <div class="text-center scroll">
                    <img src="img/scroll.png">
                </div>                    
            </div>
        </main>

        <footer class="container-fluid">
            <div class="row">
                <div class="col-xs-4 text-left logo-bottom">
                   <img src="img/imdb.png"> 
                </div>
                <div class="col-xs-4 text-center social">
                    <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                    <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
                    <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
                </div>
                <div class="col-xs-4 text-right copyright">
                  <p>1990-2015 IMDB.COM, INC.</p>  
                </div>
            </div>
        </footer>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script> -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>