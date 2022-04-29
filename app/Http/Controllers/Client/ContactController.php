<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
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

    /**
     * @param MessageRequest $messageRequest
     * @return void
     */
    public function storeMessage(MessageRequest $messageRequest)
    {
        return $this->contactServices->storeMessage($messageRequest->validated());
    }

}
