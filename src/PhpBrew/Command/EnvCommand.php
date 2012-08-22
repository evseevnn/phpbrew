<?php
namespace PhpBrew\Command;
use PhpBrew\Config;

class EnvCommand extends \CLIFramework\Command
{
    public function brief() { return 'export environment variables'; }

    public function execute($version = null)
    {
        // get current version
        if( ! $version )
            $version = getenv('PHPBREW_PHP');

        // $currentVersion;
        $root = Config::getPhpbrewRoot();
        $home = Config::getPhpbrewHome();
        $buildDir = Config::getBuildDir();

        // $versionBuildPrefix = Config::getVersionBuildPrefix($version);
        // $versionBinPath     = Config::getVersionBinPath($version);

        echo 'export PHPBREW_ROOT=' . $root . "\n";
        echo 'export PHPBREW_HOME=' . $home . "\n";

        echo 'export PHPBREW_PHP='  . $version . "\n";
        echo 'export PHPBREW_PATH=' . ($version ? Config::getVersionBinPath($version) : '') . "\n";
    }

}
