<?php

namespace frill\sso\Composer\Installers;

class KohanaInstaller extends BaseInstaller
{
    protected $locations = array('module' => 'modules/{$name}/');
}
