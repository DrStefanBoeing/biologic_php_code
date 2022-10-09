<?php
namespace Biologic\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $connection = 'operational';

    protected $fillable = ['name', 'project_code', 'description'];

    public function permissions()
    {
        return $this->morphMany('Biologic\Core\Models\Permission', 'authable');
    }

    public function experiments()
    {
        return $this->hasMany('Biologic\Core\Models\Experiment');
    }
}
