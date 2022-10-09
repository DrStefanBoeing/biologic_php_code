<?php
namespace Biologic\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $connection = 'operational';

    protected $fillable = ['user_id', 'authable_id', 'authable_type', 'type'];

    public function authable()
    {
        return $this->morphTo();
    }
}
