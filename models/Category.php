<?php namespace LZaplata\Timelines\Models;

use Model;
use October\Rain\Database\Traits\SortableRelation;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use SortableRelation;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'lzaplata_timelines_categories';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        "name"  => "required",
        "slug"  => ["required", "regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i", "unique:lzaplata_timelines_categories,slug,NULL,id,deleted_at,NULL"]
    ];

    public $belongsToMany = [
        "events"    => [
            Event::class,
            "table"         => "lzaplata_timelines_events_categories",
            "pivotSortable" => "sort_order",
        ],
        "events_count" => [
            Event::class,
            "table" => "lzaplata_timelines_events_categories",
            "count" => true
        ],
    ];
}
