<?php

namespace Biologic\Core\Models;

use Illuminate\Database\Eloquent\Model;

class ReportRevision extends Model
{
    protected $connection = 'operational';

    protected $fillable = ['content'];

    public function report()
    {
        return $this->belongsTo('Biologic\Core\Models\Report');
    }
}

