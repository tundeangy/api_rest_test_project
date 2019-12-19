<?php
namespace UserBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Psr\Log\LoggerInterface;


class LogListener
{


    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $this->logger->info('Modification de l\'utilisateur : '.$entity->getId().'  '.$entity->getFirstName().' '.$entity->getLastName());
    }
    public function postRemove(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $this->logger->alert('Suppression de l\'utilisateur : '.$entity->getId().'  '.$entity->getFirstName().' '.$entity->getLastName());

    }
}