<?php

namespace App\Models;

use App\Elements\Models\TimelineElement;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataObject;

/**
 * Class Timeline
 *
 * @package App\Models
 */
class Timeline extends DataObject
{

    /**
     * @var string
     */
    private static $table_name = 'Timeline';

    /**
     * @var string
     */
    private static $singular_name = 'Timeline';

    /**
     * @var string
     */
    private static $plural_name = 'Timelines';

    /**
     * @var array
     */
    private static $db = [
        'Message' => 'Varchar',
        'Date' => 'Date',
        'Active' => 'Boolean'
    ];

    /**
     * @var array
     */
    private static $has_one = [
        'TimelineElement' => TimelineElement::class
    ];

    /**
     * @var array
     */
    private static $summary_fields = [
        'Date',
        'Message',
        'Active.Nice' => 'Active'
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('TimelineElementID');

        return $fields;
    }
}
