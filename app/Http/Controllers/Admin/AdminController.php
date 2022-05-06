<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Message;
use App\Models\Reviews;
use App\Models\Setting;
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

    /**
     * @return Application|Factory|View
     */
    public function admins()
    {
        $data = $this->adminServices->admins();
        return view('admin.admins', $data);
    }

    /**
     * @param User $user
     * @return Application|Factory|View
     */
    public function adminsShow(User $user)
    {
        return view('admin.admins-show', compact('user'));
    }

    /**
     * @return Application|Factory|View
     */
    public function moderators()
    {
        $data = $this->adminServices->moderators();
        return view('admin.moderators', $data);
    }

    /**
     * @param User $user
     * @return Application|Factory|View
     */
    public function moderatorShow(User $user)
    {
        return view('admin.admins-show', compact('user'));
    }

    /**
     * @return Application|Factory|View
     */
    public function teachers()
    {
        $data = $this->adminServices->teachers();
        return view('admin.teachers', $data);
    }

    /**
     * @param Teacher $teacher
     * @return Application|Factory|View
     */
    public function teacherShow(Teacher $teacher)
    {
        return view('admin.teacher-show', compact('teacher'));
    }

    /**
     * @return Application|Factory|View
     */
    public function students()
    {
        $data = $this->adminServices->students();
        return view('admin.students', $data);
    }

    /**
     * @param Student $student
     * @return Application|Factory|View
     */
    public function studentShow(Student $student)
    {
        return view('admin.student-show', compact('student'));
    }

    /**
     * @return Application|Factory|View
     */
    public function reviews()
    {
        $data = $this->adminServices->reviews();
        return view('admin.reviews', $data);
    }

    /**
     * @param Reviews $reviews
     * @return Application|Factory|View
     */
    public function reviewsShow(Reviews $reviews)
    {
        return view('admin.review-show', compact('reviews'));
    }

    /**
     * @return Application|Factory|View
     */
    public function messages()
    {
        $data = $this->adminServices->messages();
        return view('admin.messages', $data);
    }

    /**
     * @param Message $message
     * @return Application|Factory|View
     */
    public function messageShow(Message $message)
    {
        return view('admin.message-show', compact('message'));
    }

    /**
     * @return Application|Factory|View
     */
    public function news()
    {
        $data = $this->adminServices->news();
        return view('admin.news', $data);
    }

    /**
     * @param Article $article
     * @return Application|Factory|View
     */
    public function newsShow(Article $article)
    {
        return view('admin.news-show', compact('article'));
    }

    /**
     * @return Application|Factory|View
     */
    public function settings()
    {
        $data = $this->adminServices->settings();
        return view('admin.settings', $data);
    }

    /**
     * @param Setting $setting
     * @return Application|Factory|View
     */
    public function settingShow(Setting $setting)
    {
        return view('admin.setting-show', compact('setting'));
    }
}