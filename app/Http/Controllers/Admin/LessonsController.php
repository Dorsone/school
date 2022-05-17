<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Services\Admin\LessonsServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LessonsController extends Controller
{

    /**
     * @var LessonsServices
     */
    public $lessonsServices;

    /**
     * @param LessonsServices $lessonsServices
     */
    public function __construct(LessonsServices $lessonsServices)
    {
        $this->lessonsServices = $lessonsServices;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->lessonsServices->index();
        return view('admin.lessons', $data);
    }

    public function show(Course $lesson)
    {
        return \view('admin.lesson-show', compact('lesson'));
    }
}
