<?php

namespace App\Http\ApiV1\Modules\Foos\Controllers;

use App\Domain\Users\Actions\CreateUserAction;
use App\Http\ApiV1\Modules\Foos\Queries\UsersQuery;
use App\Http\ApiV1\Modules\Foos\Requests\CreateUsersRequest;
use App\Http\ApiV1\Modules\Foos\Resources\UsersResource;

class FoosController
{
    public function create(CreateUsersRequest $request, CreateUserAction $action): UsersResource
    {
        return new UsersResource($action->execute($request->validated()));
    }

    public function get(int $id, UsersQuery $query): UsersResource
    {
        return new UsersResource($query->findOrFail($id));
    }
}
