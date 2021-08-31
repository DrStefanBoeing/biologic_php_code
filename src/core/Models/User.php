<?php
namespace Biologic\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class User extends Model
{
    protected $connection = 'operational';

    protected $fillable = ['name', 'email'];

    public function permissions()
    {
        return $this->hasMany('Biologic\Core\Models\Permission');
    }

    // any kind of read access
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'permissions', 'user_id', 'authable_id')
            ->where('authable_type', 'projects');
    }

    // any kind of read access
    public function experiments()
    {
        return $this->belongsToMany(Experiment::class, 'permissions', 'user_id', 'authable_id')
            ->where('authable_type', 'experiments');
    }

    public function isSuperuser()
    {
        return $this->superuser === 1;
    }

    public function can(Model $model, $access=['READ']) {
        if($this->isSuperuser()) {
            return true;
        } else if($model instanceof Project) {
            return $model->permissions()->where('user_id', $this->id)
                ->whereIn('type', $access)->exists();
        } else if($model instanceof Experiment) {
            $project = $model->project;
            $project_level_access = empty($project) ? false : $model->project->permissions()->where('user_id', $this->id)
                ->whereIn('type', $access)->exists();
            $experiment_level_access = $model->permissions()->where('user_id', $this->id)
                ->whereIn('type', $access)->exists();
            return $project_level_access || $experiment_level_access;
        } else {
            return false;
        }
    }

    public function hasPermission(Model $model, $permission_type='READ')
    {
        return $model->permissions()->where('user_id', $this->id)->where('type', $permission_type)->exists();
    }

    public function hasReadPermission($model)
    {
        return $this->hasPermission($model, 'READ');
    }

    public function hasWritePermission($model)
    {
        return $this->hasPermission($model, 'WRITE');
    }

    public function canRead(Model $model)
    {
        return $this->can($model, ['READ', 'WRITE']);
    }

    public function canWrite(Model $model)
    {
        return $this->can($model, ['WRITE']);
    }
}


