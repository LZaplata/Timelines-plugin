<?php namespace LZaplata\Timelines\Components;

use Cms\Classes\ComponentBase;
use LZaplata\Timelines\Models\Timeline as TimelineModel;

/**
 * Timeline Component
 *
 * @link https://docs.octobercms.com/4.x/extend/cms-components.html
 */
class Timeline extends ComponentBase
{
    public function componentDetails()
    {
        return [
            "name"          => "lzaplata.timelines::lang.component.timeline.name",
            "description"   => "lzaplata.timelines::lang.component.timeline.description",
        ];
    }

    /**
     * @link https://docs.octobercms.com/4.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            "slug" => [
                "title"         => "lzaplata.timelines::lang.component.timeline.slug.title",
                "description"   => "lzaplata.timelines::lang.component.timeline.slug.description",
                "type"          => "dropdown",

            ],
        ];
    }

    /**
     * @return array
     */
    public function getSlugOptions(): array
    {
        return TimelineModel::orderBy("name", "ASC")
            ->lists("name", "slug");
    }

    /**
     * @return TimelineModel|null
     */
    public function timeline(): ?TimelineModel
    {
        return TimelineModel::where("slug", $this->property("slug"))
            ->first();
    }
}
