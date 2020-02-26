<?php

namespace Tavux\Flysystem\IBMCloudObjectStorage;

use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3\AwsS3Adapter;

/**
 * Class IbmCosFilesystem
 * @package Tavux\Flysytem\IBMCloudObjectStorage
 *
 */
class IbmCosAdapter extends AwsS3Adapter{

    /**
     * IbmCosAdapter constructor.
     * @param array $params
     * - key
     * - secret
     * - region
     * - version (optional)
     * - endpoint
     * @param string $bucket
     */
    public function __construct($params, $bucket)
    {
        $client = S3Client::factory([
            'region' => $params['region'],
            'credentials' => [
                'key' => $params['key'],
                'secret' => $params['secret'],
            ],
            'version' => isset($params['version']) ? $params['version'] :'latest',
            'endpoint' => $params['endpoint'],
        ]);

        parent::__construct($client, $bucket);
    }

}
