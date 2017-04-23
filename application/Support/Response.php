<?php

namespace App\Support;

class Response
{
    
    /**
     * @param string $message
     * @param $code
     * @param $status
     * @param null $data
     */
    public static function json($status, $code, $message, $data = null)
    {
        header('Content-type: Application/json');
        $resolved = [
            'status' => $status,
            'code' => $code,
            'message' => $message,
            'data' => $data
        ];
        return die(
        json_encode($resolved, $code)
        );
    }
}