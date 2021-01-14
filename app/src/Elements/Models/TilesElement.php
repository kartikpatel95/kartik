<?php

namespace App\Elements\Models;

use App\Extensions\BGColourExtension;
use App\Models\Tiles;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

/**
 * Class TilesElement
 *
 * @package App\Elements\Models
 */
class TilesElement extends BaseElement
{

    /**
     * @var string
     */
    private static $table_name = "TilesElement";

    /**
     * @var string
     */
    private static $singular_name = "Tiles Element";

    /**
     * @var string
     */
    private static $plural_name = "Tiles Elements";

    /**
     * @var string
     */
    private static $icon = "font-icon-block-layout-5";

    /**
     * @var bool
     */
    private static $inline_editable = false;

    /**
     * @var array
     */
    private static $extensions = [
        BGColourExtension::class
    ];

    /**
     * @var array
     */
    private static $has_many = [
        'Tiles' => Tiles::class
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('Tiles');

        $fields->addFieldToTab('Root.Main', $this->getTilesGrid());

        return $fields;
    }

    /**
     * @return GridField
     */
    public function getTilesGrid(): GridField
    {
        $grid = GridField::create(
            'Tiles', 'Tiles', $this->Tiles(), GridFieldConfig_RecordEditor::create()
        );

        $grid->getConfig()->addComponent(new GridFieldOrderableRows('Sort'));

        return $grid;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return 'Tiles';
    }
}
