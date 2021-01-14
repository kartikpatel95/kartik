<?php

namespace App\Elements\Models;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextareaField;

/**
 * Class BannerElement
 *
 * @package App\Elements
 */
class BannerElement extends BaseElement
{

    /**
     * @var string
     */
    private static $table_name = "BannerElement";

    /**
     * @var string
     */
    private static $singular_name = "Banner Element";

    /**
     * @var string
     */
    private static $plural_name = "Banner Elements";

    /**
     * @var string
     */
    private static $icon = 'font-icon-block-banner';

    /**
     * @var string
     */
    private static $description = "Banner";

    /**
     * @var array
     */
    private static $db = [
        'Height' => "Enum('300,350,400,450,500')",
        'ImageLength' => "Enum('full,container')",
        'Content' => 'HTMLText',
        'ShowBreadCrumbs' => 'Boolean'
    ];

    /**
     * @var array
     */
    private static $defaults = [
        'ShowBreadCrumbs' => 0
    ];

    /**
     * @var array
     */
    private static $has_one = [
        'Banner' => Image::class
    ];

    /**
     * @var array
     */
    private static $owns = [
        'Banner'
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab(
            'Root.Main',
            UploadField::create('Banner')
                       ->setFolderName('Banners'),
        'Content');
        $fields->dataFieldByName('ImageLength')->setTitle('Image Length');

        $fields->insertBefore('Banner', CheckboxField::create('ShowBreadCrumbs'));

        return $fields;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return "Banner";
    }
}
