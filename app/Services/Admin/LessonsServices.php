<?php

namespace App\Services\Admin;

use App\Models\Course;
use App\Services\SpatieMediaService;
use Illuminate\Database\Eloquent\Model;

class LessonsServices
{

    /**
     * @return string[]
     */
    public function index(): array
    {
        return [
            'lessons' => Course::query()->with('level')->paginate(10),
        ];
    }

    public function store($validated)
    {
        $lesson = Course::query()->create($validated);

        app(SpatieMediaService::class)->uploadImageFormRequest($lesson, $validated['image']);

        return $lesson;
    }

    public function update(Model $model, array $validated): Model
    {
        if (isset($validated['image']))
        {
            $model->getFirstMedia()->delete();
            app(SpatieMediaService::class)->uploadImageFormRequest($model, $validated['image']);
        }
        $model->update($validated);
        return $model;
    }

    /**
     * @param $model
     * @return void
     */
    public function destroy($model)
    {
        $model->delete();
    }

}
