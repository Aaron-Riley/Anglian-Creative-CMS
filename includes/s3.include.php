<?php

use Aws\S3\S3Client;

function putObject ($sourceFile, $fileName) {
    try {
    $s3client = new S3Client([
        'region' => 'eu-west-2', 
        'version' => 'latest',
        'scheme' => 'http',
        'credentials' => [
            'key'    => 'AKIA6K4V2GB7F7CZC6P3',
            'secret' => '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',
        ],
    ]);
    $s3client->putObject([
        'Bucket' => "accms-assets-5674347",
        'Key' => $fileName,
        'SourceFile' => $sourceFile,
    ]);
    echo "Uploaded $fileName to .\n";
    return $s3client->getObjectUrl('accms-assets-5674347', $fileName);
} catch (Exception $exception) {
    echo "Failed to upload $fileName with error: " . $exception->getMessage();
    exit("Please fix error with file upload before continuing.");
}


}

function deleteObject () {

}