<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Model
 */
trait HasSoftDeleteFlag
{
    protected static function bootHasSoftDeleteFlag()
    {
        // do this when system calls $model delete related function
        static::deleting(function ($model) {
            // skip code below if system calls force delete (delete entry from db)
            if ($model->isForceDeleting ?? false) {
                return;
            }

            // update some field
            $model->is_deleted = 1;

            // add user who deleted
            if (auth()->check()) {
                $model->deleted_by = auth()->id(); // needs to be adjusted (column & input)
            }

            $model->saveQuietly();
        });

        // do this when system calls $model restore related function, restore from deleted state
        static::restoring(function ($model) {
            $model->is_deleted = 0; // needs to be adjusted (column & input)

            // optionally set user who deleted info null
            // $model->deleted_by = null;
        });
    }

    // extend model using relation to get updated using $model->updated()
    public function deleter()
    {
        return $this->belongsTo(User::class, 'deleted_by'); // column needs to be adjusted
    }
}
