<?php
if (empty($cart)) {
    echo'<li>Cart is empty</li>';
}
else{
    foreach ($cart as $tester) {
        echo '<li>'.$tester.'</li>';
    };
}
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{URL::asset('js/Menu.js')}}"></script>
    <script src="{{URL::asset('js/ajax.js')}}"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
    

</head>
<body>

 <div id="wrapper">
        <div class="overlay"></div>

        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">n
                    <a href="#">
                       Brand
                    </a>
                </li>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">Team</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="https://twitter.com/maridlcrmn">Follow me</a>
                </li>
            </ul>
        </nav>
        
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">

                        <div class="products">

                          <?php
                              foreach ($Products as $Product) {
                                        echo '<div class="card" >';
                                            echo '<img class="card-img-top" src='.URL::asset('Assets/Products/Laptop_'.$Product->ProductID.'.jpg').'alt="Card image cap">';
                                          echo '<div class="card-body">';
                                            echo'<h5 class="card-title">'.$Product->Name.'</h5>';
                                            echo'<a class="btn btn-primary" id="AddToCart" value="'.$Product->ProductID.'">Go somewhere</a>';
                                            echo'<p class="card-text">'.$Product->Description.'</p>';
                                          echo '</div>';
                                        echo '</div>';
                              }

                          ?>
                            </div> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 

var_dump(Session::all());

?>



</body>