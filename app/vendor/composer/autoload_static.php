<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd6407b4a1a6006e81e61a08aca1a0f8
{
    public static $classMap = array (
        'Assessment\\Availability\\EquimentAvailabilityHelper' => __DIR__ . '/../..' . '/src/Assessment/Availability/EquimentAvailabilityHelper.php',
        'Assessment\\Availability\\Todo\\EquimentAvailabilityHelperAssessment' => __DIR__ . '/../..' . '/src/Assessment/Availability/Todo/EquimentAvailabilityHelperAssessment.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbd6407b4a1a6006e81e61a08aca1a0f8::$classMap;

        }, null, ClassLoader::class);
    }
}