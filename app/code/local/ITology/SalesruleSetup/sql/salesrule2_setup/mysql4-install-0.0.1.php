<?php


$installer = $this;
$installer->startSetup();

$installer->getConnection()
    ->addColumn(
        $installer->getTable('salesrule/rule'),
        'level',
        array(
            'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,
            'length'    => 255,
            'comment'  => 'Rule Level',
            'nullable' => true
        )
    );

$installer->endSetup();