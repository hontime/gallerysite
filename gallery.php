<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="gallery, 사진, 영상, 블로그">
    <meta name="author" content="J.J">
    <meta name="description" content="영상이나 사진을 올리는 개인홈페이지.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="conA">
        <div class="container">
            <h2><a href="index.html">JQuarity</a></h2>
            <p><a href="gallery.php" class="gal">gallery</a></p>
               <div class="navbar">
                   <ul>
                       <li class="dropdown">
                       <a href="" class="dropbtn">봄</a>
                           <div class="dropdown-content">
                               <a href="gallery.php">18.03</a>
                               <a href="">18.04</a>
                               <a href="">18.05</a>
                           </div>
                       </li>
                       <li class="dropdown">
                       <a href="" class="dropbtn">여름</a>
                           <div class="dropdown-content">
                               <a href="summer.php">18.06</a>
                               <a href="">18.07</a>
                               <a href="">18.08</a>
                           </div>
                       </li>
                       <li class="dropdown">
                       <a href="" class="dropbtn">가을</a>
                           <div class="dropdown-content">
                               <a href="">18.09</a>
                               <a href="">18.10</a>
                               <a href="">18.11</a>
                           </div>
                       </li>
                       <li class="dropdown">
                       <a href="" class="dropbtn">겨울</a>
                           <div class="dropdown-content">
                               <a href="">18.12</a>
                               <a href="">18.01</a>
                               <a href="">18.02</a>
                           </div>
                       </li>
                   </ul>
               </div><!--       .navbar end-->
        </div>
    </section>
    
    <section class="conB">
        <div class="container">
            <?php
            rowloop();
            function rowloop(){
                $len = coun();
                for($i=0;$i<3;$i++){
                    print "<div class='row'>";
                    if($i==0){
                        for($s=0; $s<$len;$s++){
                        if($s>=4){
                            continue;
                        }
                        else{
                         $str= dirs($s);
                         print("<div class='col'>");
                         print("<img src='$str'>");
                         print("</div>");
                        }
                            
                        }//for end;
                    }
                    else if($i==1){
                        for($s=0; $s<$len;$s++){
                            if($s>=4 && $s<=7){
                                $str= dirs($s);
                                print("<div class='col'>");
                                print("<img src='$str'>");
                                print("</div>");
                            }
                            else{
                                continue;
                            }
                        }
                    }
                    else if($i==2){
                        for($s=0; $s<$len;$s++){
                            if($s>=8 && $s<=11){
                                $str= dirs($s);
                                print("<div class='col'>");
                                print("<img src='$str'>");
                                print("</div>");
                            }
                            else{
                                continue;
                            }
                        }
                    }
                    print "</div>";
                    }
                }
        
            function dirs($i){
                    $dir ='D:\Bitnami\wampstack-7.1.15-0\apache2\htdocs\img\spring';
                    $dirhandler = opendir($dir);
                    $files = array();
                    $path="img/spring/";
                    while(($file=readdir($dirhandler))!==false){
                            if($file=='.' || $file=='..'){
                                continue;
                            }
                            else{
                                $files[]=$file;
                            }
                    }
                    closedir($dirhandler);
                    $len = $path.$files[$i];
                    return $len;
            }
            function coun(){
            $dir ='D:\Bitnami\wampstack-7.1.15-0\apache2\htdocs\img\spring';
                    $dirhandler = opendir($dir);
                    $files = array();
                    while(($file=readdir($dirhandler))!==false){
                            if($file=='.' || $file=='..'){
                                continue;
                            }
                            else{
                                $files[]=$file;
                                $cou = count($files);
                            }
                    }
                    closedir($dirhandler);
                return $cou;     
            }
    ?>
        </div>
        
        <a href="" class="itemmore">more</a>
        
        <div class="page">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
        </div>
    </section>
    
</body>
</html>