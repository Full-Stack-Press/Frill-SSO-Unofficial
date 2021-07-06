<?php

namespace frill\sso\Composer\Installers;

class VanillaInstaller extends BaseInstaller
{
    protected $locations = array('plugin' => 'plugins/{$name}/', 'theme' => 'themes/{$name}/');
}
