<?php

namespace App\Modules\Jobs\Repository;

use App\Contracts\EloquentRepository;
use App\Modules\Jobs\Models\Jobs;
use App\Modules\Jobs\Repository\IJobs;

class JobsRepository extends EloquentRepository implements IJobs
{
    /**
     * @Override
     */
    public function getModel()
    {
        return Jobs::class;
    }
}
