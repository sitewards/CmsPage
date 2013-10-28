<?php
/**
 * Sitewards_CmsPage_Model_Config
 *  Add the new image attributes to the revision controlled list
 *
 * @category    Sitewards
 * @package     Sitewards_CmsPage
 * @copyright   Copyright (c) 2013 Sitewards GmbH (http://www.sitewards.com/)
 */
class Sitewards_CmsPage_Model_Config extends Enterprise_Cms_Model_Config
{
    /**
     * Add the attributes to the controlled list
     *  - teaser_img_src
     *  - teaser_img_alt
     * @var array
     */
    protected $_revisionControlledAttributes = array(
        'page' => array(
            'root_template',
            'meta_keywords',
            'meta_description',
            'content_heading',
            'content',
            'layout_update_xml',
            'custom_theme',
            'custom_root_template',
            'custom_layout_update_xml',
            'custom_theme_from',
            'custom_theme_to',
            'teaser_img_src',
            'teaser_img_alt',
        ));
}
