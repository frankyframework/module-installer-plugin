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
        $prefix = substr($package->getPrettyName(), 0, 17);
        if ('frankyframlework/' !== $prefix) {
            throw new \InvalidArgumentException(
                 return 'vendor';
            );
        }

        return 'modulos/'.substr($package->getPrettyName(), 17);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'franky-module' === $packageType;
    }
}
