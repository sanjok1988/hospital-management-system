<?php

namespace App\Modules\Employees\Repository;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Contracts\EloquentRepository;
use App\Modules\Employees\Models\Employees;
use App\Modules\Employees\Repository\IEmployees;

class EmployeesRepository extends EloquentRepository implements IEmployees
{
    /**
     * @Override
     */
    public function getModel()
    {
        return Employees::class;
    }

    public function createEmployee(array $data){
        return $this->_model->insertGetId($data);
       
    }
    public function createUserAccount($id) {
        $data = [];
        $employee = Employees::select('first_name', 'work_email')->find($id);
        $data['name'] = $employee->first_name;
        $data['email'] = $employee->work_email;
        $data['password'] = Hash::make($employee->first_name);
        return User::create($data);
    }
}
