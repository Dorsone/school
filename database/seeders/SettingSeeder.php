<?php

namespace Database\Seeders;

use App\Constants\SettingsConstants;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->settings();
    }

    public function settings()
    {
        $settingsConstants = new SettingsConstants();
        foreach ($settingsConstants->contacts() as $key => $contact) {
            Setting::query()->create($contact);
            Setting::query()->create($settingsConstants->social()[$key]);
            Setting::query()->create($settingsConstants->experience()[$key]);
        }
    }
}
