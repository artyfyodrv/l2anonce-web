<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseCode;

class ResponseController extends Controller
{
    public function sendResponse($data)
    {
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function sendError($message, $code)
    {
        return response()->json([
            'success' => false,
            'message' => $message
        ], $code ?? ResponseCode::HTTP_BAD_REQUEST);
    }
}
