<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container15xS6a0\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container15xS6a0/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container15xS6a0.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container15xS6a0\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container15xS6a0\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '15xS6a0',
    'container.build_id' => '09f2f03c',
    'container.build_time' => 1644849727,
], __DIR__.\DIRECTORY_SEPARATOR.'Container15xS6a0');
