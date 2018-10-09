
@extends('layouts.app')
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
    <div class="products">
          <?php
              foreach ($Products as $Product) {
                        echo '<div class="card" >';
                            echo '<img class="card-img-top" src='.URL::asset('Assets/Products/Laptop_'.$Product->ProductID.'.jpg').'alt="Card image cap">';
                          echo '<div class="card-body">';
                            echo'<h5 class="card-title">'.$Product->Name.'</h5>';
                            echo'<a class="btn btn-primary addcart" data-id="'.$Product->ProductID.'">Go somewhere</a>';
                            echo'<p class="card-text">'.$Product->Description.'</p>';
                          echo '</div>';
                        echo '</div>';
              }

          ?>
  


<?php 

var_dump(Session::all());

?>
  </div> 



</body>