<?php

namespace frill\sso\Composer\Installers;

class MakoInstaller extends BaseInstaller
{
    protected $locations = array('package' => 'app/packages/{$name}/');
}
