<?php

namespace AppBundle\EventListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\EntityManager;

class OnConnect
{

    public function postConnect($event)
    {
        $conn = $event->getConnection();
        $conn->executeQuery("SET NAMES UTF8");
    }

}
