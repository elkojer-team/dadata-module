<?php

namespace Modules\Dadata\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Dadata\App\Http\Requests\PostRequest;
use Modules\Dadata\App\Services\DadataService;

class DadataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PostRequest $request, DadataService $service)
    {
        return $service->address($request->get('query') ?? 'г');
    }

}
