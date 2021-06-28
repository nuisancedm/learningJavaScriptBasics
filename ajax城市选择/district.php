<?php
    $city=$_REQUEST["cityValue"];
    if($city=="苏州市"){
        echo "新区，园区，虎丘区，吴中区";
    }
    else if($city=="南京市"){
        echo "浦口区，玄武区，鼓楼区，建邺区";
    }
    else if($city=="杭州市"){
        echo "上城区，下城区，江干区，西湖区";
    }
    else if($city=="宁波市"){
        echo "江北区，北仑区，镇海区，奉化区";
    }
?>
