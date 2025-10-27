<?php namespace LZaplata\Timelines\Models;

use Model;
use October\Rain\Database\Traits\SortableRelation;

/**
 * Model
 */
class Timeline extends Model
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
    public $table = 'lzaplata_timelines_timelines';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        "name"  => "required",
        "slug"  => ["required", "regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i", "unique:lzaplata_timelines_timelines,slug,NULL,id,deleted_at,NULL"]
    ];

    /**
     * @var array
     */
    public $belongsToMany = [
        "categories"    => [
            Category::class,
            "table"         => "lzaplata_timelines_timelines_categories",
            "pivotSortable" => "sort_order",
        ],
    ];
}
