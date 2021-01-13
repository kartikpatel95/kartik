<?php

namespace App\Elements\Models;

use App\Controllers\GoogleMapsController;
use BetterBrief\GoogleMapField;
use DNADesign\Elemental\Controllers\ElementController;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\FieldList;

/**
 * Class GoogleMapElement
 *
 * @package App\Elements\Models
 */
class GoogleMapElement extends BaseElement
{

    /**
     * @var string
     */
    private static $table_name = "GoogleMapElement";

    /**
     * @var string
     */
    private static $singular_name = "Google Map Element";

    /**
     * @var string
     */
    private static $plural_name = "Google Map Elements";

    /**
     * @var string
     */
    private static $icon = 'font-icon-p-map';

    /**
     * @var string
     */
    private static $description = "Google Map";

    /**
     * @var string
     */
    private static $controller_class = GoogleMapsController::class;

    /**
     * @var array
     */
    private static $db = [
        'Latitude' => 'Varchar',
        'Longitude' => 'Varchar',
        'ToolTip' => 'Text'
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();

        return $fields;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return "Google Map";
    }
}
