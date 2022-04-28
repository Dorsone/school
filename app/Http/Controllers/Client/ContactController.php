<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\ContactServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ContactController extends Controller
{
    /**
     * @var ContactServices
     */
    protected $contactServices;

    /**
     * @param ContactServices $contactServices
     */
    public function __construct(ContactServices $contactServices)
    {
        $this->contactServices = $contactServices;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('client.contact');
    }
}
