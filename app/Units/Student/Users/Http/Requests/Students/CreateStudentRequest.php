<?php

namespace Emtudo\Units\Student\Users\Http\Requests\Students;

use Emtudo\Domains\Users\Student;
use Emtudo\Support\Http\Request;

class CreateStudentRequest extends Request
{
    public function rules()
    {
        return Student::rules()->creating();
    }
}
