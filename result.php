<?php
    if(isset($_POST['submit'])){  
    $tovar1 = $_POST['tovar1'];
    $tovar2 = $_POST['tovar2'];
    $tovar3 = $_POST['tovar3'];
    $price1 = $_POST['price1'];
    $price2 = $_POST['price2'];
    $price3 = $_POST['price3'];
     } 
    if(!is_numeric($tovar1) || !is_numeric($tovar2) || !is_numeric($tovar3) || !is_numeric($price1) || !is_numeric($price2) || !is_numeric($price3)){
     
        $error_result = "Операнды должны быть числами"; // инициализируем переменную с ошибкой
    }
    
    $max = 0;
    $itog1 = $tovar1*$price1;
    $itog2 = $tovar2*$price2;
    $itog3 = $tovar3*$price3;
    if($max<=$itog1){
    $max = $itog1;
    }
    if($max<=$itog2){
    $max = $itog2;
    }
    if($max<=$itog3){
    $max = $itog3;
    }
    $result = $max;
    
    if(isset($error_result)) {
    echo "Ошибка: $error_result";
        }    
    else {
    echo "Result =  $result";
    }
?>          
                     
    
