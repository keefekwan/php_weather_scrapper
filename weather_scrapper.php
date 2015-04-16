<?php

$city = $_GET['city'];
$city = ucwords($city); //formats upper case first letter in a sentence
$city = str_replace(" ", "-", $city); //removes spaces

$url = 'http://www.weather-forecast.com/locations/'. $city . '/forecasts/latest';

## Using CURL as an alternative to file_get_contents which is disabled for security reasons
function curl_get_contents($url)
{
    $ch = curl_init();
    $timeout = 5;

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

    $data = curl_exec($ch);

    curl_close($ch);

    return $data;
}

$contents = curl_get_contents($url);

## Preg_match: (.*?)returns missing bit of source code that can be uniquely identified, make sure to take out slashes with backslashes, and in the second bit of /a/i , the "i" is single line and "s" is a multi-line check.

preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</i', $contents, $matches);

## Displays entire array
//print_r($matches);

## Use conditional to only show matches if there are matches
if ($matches) {
    echo $matches[1];
}