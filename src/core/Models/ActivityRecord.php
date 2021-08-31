<?php
namespace Biologic\Core\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityRecord extends Model
{
    protected $connection = 'operational';

    protected $fillable = ['email', 'request_uri', 'http_host', 'server_name', 'remote_addr', 'http_x_forwarded_for'];
}
