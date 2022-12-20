<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34e26c180b5bbf3b3974d889e08c513e
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controller' => __DIR__ . '/../..' . '/app/classes/controller.php',
        'DeleteTasksController' => __DIR__ . '/../..' . '/app/controllers/tasks/deleteTask.controller.php',
        'GetTasksController' => __DIR__ . '/../..' . '/app/controllers/tasks/getTasks.controller.php',
        'Model' => __DIR__ . '/../..' . '/app/classes/model.php',
        'PostTasksController' => __DIR__ . '/../..' . '/app/controllers/tasks/postTasks.controller.php',
        'PutTasksController' => __DIR__ . '/../..' . '/app/controllers/tasks/putTask.controller.php',
        'Request' => __DIR__ . '/../..' . '/app/classes/request.php',
        'Router' => __DIR__ . '/../..' . '/app/classes/router.php',
        'StatusesModel' => __DIR__ . '/../..' . '/app/models/statuses.model.php',
        'StatusesView' => __DIR__ . '/../..' . '/app/views/statuses.view.php',
        'TasksModel' => __DIR__ . '/../..' . '/app/models/tasks.model.php',
        'UsersModel' => __DIR__ . '/../..' . '/app/models/users.model.php',
        'View' => __DIR__ . '/../..' . '/app/classes/view.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit34e26c180b5bbf3b3974d889e08c513e::$classMap;

        }, null, ClassLoader::class);
    }
}
