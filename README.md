# Gitlab Storage Driver for Laravel

A Gitlab Storage Driver for Laravel.

This package is a wrapper of [Flysystem Gitlab storage](https://github.com/RoyVoetman/Flysystem-Gitlab-storage) as storage disk for Laravel.

## Installation
Run command `composer require zhanang19/laravel-gitlab-storage` to install this package

> This package is tested only in Laravel 7

## Configuration
Add new disk configuration in your `filesystems.php` config.
```php

    # config/filesystems.php
    'disks' => [
        'gitlab' => [
            'driver' => 'gitlab',
            'project_id' => env('GITLAB_PROJECT_ID'),
            'access_token' => env('GITLAB_ACCESS_TOKEN', ''),
            'branch' => env('GITLAB_BRANCH', 'master'),
            'base_url' => env('GITLAB_BASE_URL', 'https://gitlab.com'),
            'debug' => (bool)env('GITLAB_DEBUG', env('APP_DEBUG', false))
        ]
    ],

```

## Reference

1. [Custom Filesystems - Laravel Docs](https://laravel.com/docs/7.x/filesystem#custom-filesystems)
