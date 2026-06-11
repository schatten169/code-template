<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Model
 */
trait HasUserStamp
{
    protected static function bootHasUserStamp()
    {
        // do this when system calls $model->create()
        static::creating(function ($model) {
            if (auth()->check()) {
                $model->created_by = auth()->id(); // needs to be adjusted (column & input)
                $model->updated_by = auth()->id(); // needs to be adjusted (column & input)
            }
        });

        // do this when system calls $model->update()
        static::updating(function ($model) {
            if (auth()->check()) {
                $model->updated_by = auth()->id(); // needs to be adjusted (column & input)
            }
        });
    }

    // extend model using relation to get creator using $model->creator()
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by'); // column needs to be adjusted
    }

    // extend model using relation to get updated using $model->updated()
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by'); // column needs to be adjusted
    }
}
