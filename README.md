# Flysystem Adapter for Amazon Cloud Drive

This is an [IBM Cloud Object Storage](https://www.ibm.com/cloud/object-storage) adapter for [Flysystem](http://flysystem.thephpleague.com/).

## Installation

Composer is the best way, as with all of Flysystem!

```bash
composer require tavux/flysystem-ibm-cos
```

## Usage

Initial setup would be something like this:

```php
use Tavux\Flysystem\IBMCloudObjectStorage\IbmCosAdapter;
use League\Flysystem\Filesystem;

$storage = new Filesystem(
    new IbmCosAdapter([
        'key' => '<access_key>',
        'secret' => '<access_secret_key>',
        'region' => '<region>',
        'endpoint' => '<endpoint>',
    ], '<bucket>')
);

var_dump($storage->listContents(''));
```




