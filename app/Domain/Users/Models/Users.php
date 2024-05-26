<?php

namespace App\Domain\Users\Models;

use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Users\Models\Tests\Factory\UsersFactory;
/**
 * @property int $id
 * @property string $name username
 * @property string $email user email
 * @property string $phone_number user number
 * @property string $region user region
 *
 * @property CarbonInterface|null $created_at
 * @property CarbonInterface|null $updated_at
 */
class Users extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'phone_number', 'region'];

    public static function factory(): UsersFactory
    {
        return UsersFactory::new();
    }
}
