<?php
namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;

abstract Repository implements RepositoryInterface
{
 
    public function __construct()
    {
        
    }
}

