<?php

use App\Http\Controllers\WorkflowController;
use App\Models\Workflow;
use function Pest\Laravel\post;

uses(\Illuminate\Foundation\Testing\LazilyRefreshDatabase::class);

it('creates a workflow', function () {
    post(
        action([WorkflowController::class, 'store']),
        [
            'name' => 'workflow',
            'description' => 'workflow description',
        ]
    )->assertCreated();

    $this->assertDatabaseHas(Workflow::class, [
        'name' => 'workflow',
        'slug' => 'workflow',
        'description' => 'workflow description',
    ]);
});
