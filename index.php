<?php

$get = array(
    'api_key'  => '*************',
    'q' => 'php',
    'limit' => '1',
    'offset' => '0',
//    'rating' => 'g',
//    'lang' => 'en',
//    'random_id' => '***************',
//    'bundle' => 'messaging_non_clips',
);

$ch = curl_init('api.giphy.com/v1/gifs/search?' . http_build_query($get));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$html = curl_exec($ch);
curl_close($ch);

// $html = unserialize($html);
$decodedResponse = json_decode($html, true);

/*
 * в нутри $decodedResponse['data'][0]['images']
 * original Array
        downsized Array
        downsized_large Array
        downsized_medium Array
        downsized_small Array
        downsized_still Array
        fixed_height Array
        fixed_height_downsampled Array
        fixed_height_small Array
        fixed_height_small_still Array
        fixed_height_still Array
        fixed_width Array
        fixed_width_downsampled Array
        fixed_width_small Array
        fixed_width_small_still Array
        fixed_width_still Array
        looping Array
        original_still Array
        original_mp4 Array
        preview Array
        preview_gif Array
        preview_webp Array
        hd Array
        480w_still Array
 */

//foreach ($decodedResponse['data'][0]['images']as $key => $dataArr){
//    echo $key . "      " .$dataArr. "<br>";
//}


//вывод
?>
<img src="<?=$decodedResponse['data'][0]['images']['downsized_medium']['url']?>">
