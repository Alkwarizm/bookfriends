<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkflowRequest;
use App\Models\Workflow;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class WorkflowController extends Controller
{
    public function store(StoreWorkflowRequest $request): JsonResponse
    {
        Workflow::create($request->validated());

        return new JsonResponse(
            data: [],
            status: Response::HTTP_CREATED
        );
    }
}
