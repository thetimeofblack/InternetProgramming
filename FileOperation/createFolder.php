<?php
/**
 * Created by PhpStorm.
 * User: 11914
 * Date: 2018/12/6
* Time: 19:04
*/


        $dir = "Project folder" ;
        $dir2 = "Project folder/Subfolder1";
        $dir3 = "Project folder/Subfolder2" ;
        $dir4 = "Project folder/Subfolder1/SF1";
        $dir5 = "Project folder/Subfolder2/SF2";

       if(!is_dir($dir)) mkdir($dir ,0700);
       if(!is_dir($dir2))mkdir($dir2 ,0700);
       if(!is_dir($dir3))mkdir($dir3, 0700);
       if(!is_dir($dir4))mkdir($dir4, 0700);
       if(!is_dir($dir5))mkdir($dir5, 0700);
       for($i = 0 ; $i<10 ; $i++) {
       $dir6 = "Project folder/Subfolder2/SF2/sleep".strval($i) .".txt" ;
       echo $dir6;
       fopen($dir6,"w",0700);
       }
?>