<?php
namespace App\Modules\Vacancy\Repository;

use App\Contracts\EloquentRepository;

use App\Modules\Vacancy\Models\Vacancy;
use App\Modules\Vacancy\Repository\IVacancy;

class VacancyRepository extends EloquentRepository implements IVacancy
{
    /**
     * @Override
     *
     * @return Object
     */
    public function getModel()
    {
        return Vacancy::class;
    }
}
