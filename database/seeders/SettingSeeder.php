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
        foreach (SettingsConstants::contacts() as $key => $contact) {
            Setting::query()->create($contact);
            Setting::query()->create(SettingsConstants::social()[$key]);
            Setting::query()->create(SettingsConstants::experience()[$key]);
        }
    }
}
