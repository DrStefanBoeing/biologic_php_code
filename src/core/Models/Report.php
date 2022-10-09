<?php
namespace Biologic\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $connection = 'operational';

    protected $fillable = ['content'];

    public function experiment()
    {
        return $this->belongsTo('Biologic\Core\Models\Experiment');
    }

    public function revisions()
    {
        return $this->hasMany('Biologic\Core\Models\ReportRevision');
    }
}
