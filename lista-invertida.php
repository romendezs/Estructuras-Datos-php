<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['reverse'])) {
    $reverse = $_POST['reverse'];
    $reverse = explode(",", $reverse);
    $reverse = array_reverse($reverse);
    $reverse = implode(",", $reverse);
    echo $reverse;
    
} else{
    echo "No input was sent";
}
?>