<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXypgeps\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXypgeps/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXypgeps.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerXypgeps\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerXypgeps\appProdProjectContainer(array(
    'container.build_hash' => 'Xypgeps',
    'container.build_id' => 'bc63699a',
    'container.build_time' => 1541883205,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXypgeps');
