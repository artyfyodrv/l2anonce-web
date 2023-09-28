<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddServerValidation;
use App\Http\Services\ServerService;
use Exception;
use Illuminate\Http\JsonResponse;

/**
 * Контроллер для работы с серверами через API V1
 */
class ApiServerController extends Controller
{
    public function getList(): JsonResponse
    {
        try {
            $apiService = new ServerService();
            $data = $apiService->getAll();
        } catch (Exception $e){
            return response()->json([
                'status' => 'failed',
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function getOne($id): JsonResponse
    {
        try {
            $serverApi = new ServerService();
            $data = $serverApi->getOne($id);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'failed',
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function create(AddServerValidation $validation): JsonResponse
    {
        try {
            $serverApi = new ServerService();
            $data = $serverApi->create($validation);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'failed',
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Сервер успешно добавлен',
            'data' => $data
        ]);
    }

}
