<?php namespace GeneaLabs\Bones\Keeper\Entities\Handlers;

use GeneaLabs\Bones\Marshal\Commands\CommandHandler;
use GeneaLabs\Bones\Marshal\Commands\CommandHandlerInterface;
use GeneaLabs\Bones\Keeper\Entities\Entity;

/**
 * Class AddEntityHandler
 * @package GeneaLabs\Bones\Keeper\Entities
 */
class ModifyEntityHandler extends CommandHandler implements CommandHandlerInterface
{
    /**
     * @param $command
     */
    public function handle($command)
    {
        $entity = Entity::modify($command);
        $this->dispatcher->dispatch($entity->release());
    }
}