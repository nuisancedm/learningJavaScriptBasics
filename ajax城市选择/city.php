<?php
    $province=$_REQUEST["provinceValue"];
    if($province=="山东省"){
        echo "青岛市，济南市，威海市，临沂市";
    }
    else if($province=="浙江省"){
        echo "温州市，杭州市，绍兴市，宁波市";
    }
    else if($province=="江苏省"){
        echo "南京市，苏州市，连云港市，无锡市";
    }
    else if($province=="河北省"){
        echo "石家庄市，承德市，唐山市，葫芦岛市";
    }
?>
