<?php

declare(strict_types=1);

namespace App\Http\Controllers\Servers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddServerValidation;
use App\Http\Requests\EditServerValidation;
use App\Http\Services\ServerService;
use App\Models\Server;
use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

/**
 * Контроллер для работы с серверами через Views
 */
class ServerController extends Controller
{
    public function show()
    {
        return view('add-server');
    }

    public function create(AddServerValidation $request)
    {
        try {
            $validateData = $request->validated();
            Server::query()->firstOrCreate([
                'host' => $validateData['host'],
                'chronicles' => $validateData['chronicles'],
                'rates' => $validateData['rates'],
                'open_date' => $validateData['open_date']
            ]);
        } catch (Throwable $t) {
            Log::error($t->getMessage() . ' ' . __FILE__ . ' ' . __LINE__);
            return redirect()->back()->withInput()->withErrors([
                'add-error' => 'Ошибка при отправке, обратитесь в тех.поддержку']);
        }

        return redirect()->back()->with(['add-success' => 'Успешное добавление']);
    }

    // TODO:: Перенести реализацию в Админ панель
    public function showEditForm($id)
    {
        try {
            $data = Server::find($id);
        } catch (Throwable $t) {
            Log::error($t->getMessage() . ' ' . __FILE__ . ' ' . __LINE__);
            return redirect()->back()->withInput()->withErrors(['edit-error' => 'Неизвестная ошибка']);
        }
        return view('edit-server', compact('id', 'data'));
    }

    // TODO:: Перенести реализацию в Админ панель
    public function edit(EditServerValidation $request)
    {
        try {
            $server = Server::query()->find((int)$request->id);
            $server->fill($request->validated());
            $server->save();
        } catch (Throwable $t) {
            Log::error($t->getMessage() . ' ' . __FILE__ . ' ' . __LINE__);
            return redirect()->back()->withInput()->withErrors(['edit-error' => 'Ошибка изменения сервера']);
        }

        return redirect()->back()->with(['edit-success' => 'Успешное добавение']);
    }

}

