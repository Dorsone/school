<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Services\CourseService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CourseController extends Controller
{

    /**
     * @var CourseService
     */
    protected $courseService;

    /**
     * @param CourseService $courseService
     */
    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->courseService->index();
        return view('client.courses', $data);
    }

    /**
     * @param Course $course
     * @return Application|Factory|View
     */
    public function show(Course $course)
    {
        $data = $this->courseService->show($course);
        return view('client.courses-single', $data);
    }
}
