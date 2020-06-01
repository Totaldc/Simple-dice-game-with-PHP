<?php


 $pc1 =  rand(1, 6);
$pc2 = rand(1, 6);
$rez1 = $pc1 + $pc2;
$hmn1 = rand(1, 6);
$hmn2 = rand(1,6);
 $rez2 = $hmn1 + $hmn2;

if($rez1 > $rez2){
  $total = $rez1;
    } else $total = $rez2;


 if ($pc1 === 1){
 $roll1 = 'images/dice1.png';
                
} elseif ($pc1 === 2){
 $roll1 = 'images/dice2.png';
                
 }elseif ($pc1 === 3){
  $roll1 = 'images/dice3.png';
                
 } elseif ($pc1 === 4){
 $roll1 = 'images/dice4.png';
                
  } elseif ($pc1 === 5){
  $roll1 = 'images/dice5.png';
                
} elseif ($pc1 === 6){
  $roll1 = 'images/dice6.png';
                
     };
                
 if ($pc2 === 1){
 $roll2 = 'images/dice1.png';
                   
 } elseif ($pc2 === 2){
     $roll2 = 'images/dice2.png';
                 
 }elseif ($pc2 === 3){
  $roll2 = 'images/dice3.png';
                 
} elseif ($pc2 === 4){
  $roll2 = 'images/dice4.png';
                  
} elseif ($pc2 === 5){
    $roll2 = 'images/dice5.png';
                
} elseif ($pc2 === 6){
    $roll2 = 'images/dice6.png';
                 
};
                
                
 if ($hmn1 === 1){
  $roll3 = 'images/dice1.png';
                
} elseif ($hmn1 === 2){
      $roll3 = 'images/dice2.png';
                
}elseif ($hmn1 === 3){
    $roll3 = 'images/dice3.png';
                 
 } elseif ($hmn1 === 4){
    $roll3 = 'images/dice4.png';
                   
  } elseif ($hmn1 === 5){
    $roll3 = 'images/dice5.png';
                       
} elseif ($hmn1 === 6){
     $roll3 = 'images/dice6.png';
 
     };
                
 if ($hmn2 === 1){
                            $roll4 = 'images/dice1.png';
 } elseif ($hmn2 === 2){
     $roll4 = 'images/dice2.png';
                           
 }elseif ($hmn2 === 3){

    $roll4 = 'images/dice3.png';
                          
 } elseif ($hmn2 === 4){

    $roll4 = 'images/dice4.png';
                          
} elseif ($hmn2 === 5){
 
    $roll4 = 'images/dice5.png';
                          
 } elseif ($hmn2 === 6){
 
    $roll4 = 'images/dice6.png';
                        
 };


                        
?>







<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>

<section class="text-center">
<div class="container justify-content-center">
<div class="d-flex justify-content-between">
    <div class="col-4">
        <img src="<?php print $roll1 ?>" alt=""  width="100px" height="100px">
        <img src="<?php print $roll2 ?>" alt=""  width="100px" height="100px">
    </div>
    <div class="col-4">
        <H1>REZULTATAS</H1>
        <H1 class="text-center"><?php print $total?></h1>

    </div>
    <div class="col-4">
    <img src="<?php print $roll3 ?>" alt="" width="100px" height="100px">
    <img src="<?php print $roll4 ?>" alt=""  width="100px" height="100px"> 
    </div>
</div>
</div>
</section>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>

