<?php

namespace frill\sso\Composer\Installers;

class PuppetInstaller extends BaseInstaller
{
    protected $locations = array('module' => 'modules/{$name}/');
}
