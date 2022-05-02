<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\AdminServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{

    /**
     * @var AdminServices
     */
    protected $adminServices;

    /**
     * @param AdminServices $adminServices
     */
    public function __construct(AdminServices $adminServices)
    {
        $this->adminServices = $adminServices;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->adminServices->index();
        return view('admin.index', $data);
    }

    public function admins()
    {
        $data = $this->adminServices->admins();
        return view('admin.admins', $data);
    }

    public function moderators()
    {
        $data = $this->adminServices->moderators();
        return view('admin.moderators', $data);
    }

    public function teachers()
    {
        $data = $this->adminServices->teachers();
        return view('admin.teachers', $data);
    }

    public function students()
    {
        return view('admin.students');
    }

    public function reviews()
    {
        return view('admin.reviews');
    }

    public function messages()
    {
        return view('admin.messages');
    }

    public function news()
    {
        return view('admin.news');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
