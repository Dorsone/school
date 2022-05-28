<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LevelStoreRequest;
use App\Http\Requests\LevelUpdateRequest;
use App\Models\Level;
use App\Services\Admin\LevelsServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LevelsController extends Controller
{
    /**
     * @var LevelsServices
     */
    public $levelsServices;

    /**
     * @param LevelsServices $levelsServices
     */
    public function __construct(LevelsServices $levelsServices)
    {
        $this->levelsServices = $levelsServices;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->levelsServices->index();
        return view('admin.levels', $data);
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $data = $this->levelsServices->create();
        return view('admin.level-create', $data);
    }

    /**
     * @param LevelStoreRequest $request
     * @return RedirectResponse
     */
    public function store(LevelStoreRequest $request): RedirectResponse
    {
        $this->levelsServices->store($request->validated());
        return redirect()->route('admin.levels.index');
    }

    public function show(Level $level)
    {
        return \view('admin.level-show', compact('level'));
    }

    /**
     * @param Level $level
     * @return Application|Factory|View
     */
    public function edit(Level $level)
    {
        $data = $this->levelsServices->edit($level);
        return \view('admin.level-update', $data);
    }

    public function update(LevelUpdateRequest $request, Level $level): RedirectResponse
    {
        $this->levelsServices->update($request->validated(), $level);
        return redirect()->route('admin.levels.index');
    }

    public function destroy(Level $level): RedirectResponse
    {
        $this->levelsServices->destroy($level);
        return redirect()->route('admin.levels.index');
    }
}
