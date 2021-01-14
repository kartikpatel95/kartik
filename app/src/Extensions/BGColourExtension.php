<?php

namespace App\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;
use TractorCow\Colorpicker\Color;
use TractorCow\Colorpicker\Forms\ColorField;

/**
 * Class ColumnColourExtension
 *
 * @package App\Extensions
 */
class BGColourExtension extends DataExtension
{

    /**
     * @var array
     */
    private static $db = [
        'BgColor' => Color::class
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->insertAfter('Title',
            ColorField::create('BgColor', 'Background color')
        );
    }
}
