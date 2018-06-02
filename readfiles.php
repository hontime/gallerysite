<?php

$dir ='D:\Bitnami\wampstack-7.1.15-0\apache2\htdocs\img\summer';

$dirhandler = opendir($dir);
$files = array();
while(($file=readdir($dirhandler))!==false)
{
        if($file =='.' or $file=='..'){
                continue;
        }
        else{
                $files[] = $file;
        }
}
closedir($dirhandler);

for($i=0;$i<count($files);$i++){
        echo $files[$i];
        echo "<br/>";
}