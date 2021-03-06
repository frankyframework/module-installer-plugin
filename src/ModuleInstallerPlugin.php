<?php

namespace Franky\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class ModuleInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new ModuleInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
    
    public function deactivate(Composer $composer, IOInterface $io)
    {
        
    }
    
    public function uninstall(Composer $composer, IOInterface $io)
    {
        
    }
}
