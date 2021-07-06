<?php

namespace frill\sso\Composer\Installers;

class LaravelInstaller extends BaseInstaller
{
    protected $locations = array('library' => 'libraries/{$name}/');
}
