<?php

namespace App\Http\ApiV1\Modules\Foos\Resources;

use App\Domain\Users\Models\Users;
use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin Users
 */
class UsersResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'region' => $this->region,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];
    }
}
