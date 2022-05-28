<?php

namespace App\Services\Admin;

use App\Models\Level;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class LevelsServices
{

    /**
     * Returns the data for usage in the blade
     * @return array
     */
    public function index(): array
    {
        return [
          'levels' => Level::query()->orderBy('created_at', 'desc')->paginate(10),
        ];
    }

    /**
     * Returns the data for usage in the blade
     * @return array
     */
    public function create(): array
    {
        return [
            'teachers' => Teacher::query()->orderBy('created_at', 'desc')->get(),
        ];
    }

    /**
     * Creating the Level
     * @param array $validated
     * @return Builder|Model
     */
    public function store(array $validated)
    {
        return Level::query()->create($validated);
    }

    public function show($id)
    {
    }

    /**
     * @param Model $model
     * @return array
     */
    public function edit(Model $model): array
    {
        return [
            'level' => $model,
            'teachers' => Teacher::query()->get(),
        ];
    }

    /**
     * Updating the Levels
     * @param array $validated
     * @param Model $model
     * @return Model
     */
    public function update(array $validated, Model $model): Model
    {
        $model->update($validated);
        return $model;
    }

    /**
     * @param Model $model
     * @return bool
     */
    public function destroy(Model $model): bool
    {
        $model->delete();
        return true;
    }

}
