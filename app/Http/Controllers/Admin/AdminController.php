<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
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

    public function adminsShow(User $user)
    {
        return view('admin.admins-show', compact('user'));
    }

    public function moderators()
    {
        $data = $this->adminServices->moderators();
        return view('admin.moderators', $data);
    }

    public function moderatorShow(User $user)
    {
        return view('admin.admins-show', compact('user'));
    }

    public function teachers()
    {
        $data = $this->adminServices->teachers();
        return view('admin.teachers', $data);
    }

    public function teacherShow(Teacher $teacher)
    {
        return view('admin.teacher-show', compact('teacher'));
    }

    public function students()
    {
        $data = $this->adminServices->students();
        return view('admin.students', $data);
    }

    public function studentShow(Student $student)
    {
        return view('admin.student-show', compact('student'));
    }

    public function reviews()
    {
        $data = $this->adminServices->reviews();
        return view('admin.reviews', $data);
    }

    public function reviewsShow(Reviews $reviews)
    {
        return view('admin.message-show', compact('reviews'));
    }

    public function messages()
    {
        $data = $this->adminServices->messages();
        return view('admin.messages', $data);
    }

    public function news()
    {
        $data = $this->adminServices->news();
        return view('admin.news', $data);
    }

    public function settings()
    {
        $data = $this->adminServices->settings();
        return view('admin.settings', $data);
    }
}
