<?php

namespace App\Services;

use App\Models\Message;

class ContactServices
{
    /**
     * @return void
     */
    public function index()
    {
        //
    }

    public function storeMessage($validated)
    {
        Message::query()->create($validated);
        return back();
    }

}
