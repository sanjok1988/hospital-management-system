<?php

namespace App\Modules\Company\Repository;

use App\Contracts\EloquentRepository;
use App\Contracts\RepositoryInterface;
use App\Modules\Company\Models\Company;
use App\Modules\Company\Repository\ICompany;

class CompanyRepository extends EloquentRepository implements ICompany
{
    /**
     * @Override
     */
    public function getModel()
    {
        return Company::class;
    }
}
