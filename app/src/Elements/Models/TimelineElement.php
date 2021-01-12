<?php

namespace App\Elements\Models;

use App\Models\Timeline;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

/**
 * Class TimelineElement
 *
 * @package App\Elements\Models
 */
class TimelineElement extends BaseElement
{

    /**
     * @var string
     */
    private static $table_name = "TimelineElement";

    /**
     * @var string
     */
    private static $singular_name = "Timeline Element";

    /**
     * @var string
     */
    private static $plural_name = "Timeline Elements";

    /**
     * @var string
     */
    private static $icon = 'font-icon-chart-line';

    /**
     * @var string
     */
    private static $description = "Timeline";

    /**
     * @var bool
     */
    private static $inline_editable = false;

    /**
     * @var array
     */
    private static $has_many = [
        'Timelines' => Timeline::class
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('Timelines');

        $fields->addFieldToTab('Root.Main', $this->getTileElementGrid());

        return $fields;
    }

    public function getTileElementGrid()
    {
        $grid = GridField::create(
            'Timelines',
            'Timelines',
            $this->Timelines(),
            GridFieldConfig_RecordEditor::create()
        );

        return $grid;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return "Timeline";
    }
}
