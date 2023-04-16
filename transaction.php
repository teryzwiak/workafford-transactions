<?php
//echo $_POST['transaction'];
if(isset($_POST['transaction'])){
    foreach($_POST['money'] as $m){
        foreach ($_POST['transaction'] as $t){
            if($m!=0){
            echo $t.$m;
            echo'<br/>';}}

    }
}