<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPlPR5q6\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPlPR5q6/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPlPR5q6.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPlPR5q6\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPlPR5q6\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'PlPR5q6',
    'container.build_id' => '8b79d8f3',
    'container.build_time' => 1651879915,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPlPR5q6');
