<?php
namespace App\Http\Traits;

use Illuminate\Support\Facades\Request;



class ActiveMenu
{    

    public function isAttendanceActive(){
        if(Request::is('employee') || Request::is('employee/attendance') || Request::is('admin/employees/profile')){
            return true;
        }
        return false;
    }

    public function isCompanyActive(){
        if(Request::is('admin/company') || Request::is('admin/company/create')){
            return true;
        }
        return false;
    }

    public function isEmployeeActive(){
        if(Request::is('admin/employees') || Request::is('admin/employees/create')){
            return true;
        }
        return false;
    }

    public function isPerformanceActive(){
        if(Request::is('review/select/candidate')){
            return true;
        }
        return false;
    }

    public function isDynamicFormActive(){
        if(Request::is('form/questionnaire') || Request::is('form/questionnaire/create') || Request::is('form') || Request::is('form/create')){
            return true;
        }
        return false;
    }

    public function isRolesActive(){
        if(Request::is('admin/roles') || Request::is('admin/roles/create')){
            return true;
        }
        return false;
    }
}