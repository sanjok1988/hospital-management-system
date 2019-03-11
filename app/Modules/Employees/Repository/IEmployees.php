<?php

namespace App\Modules\Employees\Repository;

use App\Contracts\RepositoryInterface;

interface IEmployees extends RepositoryInterface
{
    function createEmployee(array $data);
    function createUserAccount($id);

}
