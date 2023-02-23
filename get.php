<?php
    $tobeshown=$_GET['selectedcar'];
    if($tobeshown==1){
        echo "https://th.bing.com/th/id/R.d3990c76eb91117fb4a9bbffefb1d832?rik=yoDFsRTDdo%2fycw&pid=ImgRaw&r=0";
    }else if($tobeshown==2){
        echo "https://th.bing.com/th/id/R.47c3fe2f19030da2c8c397e5198482fb?rik=Hvxrz0nNGMdcrA&pid=ImgRaw&r=0";
    }else{
        echo "https://th.bing.com/th/id/OIP.eGbhREfDZR_WcR3jWHCHRAHaE8?pid=ImgDet&rs=1";
    };
?>