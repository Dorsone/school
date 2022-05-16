<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ModeratorRequest;
use App\Http\Requests\SettingsUpdateRequest;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\TeacherStoreRequest;
use App\Models\Article;
use App\Models\Level;
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
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

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
     * @param User $user
     * @return RedirectResponse
     */
    public function adminsDelete(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('admin.admins.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function moderators()
    {
        $data = $this->adminServices->moderators();
        return view('admin.moderators', $data);
    }

    public function moderatorCreate()
    {
        return view('admin.moderators-create');
    }

    /**
     * @param ModeratorRequest $moderatorRequest
     * @return RedirectResponse
     */
    public function moderatorStore(ModeratorRequest $moderatorRequest): RedirectResponse
    {
        return $this->adminServices->moderatorStore($moderatorRequest->validated());
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
     * @param User $user
     * @return RedirectResponse
     */
    public function moderatorDelete(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('admin.moderators.index');
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

    public function teacherCreate()
    {
        return \view('admin.teacher-create');
    }

    /**
     * @param TeacherStoreRequest $request
     * @return RedirectResponse
     */
    public function teacherStore(TeacherStoreRequest $request): RedirectResponse
    {
        $this->adminServices->teacherStore($request->validated());

        return redirect()->route('admin.teachers.index');
    }

    /**
     * @param Teacher $teacher
     * @return RedirectResponse
     */
    public function teacherDelete(Teacher $teacher): RedirectResponse
    {
        $teacher->delete();
        return redirect()->route('admin.teachers.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function students()
    {
        $data = $this->adminServices->students();
        return view('admin.students', $data);
    }

    public function studentStore(StudentStoreRequest $request)
    {
        return $this->adminServices->studentStore($request->validated());
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
    public function studentCreate()
    {
        $levels = Level::all();
        return view('admin.student-create', compact('levels'));
    }

    /**
     * @param Student $student
     * @return RedirectResponse
     */
    public function studentDelete(Student $student): RedirectResponse
    {
        $student->delete();
        return redirect()->route('admin.students.index');
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
     * @param Reviews $reviews
     * @return RedirectResponse
     */
    public function reviewsDelete(Reviews $reviews): RedirectResponse
    {
        $reviews->delete();
        return redirect()->route('admin.reviews.index');
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
     * @param Message $message
     * @return RedirectResponse
     */
    public function messageDelete(Message $message): RedirectResponse
    {
        $message->delete();
        return redirect()->route('admin.messages.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function news()
    {
        $data = $this->adminServices->news();
        return view('admin.news', $data);
    }

    public function newsCreate()
    {
        return \view('admin.news-create');
    }

    public function newsStore(ArticleStoreRequest $request): RedirectResponse
    {
        $this->adminServices->newsStore($request->validated());

        return redirect()->route('admin.news.index');
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
     * @param Article $article
     * @return RedirectResponse
     */
    public function newsDelete(Article $article): RedirectResponse
    {
        $article->delete();
        return redirect()->route('admin.news.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function settings()
    {
        $data = $this->adminServices->settings();
        return view('admin.settings', $data);
    }

    public function settingsEdit(Setting $setting)
    {
        return \view('admin.setting-create', compact('setting'));
    }

    public function settingsUpdate(SettingsUpdateRequest $request, Setting $setting): RedirectResponse
    {
        $this->adminServices->settingUpdate($request->validated(), $setting);

        return redirect()->route('admin.settings.index');
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
