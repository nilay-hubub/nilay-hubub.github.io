<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b3b92ece39c234f256a0f1f348f4e3d
{
    public static $files = array (
        '305f44d06b4b9b934b549f0b525c4bea' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/bootstrap.php',
        '89c483fff8e47bfb3a84bf56b0ff5160' => __DIR__ . '/..' . '/wp-forge/helpers/includes/functions.php',
        'f451a47b5b691954214859a2f4ec4451' => __DIR__ . '/..' . '/newfold-labs/wp-module-business-reviews/bootstrap.php',
        '95c011b0ec52c15dbf68dec5081b93ec' => __DIR__ . '/..' . '/newfold-labs/wp-module-loader/bootstrap.php',
        'd74aae4e35e57e9789b924ac610c283e' => __DIR__ . '/..' . '/newfold-labs/wp-module-loader/includes/functions.php',
        '7c5dbbc48ace6d036fb7435638b4473b' => __DIR__ . '/..' . '/newfold-labs/wp-module-marketplace/bootstrap.php',
        '0af4867b69840fe0473305a547d8e23c' => __DIR__ . '/..' . '/newfold-labs/wp-module-secure-passwords/bootstrap.php',
        '44acd1d537592db522c7f66302b330e4' => __DIR__ . '/..' . '/newfold-labs/wp-module-sso/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wpscholar\\' => 10,
        ),
        'W' => 
        array (
            'WP_Forge\\WPUpdateHandler\\' => 25,
            'WP_Forge\\Options\\' => 17,
            'WP_Forge\\Helpers\\' => 17,
            'WP_Forge\\Fluent\\' => 16,
            'WP_Forge\\Collection\\' => 20,
        ),
        'N' => 
        array (
            'NewfoldLabs\\WP\\Module\\Marketplace\\' => 34,
            'NewfoldLabs\\WP\\Module\\Data\\' => 27,
            'NewfoldLabs\\WP\\ModuleLoader\\' => 28,
            'NewfoldLabs\\Container\\' => 22,
            'NewFoldLabs\\WP\\Module\\SSO\\' => 26,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wpscholar\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpscholar/url',
        ),
        'WP_Forge\\WPUpdateHandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/wp-forge/wp-update-handler/includes',
        ),
        'WP_Forge\\Options\\' => 
        array (
            0 => __DIR__ . '/..' . '/wp-forge/wp-options/includes',
        ),
        'WP_Forge\\Helpers\\' => 
        array (
            0 => __DIR__ . '/..' . '/wp-forge/helpers/includes',
        ),
        'WP_Forge\\Fluent\\' => 
        array (
            0 => __DIR__ . '/..' . '/wp-forge/fluent/includes',
        ),
        'WP_Forge\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/wp-forge/collection',
        ),
        'NewfoldLabs\\WP\\Module\\Marketplace\\' => 
        array (
            0 => __DIR__ . '/..' . '/newfold-labs/wp-module-marketplace/includes',
        ),
        'NewfoldLabs\\WP\\Module\\Data\\' => 
        array (
            0 => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src',
        ),
        'NewfoldLabs\\WP\\ModuleLoader\\' => 
        array (
            0 => __DIR__ . '/..' . '/newfold-labs/wp-module-loader/includes',
        ),
        'NewfoldLabs\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/newfold-labs/container/includes',
        ),
        'NewFoldLabs\\WP\\Module\\SSO\\' => 
        array (
            0 => __DIR__ . '/..' . '/newfold-labs/wp-module-sso/includes',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Doctrine\\Common\\Inflector\\Inflector' => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector/Inflector.php',
        'NewFoldLabs\\WP\\Module\\SSO\\SSO_AJAX_Handler' => __DIR__ . '/..' . '/newfold-labs/wp-module-sso/includes/SSO_AJAX_Handler.php',
        'NewFoldLabs\\WP\\Module\\SSO\\SSO_Helpers' => __DIR__ . '/..' . '/newfold-labs/wp-module-sso/includes/SSO_Helpers.php',
        'NewFoldLabs\\WP\\Module\\SSO\\SSO_Helpers_Legacy' => __DIR__ . '/..' . '/newfold-labs/wp-module-sso/includes/SSO_Helpers_Legacy.php',
        'NewFoldLabs\\WP\\Module\\SSO\\SSO_REST_Controller' => __DIR__ . '/..' . '/newfold-labs/wp-module-sso/includes/SSO_REST_Controller.php',
        'NewfoldLabs\\Container\\Container' => __DIR__ . '/..' . '/newfold-labs/container/includes/Container.php',
        'NewfoldLabs\\Container\\ContainerException' => __DIR__ . '/..' . '/newfold-labs/container/includes/ContainerException.php',
        'NewfoldLabs\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/newfold-labs/container/includes/ContainerExceptionInterface.php',
        'NewfoldLabs\\Container\\ContainerInterface' => __DIR__ . '/..' . '/newfold-labs/container/includes/ContainerInterface.php',
        'NewfoldLabs\\Container\\NotFoundException' => __DIR__ . '/..' . '/newfold-labs/container/includes/NotFoundException.php',
        'NewfoldLabs\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/newfold-labs/container/includes/NotFoundExceptionInterface.php',
        'NewfoldLabs\\WP\\ModuleLoader\\Container' => __DIR__ . '/..' . '/newfold-labs/wp-module-loader/includes/Container.php',
        'NewfoldLabs\\WP\\ModuleLoader\\Module' => __DIR__ . '/..' . '/newfold-labs/wp-module-loader/includes/Module.php',
        'NewfoldLabs\\WP\\ModuleLoader\\ModuleRegistry' => __DIR__ . '/..' . '/newfold-labs/wp-module-loader/includes/ModuleRegistry.php',
        'NewfoldLabs\\WP\\ModuleLoader\\Plugin' => __DIR__ . '/..' . '/newfold-labs/wp-module-loader/includes/Plugin.php',
        'NewfoldLabs\\WP\\Module\\Data\\API\\Events' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/API/Events.php',
        'NewfoldLabs\\WP\\Module\\Data\\API\\Verify' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/API/Verify.php',
        'NewfoldLabs\\WP\\Module\\Data\\Data' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Data.php',
        'NewfoldLabs\\WP\\Module\\Data\\Event' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Event.php',
        'NewfoldLabs\\WP\\Module\\Data\\EventManager' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/EventManager.php',
        'NewfoldLabs\\WP\\Module\\Data\\Helpers\\Encryption' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Helpers/Encryption.php',
        'NewfoldLabs\\WP\\Module\\Data\\Helpers\\Plugin' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Helpers/Plugin.php',
        'NewfoldLabs\\WP\\Module\\Data\\Helpers\\SiteHealth' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Helpers/SiteHealth.php',
        'NewfoldLabs\\WP\\Module\\Data\\Helpers\\Transient' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Helpers/Transient.php',
        'NewfoldLabs\\WP\\Module\\Data\\HiiveConnection' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/HiiveConnection.php',
        'NewfoldLabs\\WP\\Module\\Data\\Listeners\\Admin' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Listeners/Admin.php',
        'NewfoldLabs\\WP\\Module\\Data\\Listeners\\BluehostPlugin' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Listeners/BluehostPlugin.php',
        'NewfoldLabs\\WP\\Module\\Data\\Listeners\\Content' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Listeners/Content.php',
        'NewfoldLabs\\WP\\Module\\Data\\Listeners\\Cron' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Listeners/Cron.php',
        'NewfoldLabs\\WP\\Module\\Data\\Listeners\\Jetpack' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Listeners/Jetpack.php',
        'NewfoldLabs\\WP\\Module\\Data\\Listeners\\Listener' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Listeners/Listener.php',
        'NewfoldLabs\\WP\\Module\\Data\\Listeners\\Plugin' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Listeners/Plugin.php',
        'NewfoldLabs\\WP\\Module\\Data\\Listeners\\SiteHealth' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Listeners/SiteHealth.php',
        'NewfoldLabs\\WP\\Module\\Data\\Listeners\\Theme' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Listeners/Theme.php',
        'NewfoldLabs\\WP\\Module\\Data\\Logger' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/Logger.php',
        'NewfoldLabs\\WP\\Module\\Data\\SubscriberInterface' => __DIR__ . '/..' . '/newfold-labs/wp-module-data/src/SubscriberInterface.php',
        'NewfoldLabs\\WP\\Module\\Marketplace\\Marketplace' => __DIR__ . '/..' . '/newfold-labs/wp-module-marketplace/includes/Marketplace.php',
        'WP_Forge\\Collection\\Collection' => __DIR__ . '/..' . '/wp-forge/collection/Collection.php',
        'WP_Forge\\Fluent\\Fluent' => __DIR__ . '/..' . '/wp-forge/fluent/includes/Fluent.php',
        'WP_Forge\\Helpers\\Arr' => __DIR__ . '/..' . '/wp-forge/helpers/includes/Arr.php',
        'WP_Forge\\Helpers\\Pluralizer' => __DIR__ . '/..' . '/wp-forge/helpers/includes/Pluralizer.php',
        'WP_Forge\\Helpers\\Str' => __DIR__ . '/..' . '/wp-forge/helpers/includes/Str.php',
        'WP_Forge\\Options\\Options' => __DIR__ . '/..' . '/wp-forge/wp-options/includes/Options.php',
        'WP_Forge\\WPUpdateHandler\\Plugin' => __DIR__ . '/..' . '/wp-forge/wp-update-handler/includes/Plugin.php',
        'WP_Forge\\WPUpdateHandler\\PluginUpdater' => __DIR__ . '/..' . '/wp-forge/wp-update-handler/includes/PluginUpdater.php',
        'WP_Forge\\WPUpdateHandler\\ThemeUpdater' => __DIR__ . '/..' . '/wp-forge/wp-update-handler/includes/ThemeUpdater.php',
        'wpscholar\\Url' => __DIR__ . '/..' . '/wpscholar/url/Url.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b3b92ece39c234f256a0f1f348f4e3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b3b92ece39c234f256a0f1f348f4e3d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b3b92ece39c234f256a0f1f348f4e3d::$classMap;

        }, null, ClassLoader::class);
    }
}
