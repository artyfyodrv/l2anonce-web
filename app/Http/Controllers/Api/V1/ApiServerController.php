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
    public function getOne($id): JsonResponse
    {
        try {
            $data = ServerService::getOne($id);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function create(AddServerValidation $validation): JsonResponse
    {
        try {
            $serverService = new ServerService();
            $data = $serverService->create($validation);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Сервер успешно добавлен',
            'data' => $data
        ]);
    }

}
