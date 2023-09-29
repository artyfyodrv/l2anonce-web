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

    public static function getOne($id)
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
    public static function edit($data)
    {
        try {
            $server = Server::find($data['id']);
            $server->status = $data['status'];
            $server->host = $data['host'];
            $server->chronicles = $data['chronicles'];
            $server->rates = $data['rates'];
            $server->open_date = $data['open_date'];
            $server->save();
        } catch (Exception $e) {
           return throw new Exception('Возникла ошибка при внесении изменений');
        }

        return $server;
    }

}
