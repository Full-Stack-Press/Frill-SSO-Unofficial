<?php

namespace frill\sso\Composer\Installers;

class CiviCrmInstaller extends BaseInstaller
{
    protected $locations = array('ext' => 'ext/{$name}/');
}
