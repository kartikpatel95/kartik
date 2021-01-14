<?php

namespace App\Models;

use App\Elements\Models\TilesElement;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataObject;

/**
 * Class Tiles
 *
 * @package App\Model
 */
class Tiles extends DataObject
{

    /**
     * @var string
     */
    private static $table_name = "Tiles";

    /**
     * @var string
     */
    private static $singular_name = "Tile";

    /**
     * @var string
     */
    private static $plural_name = "Tiles";

    /**
     * @var array
     */
    private static $db = [
        'Title' => 'Varchar',
        'Sort' => 'Int'
    ];

    /**
     * @var array
     */
    private static $has_one = [
        'Photo' => Image::class,
        'TileElement' => TilesElement::class
    ];

    /**
     * @var array
     */
    private static $owns = [
        'Photo'
    ];

    private static $summary_fields = [
        'getSummaryImage' => 'Summary Photo',
        'Title' => 'Title'
    ];

    /**
     * @var array
     */
    private static $searchable_fields = [
        'Title'
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();
        $fields->removeFieldsFromTab('Root.Main', ['Sort', 'TileElementID']);

        return $fields;
    }

    public function getSummaryImage()
    {
        if ($this->Photo()->ID) {
            return $this->Photo()->ScaleWidth(100);
        }

        return '(no image)';
    }
}
