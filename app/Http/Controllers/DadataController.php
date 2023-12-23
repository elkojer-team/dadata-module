<?php

namespace Modules\Dadata\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Dadata\app\Http\Requests\PostRequest;
use Modules\Dadata\App\Services\DadataService;

class DadataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PostRequest $request, DadataService $service)
    {
        $response = $service->address($request->get('query'));
        return $response;
    }


}
