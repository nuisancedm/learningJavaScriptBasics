<?php   
    $food=$_REQUEST["foodName"];
    if($food=="黄焖鸡"){
        echo "黄焖鸡26一份";
    }else if($food=="麻辣烫"){
        echo "麻辣烫20一份";
    }else{
        echo "我不饿";
    }
