<?php
$anime_array = glob("pic/anime/*.{jpg,png}",GLOB_BRACE);
$landscape_array = glob("pic/landscape/*.{jpg,png}",GLOB_BRACE);
$source = $_GET['source'];
$anime = 'anime';
$landscape = 'landscape';

if(strcmp($source,$anime)  == 0) 
{
	$loc = array_rand($anime_array);
	$img = $anime_array[$loc];
	

}
else if(strcmp($landscape,$source)== 0) 
{
	$loc = array_rand($landscape_array);
	$img = $landscape_array[$loc];

}
else {
	$pic_array = array_merge($anime_array,$landscape_array);
	$loc = array_rand($pic_array);
        $img = $pic_array[$loc];
}


header("Location:".$img);
