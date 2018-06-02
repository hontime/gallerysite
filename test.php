<?php
            function main(){
                    for($i=0;$i<2;$i++){
                    echo "<div class='row'>";
                            for($e=0; $e<4;$e++){
                            echo "<div class='col'>";
                            echo "<img src=rop()>";
                            echo "</div>";
                            }
                    echo "</div>";
                    }
            }

            function rop(){
                    $dir ='D:\Bitnami\wampstack-7.1.15-0\apache2\htdocs\img\spring';
                    $dirhandler = opendir($dir);
                    $files = array();
                    while(($file=readdir($dirhandler))!==false){
                            if($file=='.' || $file=='..'){
                                continue;
                            }
                            else{
                                $files[]=$file;
                                $cont = count($files);
                            }
                    }
                    closedir($dirhandler);
                    $i=0;
                    $path="img/spring/";
                    $len = $path.$files[$i];
                    $i+=1;
                    return $len;
            }
?>


   function main(){
                var i,o,c;
                for(i=0; i<2;i++){
                    document.write("<div class='row'>");
                    for(o=0; o<4;o++){
                        document.write("<div class='col'>");
                        document.write("<img id ='image' > src='<?php main2();?>'");
                        document.write("</div>");
                    }
                    document.write("</div>");
                }
    }