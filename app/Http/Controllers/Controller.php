<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ajaxShowResult($data = [], $message = '', $action = 'success', $code = 0, $redirect = '')
    {
        $response = [
            'code' => $code,
            'action' => $action,
            'message' => $message,
            'data' => $data,
            'redirect' => $redirect
        ];
        return JsonResponse::create($response);
    }

    public function ajaxShowError($message = '', $code = 10000, $action = 'alert', $data = [], $redirect = '')
    {
        return $this->ajaxShowResult($message, $action, $code,$data, $redirect);
    }
}
