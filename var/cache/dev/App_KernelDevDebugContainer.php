<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2oy9TFm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2oy9TFm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2oy9TFm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2oy9TFm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2oy9TFm\App_KernelDevDebugContainer([
    'container.build_hash' => '2oy9TFm',
    'container.build_id' => 'b61b460d',
    'container.build_time' => 1674154618,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2oy9TFm');
