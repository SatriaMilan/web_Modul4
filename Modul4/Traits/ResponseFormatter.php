<?php

namespace Traits;

trait ResponseFormatter
{
    public function ResponseFormatter($code, $massage, $data = null)
    {
        return json_encode([
            "code" => $code,
            "massage" => $massage,
            "data" => $data
        ]);
    }
}