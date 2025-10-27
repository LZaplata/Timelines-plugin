<?php namespace LZaplata\Timelines\Controllers;

use Backend;
use Backend\Facades\BackendAuth;
use BackendMenu;
use Backend\Classes\Controller;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class Events extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'lzaplata.timelines.event',
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('LZaplata.Timelines', 'main-menu-item', 'side-menu-item3');
    }

    /**
     * @return HttpResponse|null
     */
    public function create(): ?HttpResponse
    {
        if (!BackendAuth::userHasAccess("lzaplata.timelines.event.create")) {
            $content = View::make("backend::access_denied")->render();

            return Response::make($content, 403);
        }

        return parent::create();
    }

    /**
     * @param int $id
     * @return HttpResponse|null
     */
    public function update(int $id): ?HttpResponse
    {
        if (!BackendAuth::userHasAccess("lzaplata.timelines.event.update")) {
            $content = View::make("backend::access_denied")->render();

            return Response::make($content, 403);
        }

        return parent::update($id);
    }
}
