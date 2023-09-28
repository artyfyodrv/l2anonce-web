<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Server;
use Exception;
use Illuminate\Support\Facades\Log;

/**
 * Класс для работы с серверами
 */
class ServerService
{

    public function getOne($id)
    {
        try {
            $data = Server::find($id);
        } catch (Exception $e) {
            Log::error($e->getMessage() . ' ' . __FILE__ . ':' . __LINE__);
            throw new Exception('Ошибка получения данных');
        }

        return $data;
    }

    /** Создание сервера */
    public function create($data)
    {
        try {
            $server = Server::firstOrCreate([
                'host' => $data->host,
                'chronicles' => $data->chronicles,
                'rates' => $data->rates,
                'open_date' => $data->open_date,
            ]);
        } catch (Exception $e) {
            Log::error($e->getMessage() . ' ' . __FILE__ . ':' . __LINE__);
            throw new Exception('Произошла ошибка');
        }

        return $server;
    }

    /** Редактирование сервера */
    public function edit()
    {
        // TODO: Реализовать метод
    }

}
