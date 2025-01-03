<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['string'])) {
    $input = $_POST['string'];
    $input = str_split($input);
    $frecuency = array();
    foreach($input as $value){
        if(isset($frecuency[$value])){
            $frecuency[$value]++;
        } else {
            $frecuency[$value] = 1;
        }
    }
    echo json_encode($frecuency);
} else{
    echo "No input was sent";
}
?>