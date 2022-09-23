<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Aws\S3\S3Client;
use Cake\ORM\Table;

class UploaderToS3Component extends Component
{
    public function upload(array $attachment, Table $table, string $folder, string $field_name, int $id = null)
    {
        $image_files = [];
        $folder = $this->formatFileFolder($folder);
        foreach ($attachment as $file) {
            $hasFileError = $file->getError();
            if (!$hasFileError) {
                $fileType = $file->getClientMediaType();
                $tmp_file = $file->getStream()->getMetadata('uri');
                $extension = pathinfo($file->getClientFilename(), PATHINFO_EXTENSION);
                $options = array('ContentType' => $fileType);

                if ($fileType == "image/png" || $fileType == "image/jpeg" || $fileType == "image/jpg") {
                    $file_name = md5_file($tmp_file) . '.' . $extension;
                    if (env('UPLOAD') == 'S3') {
                        $s3 = $this->connectToS3();
                        try {
                            $s3->putObject([
                                'Bucket' => env('S3_BUCKET_NAME'),
                                'Key'    => $folder . $file_name,
                                'Body' => fopen($tmp_file, 'r'),
                                $options
                            ]);
                            array_push($image_files, $file_name);
                        } catch (S3Exception $e) {
                            return null;
                        }
                    } else {
                        $path = 'webroot/' . $folder . $file;
                        if (move_uploaded_file($tmp_file, $path)) {
                            return $nome_arquivo;
                        } else {
                            return null;
                        }
                    }
                }
            } else {
                return [
                    'hasError' => true,
                    'error' => $file->getError()::ERROR_MESSAGES
                ];
            }
        }
        return $image_files;
    }

    protected function connectToS3()
    {
        $connection = new S3Client([
            'credentials' => [
                'key'    => env('S3_KEY'),
                'secret' => env('S3_SECRET'),
            ],
            'region' => env('S3_REGION'),
            'version' => env('S3_VERSION'),
        ]);
        return $connection;
    }

    protected function formatFileFolder($folder)
    {
        $first_character = substr($folder, 0, 1);
        $last_character = substr($folder, -1, 1);

        if ($first_character == '/') {
            $folder = ltrim($folder, '/');
        }

        if ($last_character != '/') {
            $folder = $folder . '/';
        }

        return 'img/' . $folder;
    }
}