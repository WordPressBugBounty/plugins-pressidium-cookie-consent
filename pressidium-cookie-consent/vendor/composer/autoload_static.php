<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1a0d74f86c861307aa4703ad77d6eb3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pressidium\\WP\\CookieConsent\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pressidium\\WP\\CookieConsent\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Pressidium\\WP\\CookieConsent\\Admin\\Page' => __DIR__ . '/../..' . '/includes/Admin/Page.php',
        'Pressidium\\WP\\CookieConsent\\Admin\\Settings\\Consent_Record' => __DIR__ . '/../..' . '/includes/Admin/Settings/Consent_Record.php',
        'Pressidium\\WP\\CookieConsent\\Admin\\Settings\\Service_Provider' => __DIR__ . '/../..' . '/includes/Admin/Settings/Service_Provider.php',
        'Pressidium\\WP\\CookieConsent\\Admin\\Settings\\Settings_API' => __DIR__ . '/../..' . '/includes/Admin/Settings/Settings_API.php',
        'Pressidium\\WP\\CookieConsent\\Admin\\Settings\\Settings_Page' => __DIR__ . '/../..' . '/includes/Admin/Settings/Settings_Page.php',
        'Pressidium\\WP\\CookieConsent\\Client\\Consent_Mode' => __DIR__ . '/../..' . '/includes/Client/Consent_Mode.php',
        'Pressidium\\WP\\CookieConsent\\Client\\Cookie_Consent' => __DIR__ . '/../..' . '/includes/Client/Cookie_Consent.php',
        'Pressidium\\WP\\CookieConsent\\Client\\Service_Provider' => __DIR__ . '/../..' . '/includes/Client/Service_Provider.php',
        'Pressidium\\WP\\CookieConsent\\Database\\Blueprint' => __DIR__ . '/../..' . '/includes/Database/Blueprint.php',
        'Pressidium\\WP\\CookieConsent\\Database\\CSV_Exporter' => __DIR__ . '/../..' . '/includes/Database/CSV_Exporter.php',
        'Pressidium\\WP\\CookieConsent\\Database\\Column' => __DIR__ . '/../..' . '/includes/Database/Column.php',
        'Pressidium\\WP\\CookieConsent\\Database\\Database_Manager' => __DIR__ . '/../..' . '/includes/Database/Database_Manager.php',
        'Pressidium\\WP\\CookieConsent\\Database\\Exporter' => __DIR__ . '/../..' . '/includes/Database/Exporter.php',
        'Pressidium\\WP\\CookieConsent\\Database\\Raw' => __DIR__ . '/../..' . '/includes/Database/Raw.php',
        'Pressidium\\WP\\CookieConsent\\Database\\Schema' => __DIR__ . '/../..' . '/includes/Database/Schema.php',
        'Pressidium\\WP\\CookieConsent\\Database\\Table' => __DIR__ . '/../..' . '/includes/Database/Table.php',
        'Pressidium\\WP\\CookieConsent\\Database\\Tables\\Consents_Table' => __DIR__ . '/../..' . '/includes/Database/Tables/Consents_Table.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Argument\\ArgumentResolverInterface' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Argument/ArgumentResolverInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Argument\\ArgumentResolverTrait' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Argument/ArgumentResolverTrait.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Argument\\ClassName' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Argument/ClassName.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Argument\\ClassNameInterface' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Argument/ClassNameInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Argument\\ClassNameWithOptionalValue' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Argument/ClassNameWithOptionalValue.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Argument\\RawArgument' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Argument/RawArgument.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Argument\\RawArgumentInterface' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Argument/RawArgumentInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Container' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Container.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\ContainerAwareInterface' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/ContainerAwareInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\ContainerAwareTrait' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/ContainerAwareTrait.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Definition\\Definition' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Definition/Definition.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Definition\\DefinitionAggregate' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Definition/DefinitionAggregate.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Definition\\DefinitionAggregateInterface' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Definition/DefinitionAggregateInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Definition\\DefinitionInterface' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Definition/DefinitionInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Exception\\ContainerException' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Exception/ContainerException.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Exception\\NotFoundException' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Exception/NotFoundException.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Inflector\\Inflector' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Inflector/Inflector.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Inflector\\InflectorAggregate' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Inflector/InflectorAggregate.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Inflector\\InflectorAggregateInterface' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Inflector/InflectorAggregateInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\Inflector\\InflectorInterface' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/Inflector/InflectorInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\ReflectionContainer' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/ReflectionContainer.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\ServiceProvider\\AbstractServiceProvider' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/ServiceProvider/AbstractServiceProvider.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\ServiceProvider\\BootableServiceProviderInterface' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/ServiceProvider/BootableServiceProviderInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\ServiceProvider\\ServiceProviderAggregate' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/ServiceProvider/ServiceProviderAggregate.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\ServiceProvider\\ServiceProviderAggregateInterface' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/ServiceProvider/ServiceProviderAggregateInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\League\\Container\\ServiceProvider\\ServiceProviderInterface' => __DIR__ . '/../..' . '/includes/Dependencies/League/Container/ServiceProvider/ServiceProviderInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Container/ContainerExceptionInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Container\\ContainerInterface' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Container/ContainerInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Container/NotFoundExceptionInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Log\\AbstractLogger' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Log/AbstractLogger.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Log\\InvalidArgumentException' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Log/InvalidArgumentException.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Log\\LogLevel' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Log/LogLevel.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Log/LoggerAwareInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Log/LoggerAwareTrait.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Log\\LoggerInterface' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Log/LoggerInterface.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Log\\LoggerTrait' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Log/LoggerTrait.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Log\\NullLogger' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Log/NullLogger.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Log\\Test\\DummyTest' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Log/Test/DummyTest.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Log/Test/LoggerInterfaceTest.php',
        'Pressidium\\WP\\CookieConsent\\Dependencies\\Psr\\Log\\Test\\TestLogger' => __DIR__ . '/../..' . '/includes/Dependencies/Psr/Log/Test/TestLogger.php',
        'Pressidium\\WP\\CookieConsent\\Emoji' => __DIR__ . '/../..' . '/includes/Emoji.php',
        'Pressidium\\WP\\CookieConsent\\Feedback\\API' => __DIR__ . '/../..' . '/includes/Feedback/API.php',
        'Pressidium\\WP\\CookieConsent\\Feedback\\Feedback' => __DIR__ . '/../..' . '/includes/Feedback/Feedback.php',
        'Pressidium\\WP\\CookieConsent\\Feedback\\Feedback_API' => __DIR__ . '/../..' . '/includes/Feedback/Feedback_API.php',
        'Pressidium\\WP\\CookieConsent\\Feedback\\Feedback_Exception' => __DIR__ . '/../..' . '/includes/Feedback/Feedback_Exception.php',
        'Pressidium\\WP\\CookieConsent\\Feedback\\Service_Provider' => __DIR__ . '/../..' . '/includes/Feedback/Service_Provider.php',
        'Pressidium\\WP\\CookieConsent\\Geo_Locator' => __DIR__ . '/../..' . '/includes/Geo_Locator.php',
        'Pressidium\\WP\\CookieConsent\\Hooks\\Actions' => __DIR__ . '/../..' . '/includes/Hooks/Actions.php',
        'Pressidium\\WP\\CookieConsent\\Hooks\\Filters' => __DIR__ . '/../..' . '/includes/Hooks/Filters.php',
        'Pressidium\\WP\\CookieConsent\\Hooks\\Hooks_Manager' => __DIR__ . '/../..' . '/includes/Hooks/Hooks_Manager.php',
        'Pressidium\\WP\\CookieConsent\\Logging\\File_Logger' => __DIR__ . '/../..' . '/includes/Logging/File_Logger.php',
        'Pressidium\\WP\\CookieConsent\\Logging\\Logger' => __DIR__ . '/../..' . '/includes/Logging/Logger.php',
        'Pressidium\\WP\\CookieConsent\\Logs' => __DIR__ . '/../..' . '/includes/Logs.php',
        'Pressidium\\WP\\CookieConsent\\Migrator' => __DIR__ . '/../..' . '/includes/Migrator.php',
        'Pressidium\\WP\\CookieConsent\\Options\\Options' => __DIR__ . '/../..' . '/includes/Options/Options.php',
        'Pressidium\\WP\\CookieConsent\\Options\\WP_Options' => __DIR__ . '/../..' . '/includes/Options/WP_Options.php',
        'Pressidium\\WP\\CookieConsent\\Plugin' => __DIR__ . '/../..' . '/includes/Plugin.php',
        'Pressidium\\WP\\CookieConsent\\Sanitizer' => __DIR__ . '/../..' . '/includes/Sanitizer.php',
        'Pressidium\\WP\\CookieConsent\\Settings' => __DIR__ . '/../..' . '/includes/Settings.php',
        'Pressidium\\WP\\CookieConsent\\Upgrader' => __DIR__ . '/../..' . '/includes/Upgrader.php',
        'Pressidium\\WP\\CookieConsent\\Utils' => __DIR__ . '/../..' . '/includes/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1a0d74f86c861307aa4703ad77d6eb3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1a0d74f86c861307aa4703ad77d6eb3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1a0d74f86c861307aa4703ad77d6eb3::$classMap;

        }, null, ClassLoader::class);
    }
}
