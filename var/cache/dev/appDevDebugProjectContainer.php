<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKxkxs5j\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKxkxs5j/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerKxkxs5j.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerKxkxs5j\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerKxkxs5j\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Kxkxs5j',
    'container.build_id' => '8fabfcee',
    'container.build_time' => 1541877853,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerKxkxs5j');
