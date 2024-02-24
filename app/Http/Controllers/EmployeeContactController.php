<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\UpdateEmployeeContactRequest;
use App\Models\Employee;
use Illuminate\Http\Response;

class EmployeeContactController extends Controller
{
    public function update(UpdateEmployeeContactRequest $request, Employee $employee)
    {
        $employee->contact()->updateOrCreate(
            ['employee_uuid' => $employee->uuid],
            $request->validated()
        );

        return response()->json([
            'status' => 'success',
            'msg' => '....',
            'url' => '...'
        ], Response::HTTP_OK);
    }
}
