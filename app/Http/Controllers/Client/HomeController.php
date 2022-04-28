<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Services\HomeServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{

    /**
     * @var
     */
    protected $homeServices;

    /**
     * @param HomeServices $homeServices
     */
    public function __construct(HomeServices $homeServices)
    {
        $this->homeServices = $homeServices;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('client.index', $this->homeServices->index());
    }

    /**
     * @param ReviewRequest $reviewRequest
     * @return void
     */
    public function storeReview(ReviewRequest $reviewRequest)
    {
        $this->homeServices->storeReview($reviewRequest->validated());
    }

    /**
     * @param $lang
     * @return RedirectResponse
     */
    public function lang($lang): RedirectResponse
    {
        return $this->homeServices->lang($lang);
    }
}
