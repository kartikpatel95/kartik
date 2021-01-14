<?php

namespace App\Pages;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;

/**
 * Class HomePage
 *
 * @package App\Pages
 */
class HomePage extends \Page
{

    /**
     * @var string
     */
    private static $table_name = "HomePage";

    /**
     * @var string
     */
    private static $icon_class = 'font-icon-p-home';

    /**
     * @var array
     */
    private static $db = [
        'BannerMessage' => 'Text'
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

        $banner = UploadField::create('Banner', 'Banner');
        $fields->removeByName('ElementalArea');

        $banner->setFolderName('Banners');
        $fields->addFieldToTab('Root.Main', TextareaField::create('BannerMessage'), 'ElementalArea');
        $fields->addFieldToTab('Root.Main', $banner);

        return $fields;
    }
}
