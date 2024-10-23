<?php

namespace App\Repositories\Madein;

use App\Models\Madein;
use App\Repositories\BaseRepository;

class MadeinRepository extends BaseRepository implements MadeinRepositoryInterface   
{
    public function getModel(){
        return Madein::class;
    }
}

?>