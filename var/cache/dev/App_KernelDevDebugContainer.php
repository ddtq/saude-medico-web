<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBmrxbOT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBmrxbOT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBmrxbOT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBmrxbOT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBmrxbOT\App_KernelDevDebugContainer([
    'container.build_hash' => 'BmrxbOT',
    'container.build_id' => 'e4a7e68a',
    'container.build_time' => 1585768298,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBmrxbOT');
