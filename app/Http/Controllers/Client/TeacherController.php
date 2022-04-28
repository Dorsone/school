<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\TeacherServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TeacherController extends Controller
{
    /**
     * @var TeacherServices
     */
    protected $teacherServices;

    /**
     * @param TeacherServices $teacherServices
     */
    public function __construct(TeacherServices $teacherServices)
    {
        $this->teacherServices = $teacherServices;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->teacherServices->index();
        return view('client.teachers', $data);
    }
}
