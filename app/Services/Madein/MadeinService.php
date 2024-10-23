<?php

namespace App\Services\Madein;

use App\Repositories\Madein\MadeinRepositoryInterface;
use App\Services\BaseService;

class MadeinService extends BaseService implements MadeinServiceInterface   
{
    public $repository;

    public function __construct(MadeinRepositoryInterface $MadeinRepository)
    {
        $this->repository = $MadeinRepository;
    }  
}
