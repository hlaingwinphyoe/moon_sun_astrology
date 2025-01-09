<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function sendResponse($result, string $message)
    {
        $response = [
            'err_code' => 0,
            'data' => $result,
            'message' => $message
        ];

        $response['data'] = $result;
        return response()->json($response, 200);
    }

    public function sendError($errorMessages = [], $code = 404)
    {
        $response = [
            'err_code' => $code,
        ];
        if (!empty($errorMessages)) {
            $response['errors'] = [
                'message' => $errorMessages,
            ];
        }
        return response()->json($response, $code);
    }
}
