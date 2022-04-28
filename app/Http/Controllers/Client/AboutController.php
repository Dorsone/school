<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\AboutServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    /**
     * @var AboutServices
     */
    protected $aboutServices;

    /**
     * @param AboutServices $aboutServices
     */
    public function __construct(AboutServices $aboutServices)
    {
        $this->aboutServices = $aboutServices;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->aboutServices->index();
        return view('client.about-us', $data);
    }
}
