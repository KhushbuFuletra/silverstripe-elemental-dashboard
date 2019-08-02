<?php

namespace Symbiote\ElementalDashboard\Pages;

use Page;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\LiteralField;
use DNADesign\Elemental\Models\ElementalArea;

class Dashboard extends Page {

    private static $db = [
        'LeftColumnWidth' => 'Int',
        'CenterColumnWidth' => 'Int',
        'RightColumnWidth' => 'Int',
    ];

    private static $table_name = 'Dashboard';

    private static $has_one = array(
        'LeftColumn' => ElementalArea::class,
        'RightColumn' => ElementalArea::class
    );

    private static $owns = array(
        'LeftColumn',
        'RightColumn'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $leftColumn = new DropdownField('LeftColumnWidth', 'Left Column Width', range(0,12));
        $leftColumn->setDescription('Addition of all the three columns width should be 12.');
        $fields->addFieldToTab('Root.Main', $leftColumn ,'LeftColumn');
        $fields->addFieldsToTab('Root.Main', new LiteralField('ElementalAreaLeft', '<h2>Elemental area - Left</h2>'), 'LeftColumnWidth');

        $centerColumn = new DropdownField('CenterColumnWidth', 'Center Column Width', range(0,12));
        $centerColumn->setDescription('Addition of all the three columns width should be 12.');
        $fields->addFieldToTab('Root.Main', $centerColumn, 'ElementalArea');
        $fields->addFieldsToTab('Root.Main', new LiteralField('ElementalAreaCenter', '<h2>Elemental area - Center</h2>'), 'CenterColumnWidth');

        $rightColumn = new DropdownField('RightColumnWidth', 'Right Column Width', range(0,12));
        $rightColumn->setDescription('Addition of all the three columns width should be 12.');
        $fields->addFieldToTab('Root.Main', $rightColumn , 'RightColumn');
        $fields->addFieldsToTab('Root.Main', new LiteralField('ElementalAreaRight', '<h2>Elemental area - Right</h2>'), 'RightColumnWidth');
        return $fields;
    }

}
