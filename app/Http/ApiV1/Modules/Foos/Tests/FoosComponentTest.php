<?php

use App\Domain\Users\Models\Users;
use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');

test('POST /api/v1/users create success', function () {
    $request = [
        'name' => 'Test title',
        'email' => 'test news body',
        'phone_number' => '+7 000 000 00 00',
        'region' => 'Moscow',
    ];

    postJson('/api/v1/users', $request)
        ->assertStatus(201)
        ->assertJsonPath('data.name', $request['name'])
        ->assertJsonPath('data.email', $request['email'])
        ->assertJsonPath('data.phone_number', $request['phone_number'])
        ->assertJsonPath('data.region', $request['region']);

    assertDatabaseHas(Users::class, [
        'name' => $request['name'],
    ]);
});

test('GET /api/v1/users{id} get news success', function () {
    /** @var Users $users */
    $users = Users::factory()->create();

    getJson("/api/v1/users/{$users->id}")
        ->assertStatus(200)
        ->assertJsonPath('data.name', $users->name)
        ->assertJsonPath('data.email', $users->email)
        ->assertJsonPath('data.phone_number', $users->phone_number)
        ->assertJsonPath('data.region', $users->region);
});
