<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\Symfony\Set\SensiolabsSetList;
use Rector\Symfony\Set\SymfonySetList;

return function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
      __DIR__ . '/src',
    ]);
    $rectorConfig->sets([
      \Rector\Set\ValueObject\LevelSetList::UP_TO_PHP_82,
      DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES,
      SymfonySetList::ANNOTATIONS_TO_ATTRIBUTES,
      SymfonySetList::SYMFONY_64,
      SymfonySetList::SYMFONY_CODE_QUALITY,
      SymfonySetList::SYMFONY_CONSTRUCTOR_INJECTION,
    ]);
};
