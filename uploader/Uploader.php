<?php

namespace Uploader;

class Uploader
{
    public function uploader($file_name, $file_type, $file_name_posted, $url)
    {
        $ch = curl_init();
        $file_curl = curl_file_create($file_name, $file_type, $file_name_posted);
        $file_curl = [$file_name_posted => $file_curl];
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $file_curl);
        $ch_exec = curl_exec($ch);
        curl_close($ch);
        return ($ch_exec) ? true : false;
    }
}