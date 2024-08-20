<?php

namespace App\Http\Controllers\api;


use App\Models\Student;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class StudentController extends Controller
{
    use DisablePagination;
    use DisableAuthorization;
    protected $model = Student::class;
}
