<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class FileHelpers
{
    final public static function handleIncomingFiles(string $directoryName, array $inputData, array $existingOptions = null): array
    {
        foreach ($inputData as $index => $inputDatum) {
            if (is_array($inputDatum)) {
                $inputData[$index] = self::handleIncomingFiles($directoryName, $inputDatum);
            }

            if ($inputDatum instanceof UploadedFile) {
                $fileName = '/uploads/' . $directoryName . '/' . $inputDatum->hashName();
                $inputData[$index] = $fileName;

                if ($existingOptions) {
                    self::deleteOldExistingFiles($index, $existingOptions);
                }

                $inputDatum->move(
                    public_path('uploads/' . $directoryName), $fileName
                );
            }
        }

        return $inputData;
    }

    private static function deleteOldExistingFiles(string $keyName, array $existingOptions): void
    {
        $fileToRemove = $existingOptions['model']->$keyName;

        if (File::exists(public_path($fileToRemove))) {
            File::delete(public_path($fileToRemove));
        }
    }
}
