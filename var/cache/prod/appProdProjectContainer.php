<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7p3knog\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7p3knog/appProdProjectContainer.php') {
    touch(__DIR__.'/Container7p3knog.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container7p3knog\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container7p3knog\appProdProjectContainer([
    'container.build_hash' => '7p3knog',
    'container.build_id' => '9b018f19',
    'container.build_time' => 1640059146,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7p3knog');
