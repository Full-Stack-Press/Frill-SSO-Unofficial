<?php

namespace frill\sso\Composer\Installers;

class BonefishInstaller extends BaseInstaller
{
    protected $locations = array('package' => 'Packages/{$vendor}/{$name}/');
}
