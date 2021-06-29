<?php

namespace Franky\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ModuleInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $prefix = substr($package->getPrettyName(), 0, 16);
        if ('frankyframework/' !== $prefix) {
                 return 'vendor/'.$package->getPrettyName();
        }

        return 'modulos/'.substr($package->getPrettyName(), 16);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'franky-module' === $packageType;
    }
}
