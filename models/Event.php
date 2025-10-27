<?php namespace LZaplata\Timelines\Models;

use Model;
use October\Rain\Support\Facades\Str;
use System\Models\File;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'lzaplata_timelines_events';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        "name"  => "required",
        "slug"  => ["required", "regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i", "unique:lzaplata_timelines_events,slug,NULL,id,deleted_at,NULL"]
    ];

    /**
     * @var array
     */
    public $attachOne = [
        "image" => File::class,
    ];

    /**
     * @var array
     */
    public $belongsToMany = [
        "categories"    => [
            Category::class,
            "table" => "lzaplata_timelines_events_categories",
        ],
    ];

    /**
     * @return void
     */
    public function beforeValidate(): void
    {
        if (!$this->slug && $this->name) {
            $this->slug = Str::slug($this->name);
        }
    }
}
