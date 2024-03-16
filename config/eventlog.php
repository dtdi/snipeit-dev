<?php

// config for Dtdi/Eventlog

use App\Models\Actionlog;

return [

  /*
     * This model will be used as base event.
     * It should implement the Spatie\Activitylog\Contracts\Activity interface
     * and extend Illuminate\Database\Eloquent\Model.
     */
  'event_model' => Actionlog::class,
  'event_id' => 'id',
  'timestamp' => 'created_at',
  'event_name' => 'action_type',
];
