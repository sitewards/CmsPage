<?php
/**
 * SQL setup
 *  - add two additional fields to enterprise_cms_page table
 *
 * @category    Sitewards
 * @package     Sitewards_CmsTeaser
 * @copyright   Copyright (c) 2013 Sitewards GmbH (http://www.sitewards.com/)
 */

$oInstaller = $this;
$oInstaller->startSetup();

if ($oInstaller->tableExists($this->getTable('enterprise_cms/page_revision'))) {
    /* @var Varien_Db_Adapter_Pdo_Mysql $oConnection */
    $oConnection = $oInstaller->getConnection();
    $oConnection->addColumn(
        $this->getTable('enterprise_cms/page_revision'),
        'teaser_img_src',
        array(
            'type'     => Varien_Db_Ddl_Table::TYPE_TEXT,
            'nullable' => true,
            'comment'  => 'Teaser IMG-Src'
        )
    );

    $oConnection->addColumn(
        $this->getTable('enterprise_cms/page_revision'),
        'teaser_img_alt',
        array(
            'type'     => Varien_Db_Ddl_Table::TYPE_TEXT,
            'nullable' => true,
            'comment'  => 'Teaser IMG-Alt'
        )
    );
}

$oInstaller->endSetup();
