<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit225081e655b49d55f7e4542624595601
{
    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Controller\\FooterController' => __DIR__ . '/../..' . '/app/controller/FooterController.php',
        'App\\Controller\\PageController' => __DIR__ . '/../..' . '/app/controller/pageController.php',
        'App\\Controller\\Pages\\ServiceController' => __DIR__ . '/../..' . '/app/controller/Pages/ServiceController.php',
        'App\\Model\\ContactModel' => __DIR__ . '/../..' . '/app/model/ContactModel.php',
        'App\\Model\\EmailModel' => __DIR__ . '/../..' . '/app/model/emailModel.php',
        'Bramus\\Router\\Router' => __DIR__ . '/..' . '/bramus/router/src/Bramus/Router/Router.php',
        'ComposerAutoloaderInit225081e655b49d55f7e4542624595601' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit225081e655b49d55f7e4542624595601' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Handler' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'Hello\\HelloRouterTestController' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'MultilangRouter' => __DIR__ . '/..' . '/bramus/router/demo-multilang/index.php',
        'RouterTest' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'RouterTestController' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'core\\connect\\DbConnect' => __DIR__ . '/../..' . '/core/dbConnect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit225081e655b49d55f7e4542624595601::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit225081e655b49d55f7e4542624595601::$classMap;

        }, null, ClassLoader::class);
    }
}
