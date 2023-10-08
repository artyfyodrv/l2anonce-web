<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ResponseController;
use App\Http\Requests\AddServerValidation;
use App\Http\Requests\EditServerValidation;
use App\Models\Server;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response as HttpCode;
use Throwable;

/**
 * Контроллер для работы с серверами через API V1
 */
class ApiServerController extends ResponseController
{
    public function getOne($id): JsonResponse
    {
        try {
            $data = Server::query()->find($id);
        } catch (Throwable $t) {
            Log::error($t->getMessage() . ' ' . __FILE__ . ' ' . __LINE__);
            return $this->sendError('Ошибка при получении сервера', HttpCode::HTTP_BAD_REQUEST);
        }

        return $this->sendResponse($data);
    }

    public function create(AddServerValidation $request): JsonResponse
    {
        try {
            $validateData = $request->validated();

            $data = Server::query()->firstOrCreate([
                'host' => $validateData['host'],
                'chronicles' => $validateData['chronicles'],
                'rates' => $validateData['rates'],
                'open_date' => $validateData['open_date']
            ]);

        } catch (Throwable $t) {
            Log::error($t->getMessage() . ' ' . __FILE__ . ' ' . __LINE__);
            return $this->sendError('Ошибка добавления сервера', HttpCode::HTTP_BAD_REQUEST);
        }

        return $this->sendResponse($data);
    }

    // TODO:: Перенести реализацию в Админ панель
    public function edit(EditServerValidation $request)
    {
        try {
            $server = Server::query()->find((int)$request->id);
            $server->fill($request->validated());
            $server->save();
        } catch (Throwable $t) {
            Log::error($t->getMessage() . ' ' . __FILE__ . ':' . __LINE__);
            return $this->sendError('Ошибка при изменении сервера', HttpCode::HTTP_BAD_REQUEST);
        }

        return $this->sendResponse($server);
    }

}
