<?php namespace GeneaLabs\Bones\Keeper\Controllers;

class ErrorsController extends Controller
{
    public function invalid()
    {
        return view('genealabs-bones-keeper::errors.unauthorized');
    }

    public function modelValidation()
    {
        return view('genealabs-bones-keeper::errors.modelValidation');
    }
}
