    <?php  
    # 展示所有数据  
    # 随机取一条  
    # 墨渊&AE博客  
    $t=file_get_contents(‘https://www.sogou.com/home/data/skinlist’);//获取所有数据  
    $t=json_decode($t,true); //JSON进行解码  
    $arr=array(); //新建一个数组，进行存储  
    foreach ($t[‘skinlib’] as $key => $value) {  
        //循环并将所有数据提  
        $arr=array_merge($arr,$value[‘skins’]);  
    }  
    #随机一条数据  
    //输出图片地址  
    print_r($arr[rand(0, count($arr))][‘bigurl’]);  
    //跳转到图片  
    header(“Location:”.$arr[rand(0, count($arr))][‘bigurl’]);  
    //直接显示图片  
    header(‘content-type:image/jpg;’);  
    echo file_get_contents($arr[rand(0, count($arr))][‘bigurl’]);  
    ?>