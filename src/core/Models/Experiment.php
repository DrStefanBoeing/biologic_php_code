<?php
namespace Biologic\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Experiment extends Model
{
    protected $connection = 'operational';

    protected $fillable = ['name', 'project_id', 'experiment_code', 'main_question', 'description', 'lead_scientist'];

    public function permissions()
    {
        return $this->morphMany('Biologic\Core\Models\Permission', 'authable');
    }

    public function project()
    {
        return $this->belongsTo('Biologic\Core\Models\Project');
    }

    public function report()
    {
        return $this->hasOne('Biologic\Core\Models\Report');
    }
}
