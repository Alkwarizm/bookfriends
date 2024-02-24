<?php

uses(\Illuminate\Foundation\Testing\LazilyRefreshDatabase::class);

it('dispatches a job', function () {
    \Pest\Laravel\post(
        'dispatch-job'
    )->assertOk();
});
