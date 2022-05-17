<?php

namespace App\Services\Admin;

use App\Constants\CacheConstant;
use App\Models\Article;
use App\Models\Message;
use App\Models\Reviews;
use App\Models\Setting;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use App\Services\SpatieMediaService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class AdminServices
{
    /**
     * @return array
     */
    public function index(): array
    {
        return [
            'reviews' => Reviews::count(),
            'teachers' => Teacher::count(),
            'students' => Student::count(),
            'messages' => Message::count(),
            'admins' => User::query()->where('role', '3')->count(),
            'moderators' => User::query()->where('role', '2')->count(),
            'news' => Article::query()->count(),
        ];
    }

    /**
     * @return array
     */
    public function admins(): array
    {
        return [
            'admins' => User::query()->where('role', '3')->paginate(10),
        ];
    }

    /**
     * @return array
     */
    public function moderators(): array
    {
        return [
            'moderators' => User::query()->where('role', '2')->paginate(10),
        ];
    }

    public function moderatorStore($validated): RedirectResponse
    {
        $validated += ['role' => "2"];
        $validated += ['remember_token' => Str::random(10)];
        User::query()->create($validated);
        return redirect()->route('admin.moderators.index');
    }

    /**
     * @return array
     */
    public function teachers(): array
    {
        return [
            'teachers' => Teacher::query()->paginate(10),
        ];
    }

    /**
     * @param $validated
     * @return Teacher
     */
    public function teacherStore($validated): Teacher
    {
        /** @var Teacher $teacher */
        $teacher = Teacher::query()->create($validated);

        app(SpatieMediaService::class)->uploadImageFormRequest($teacher, $validated['image']);

        return $teacher;
    }

    /**
     * @return array
     */
    public function students(): array
    {
        return [
            'students' => Student::query()->with('level')->paginate(20),
        ];
    }

    public function studentStore($validated): RedirectResponse
    {
        $validated += ['status' => "1"];
        $validated += ['image' => 'https://via.placeholder.com/640x480.png/00aa88?text=asperiores'];
        Student::query()->create($validated);
        return redirect()->route('admin.students.index');
    }

    /**
     * @return array
     */
    public function reviews(): array
    {
        return [
            'reviews' => Reviews::query()->with('level')->paginate(20),
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'messages' => Message::query()->paginate(10),
        ];
    }

    /**
     * @return array
     */
    public function news(): array
    {
        return [
            'news' => Article::query()->paginate(10),
        ];
    }

    public function newsStore($validated)
    {
        $validated += ['user_id' => auth()->user()->id];

        $article = Article::query()->create($validated);

        app(SpatieMediaService::class)->uploadImageFormRequest($article, $validated['image']);

        return $article;
    }

    /**
     * @return array
     */
    public function settings(): array
    {
        return [
            'settings' => Setting::query()->paginate(10),
        ];
    }

    public function settingUpdate(array $validated, Setting $setting)
    {
        $setting = tap($setting)->update($validated);
        $setting->save();
        Cache::put('contacts', Setting::query()->where('section', 'contacts')->get(), CacheConstant::TTL);
        return $setting;
    }

}
