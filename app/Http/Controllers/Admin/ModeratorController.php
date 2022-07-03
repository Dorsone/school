<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ModeratorRequest;
use App\Http\Requests\ModeratorUpdateRequest;
use App\Models\User;
use App\Services\Admin\ModeratorServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ModeratorController extends Controller
{
    /**
     * @var ModeratorServices
     */
    protected $moderatorServices;

    /**
     * @param ModeratorServices $moderatorServices
     */
    public function __construct(ModeratorServices $moderatorServices)
    {
        $this->moderatorServices = $moderatorServices;
    }

    /**
     * @param User $user
     * @return Application|Factory|View
     */
    public function moderatorEdit(User $user)
    {
        return \view('admin.moderator-edit', compact('user'));
    }

    /**
     * @param User $user
     * @param ModeratorUpdateRequest $request
     * @return RedirectResponse
     */
    public function moderatorUpdate(User $user, ModeratorUpdateRequest $request): RedirectResponse
    {
        $this->moderatorServices->moderatorUpdate($user, $request->validated());
        return redirect()->route('admin.moderators.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function moderators()
    {
        $data = $this->moderatorServices->moderators();
        return view('admin.moderators', $data);
    }

    /**
     * @return Application|Factory|View
     */
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
        return $this->moderatorServices->moderatorStore($moderatorRequest->validated());
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
    public function moderatorDestroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('admin.moderators.index');
    }

}
