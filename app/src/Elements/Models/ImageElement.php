<?php

namespace App\Elements\Models;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;

/**
 * Class ImageElement
 *
 * @package App\Elements\Models
 */
class ImageElement extends BaseElement
{

    /**
     * @var string
     */
    private static $table_name = "ImageElement";

    /**
     * @var string
     */
    private static $singular_name = "Image Element";

    /**
     * @var string
     */
    private static $plural_name = "Image Elements";

    /**
     * @var string
     */
    private static $icon = "font-icon-p-gallery-alt";

    /**
     * @var array
     */
    private static $has_one = [
        'Photo' => Image::class,
    ];

    /**
     * @var array
     */
    private static $owns = [
        'Photo'
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();

        $image = UploadField::create('Photo');
        $fields->addFieldToTab('Root.Main', $image);

        return $fields;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return 'Image';
    }
}
