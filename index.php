<?php
$dir = "./images";
$arr_files = scandir($dir);
for ($i = 0; $i < count($arr_files); $i++) {
    if ($arr_files[$i] != "." && $arr_files[$i] != "..") {
        $month = substr($arr_files[$i], 8, 2);
        if (!is_dir($month)){
        mkdir($month);
        }
        rename("images/".$arr_files[$i], "$month/$arr_files[$i]");
    }
}
