<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class whatsappGateway extends Controller
{
    public function index($no_hp,$pesan)
    {

        // Pastikan phone menggunakan kode negara atau
        // 62 di depannya untuk Indonesia atau
        // bisa menggunakan 0 jika nomor tujuan Indonesia
        if (substr($no_hp, 0, 1) === '0') {
            # code...
            $nomer = ltrim($no_hp, '0');
        }else{
            $nomer =$no_hp;
        }
        $token = 'eU1h5Yqe4pwAD2Id7Vvt9STJ17Dpxbu8fQQYHa8VyHhgFGUIXU';
        $phone = '62' . $nomer;
        $message = $pesan;
        $url = 'http://nusagateway.com/api/send-message.php';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, array(
            'token'    => $token,
            'phone'     => $phone,
            'message'   => $message,
        ));
        $response = curl_exec($curl);
        curl_close($curl);
    }

    
}
