<?php

declare(strict_types=1);

namespace App\Http\Controllers\Servers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddServerValidation;
use App\Http\Requests\EditServerValidation;
use App\Http\Services\ServerService;
use App\Models\Server;
use Exception;

/**
 * Контроллер для работы с серверами через Views
 */
class ServerController extends Controller
{
    public function show()
    {
        return view('add-server');
    }

    public function create(AddServerValidation $validation)
    {
        try {
            $serverService = new ServerService();
            $serverService->create($validation);
        } catch (Exception $e) {
            return redirect()->back()->withInput()->withErrors(['add-error' => $e->getMessage()]);
        }

        return redirect()->back()->with(['add-success' => 'Успешное добавление']);
    }

    // TODO:: Перенести реализацию в Админ панель
    public function showEditForm($id)
    {
        $data = Server::find($id);
        return view('edit-server', compact('id', 'data'));
    }

    // TODO:: Перенести реализацию в Админ панель
    public function edit(EditServerValidation $validation)
    {
        try {
            ServerService::edit($validation);
        } catch (Exception $e) {
            return redirect()->back()->withInput()->withErrors(['edit-error' => $e->getMessage()]);
        }

        return redirect()->back()->with(['edit-success' => 'Успешное добавение']);
    }

}

