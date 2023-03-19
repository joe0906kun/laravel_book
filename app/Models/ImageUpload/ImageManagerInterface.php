<?php

declare(strict_types=1);

namespace App\Models\ImageUpload;

interface ImageManagerInterface
{
    /**
     *  @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $file
     *  @return string
     */
    public function save($file): string;

    public function delete(string $name): void;
}
