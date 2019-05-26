<?php
    $url = 'https://api.ipgeolocation.io/ipgeo?apiKey=a8183a7c1256423ca37a38e69cd17c60&ip=' . $_SERVER['REMOTE_ADDR'];
    $data = file_get_contents($url);
    $pdata = json_decode($data, true);
    $arr = array('loc' => $pdata[city] . ", " . $pdata[country_name], 'isp' => $pdata[isp], 'icon' => $pdata[country_flag]);
    echo json_encode($arr);