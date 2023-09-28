<?php

declare(strict_types=1);

namespace App\Http\Controllers\Servers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddServerValidation;
use App\Http\Services\ServerService;
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

        return view('add-server', ['success' => 'Успешное добавление']);
    }

    public function edit()
    {
        // TODO: Реализовать метод
    }
}
