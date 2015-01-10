<?php namespace GeneaLabs\Bones\Keeper\Entities\Events;

use GeneaLabs\Bones\Keeper\Entities\Entity;

class EntityWasRemovedEvent
{
    public $entity;

    public function __construct(Entity $entity)
    {
        $this->entity = $entity;
    }
}