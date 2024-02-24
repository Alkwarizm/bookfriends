<?php

use App\Models\Activity;
use App\Models\Section;
use App\Models\Workflow;
use Illuminate\Database\Eloquent\Collection;

uses(\Illuminate\Foundation\Testing\LazilyRefreshDatabase::class);

it('has sections', function () {
    $workflow = Workflow::factory()
                ->has(Section::factory()->count(3))
                ->create();

    expect($workflow->sections)
        ->toBeInstanceOf(Collection::class)
        ->first()->toBeInstanceOf(Section::class);
});

//it('has activities through sections', function () {
//    $workflow = Workflow::factory()
//                ->has(
//                    Section::factory()->has(Activity::factory())
//                )
//                ->create();
//
//    expect($workflow->activities)
//        ->toBeInstanceOf(Collection::class)
//        ->first()->toBeInstanceOf(Activity::class);
//});

it('tinkers', function () {
    $response = \Illuminate\Support\Facades\Http::withHeaders([
        'Content-Type' => 'application/json',
        'Accept' => 'application/json'
    ])->post('https://api.morrisonrecordsbureau.com/api/token-auth/', [
        'username' => 'me@gmail.com',
        'password' => 'asdfasdf',
    ]);

    dump($response->body());
});

it('gets data', function () {
    $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxOTIsInVzZXJuYW1lIjoic3VwcmVtZWplZGlAbWFpbGluYXRvci5jb20iLCJleHAiOjE3MDE1MzM1OTAsImVtYWlsIjoic3VwcmVtZWplZGlAbWFpbGluYXRvci5jb20iLCJvcmlnX2lhdCI6MTcwMTUzMjM5MH0.6UBhfeSvVrQSQe52AdEopFQe1QJ1FM3fpH4TddnBsQg';

    $response = \Illuminate\Support\Facades\Http::withHeaders([
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
        'Authorization' => 'Token '. $token,
    ])
        ->get('https://api.morrisonrecordsbureau.com/api/user-data/');


    dump($response->body());
});

it('updates', function () {
    $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxOTIsInVzZXJuYW1lIjoic3VwcmVtZWplZGlAbWFpbGluYXRvci5jb20iLCJleHAiOjE3MDE1MzM1OTAsImVtYWlsIjoic3VwcmVtZWplZGlAbWFpbGluYXRvci5jb20iLCJvcmlnX2lhdCI6MTcwMTUzMjM5MH0.6UBhfeSvVrQSQe52AdEopFQe1QJ1FM3fpH4TddnBsQg';

    $response = \Illuminate\Support\Facades\Http::withHeaders([
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
        'Authorization' => 'Token '. $token,
    ])
        ->patch('https://api.morrisonrecordsbureau.com/api/users/192/', [
            'city' => 'Test City',
            'is_superuser' => true,
            'user_type' => 2,
            'account_type' => 2,
            'is_staff' => true,
//            'plan' => [
//                'id' => 3,
//            ],
            'plan_active' => true,
            'plan_start_date' => now()->format('Y-m-d'),
            'plan_end_date' => now()->addYear()->format('Y-m-d'),
        ]);

    dump($response->body());
});
