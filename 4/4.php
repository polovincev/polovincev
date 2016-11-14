<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 13/11/2016
 * Time: 01:52
 */

$c = curl_init();
curl_setopt($c, CURLOPT_URL, "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json");
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
$str = curl_exec($c);
curl_close($c);

$arrjson = json_decode($str, true);
echo '<pre>';

foreach ($arrjson as $value) {
    foreach ($value as $value) {
        foreach ($value as $value) {
            echo 'Title: ' . $value[title] . '<br>';
            echo 'Page id: ' . $value[pageid] . '<br>';
        }
    }
}
