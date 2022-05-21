<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LessonsStoreRequest;
use App\Http\Requests\LessonUpdateRequest;
use App\Models\Course;
use App\Models\Level;
use App\Services\Admin\LessonsServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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

    public function create()
    {
        return \view('admin.lesson-create', [
            'levels' => Level::all(),
        ]);
    }

    /**
     * @param LessonsStoreRequest $request
     * @return RedirectResponse
     */
    public function store(LessonsStoreRequest $request): RedirectResponse
    {
        $this->lessonsServices->store($request->validated());
        return redirect()->route('admin.lessons.index');
    }

    public function edit(Course $lesson)
    {
        return \view('admin.lesson-update', [
            'lesson' => $lesson,
            'levels' => Level::query()->get(),
        ]);
    }

    public function update(Course $lesson, LessonUpdateRequest $request): RedirectResponse
    {
        $this->lessonsServices->update($lesson, $request->validated());
        return redirect()->route('admin.lessons.index');
    }

    /**
     * @param Course $lesson
     * @return RedirectResponse
     */
    public function destroy(Course $lesson): RedirectResponse
    {
        $this->lessonsServices->destroy($lesson);
        return redirect()->route('admin.lessons.index');
    }
}
