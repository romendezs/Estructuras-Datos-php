<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['asterisks'])) {
    $input = $_POST['asterisks'];
    
    function asteriskPyramid($input){
        for($i = 1; $i <= $input; $i++){
            for($j = 1; $j <= $i; $j++){
                echo "*";
            }
            echo "<br>";
        }
    }

} else{
    echo "No input was sent";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="display: flex; justify-content: center; height: 100vh; text-align: center;">
    <?php asteriskPyramid($input); ?>
    </div>
</body>
</html>