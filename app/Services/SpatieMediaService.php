<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SpatieMediaService
{
    /**
     * @param HasMedia $model
     * @param UploadedFile $file
     * @param string $collection
     * @return Media
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function uploadImageFormRequest(HasMedia $model, UploadedFile $file, string $collection = 'default'): Media
    {
        return $model->addMedia($file)->toMediaCollection($collection);
    }
}
