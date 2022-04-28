<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Services\HomeServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;

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
        $data = $this->homeServices->index();
        return view('client.index', [
            'teachers' => $data['teachers'],
            'courses' => $data['courses'],
            'articles' => $data['articles'],
            'footer_articles' => $data['footer_articles'],
            'experiences' => $data['experiences'],
            'reviews' => $data['reviews'],
            'contacts' => $data['contacts'],
        ]);
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
