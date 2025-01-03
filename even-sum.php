<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['even'])) {
    $input = $_POST['even'];
    $input = explode(',', $input);
    $sum = 0;

   foreach($input as $value){
    if($value %2 == 0){
        $sum += $value;
    }
   }
    echo $sum;
    echo print_r($input);
} else{
    echo "No input was sent";
}
?>