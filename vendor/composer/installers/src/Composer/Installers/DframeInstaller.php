<?php

namespace frill\sso\Composer\Installers;

class DframeInstaller extends BaseInstaller
{
    protected $locations = array('module' => 'modules/{$vendor}/{$name}/');
}
