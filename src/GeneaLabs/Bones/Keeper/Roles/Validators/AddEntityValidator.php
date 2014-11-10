<?php namespace GeneaLabs\Bones\Keeper\Roles\Validators;

use GeneaLabs\Bones\Keeper\BonesKeeperBaseValidator;
use GeneaLabs\Bones\Keeper\Roles\Commands\AddRoleCommand;

class AddRoleValidator extends BonesKeeperBaseValidator
{
    protected static $rules = [
        'name' => 'required',
        'description' => 'required',
    ];

    public function validate(AddRoleCommand $command)
    {
        $validator = $this->validator->make([
            'name' => $command->name,
            'description' => $command->description,
        ], static::$rules);
        if ($validator->fails()) {
            die('validation failed');
        }
        var_dump('validation passed');
    }
}
