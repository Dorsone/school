<?php

namespace App\Services\Admin;

use App\Constants\CacheConstant;
use App\Models\Article;
use App\Models\Level;
use App\Models\Message;
use App\Models\Reviews;
use App\Models\Setting;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use App\Services\SpatieMediaService;
use Artisan;
use Illuminate\Database\Eloquent\Model;
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
    public function teachers(): array
    {
        return [
            'teachers' => Teacher::query()->paginate(10),
        ];
    }

    public function teacherUpdate(Model $model, array $validated): Model
    {
        if (isset($validated['image'])) {
            $model->getFirstMedia()->delete();
            app(SpatieMediaService::class)->uploadImageFormRequest($model, $validated['image']);
        }
        $model->update($validated);
        return $model;
    }

    /**
     * @param $validated
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
            'students' => Student::query()->with('level')->paginate(perPage: 20),
        ];
    }

    public function studentStore($validated): RedirectResponse
    {
        $validated += ['status' => "1"];
        Student::query()->create($validated);
        return redirect()->route('admin.students.index');
    }

    public function studentEdit($model): array
    {
        return [
            'student' => $model,
            'levels' => Level::all(),
        ];
    }

    public function studentUpdate(Model $model, array $validated): Model
    {
        $model->update($validated);
        return $model;
    }

    /**
     * @return array
     */
    public function reviews(): array
    {
        return [
            'reviews' => Reviews::query()->where('status', 0)->with('level')->paginate(20),
        ];
    }

    public function reviewsSubmit(Model $model): Model
    {
        $model->status = 1;
        $model->save();
        return $model;
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

        $images = $validated['images'];
        unset($validated['images']);

        $article = Article::query()->create($validated);


        foreach ($images as $image) {
            app(SpatieMediaService::class)->uploadImageFormRequest($article, $image);

        }

        // dd($validated);


        return $article;
    }

    public function newsUpdate(array $validated, Article $model)
    {
        $image = $validated['images'] ?? [];
        unset($validated['images']);
        
        if(isset($image)) {
            if (($model->getMedia())) {
                foreach ($model->getMedia() as $images) {
                    $images->delete();
                }
            }
            // dd($validated);
            foreach ($image as $images) {
                app(SpatieMediaService::class)->uploadImageFormRequest($model, $images);
            }
        }
        $model->update($validated); 
        return $model;
    }

    /**
     * @return array
     */
    public function settings(): array
    {
        return [
            'settings' => Setting::query()->paginate(perPage: 10),
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
