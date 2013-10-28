<?php
/**
 * Sitewards_CmsPage_Model_Page_Revision
 *  Dispatch sitewards_cmspage_revision_save_before before the beforesave action
 *
 * @category    Sitewards
 * @package     Sitewards_CmsPage
 * @copyright   Copyright (c) 2013 Sitewards GmbH (http://www.sitewards.com/)
 */
class Sitewards_CmsPage_Model_Page_Revision extends Enterprise_Cms_Model_Page_Revision
{
    /**
     * Fire the event sitewards_cmspage_revision_save_before before the _beforeSave
     * This will catch the image being updated and increment the revsion_id
     *
     * @see Enterprise_Cms_Model_Resource_Page_Revision::_beforeSave()
     */
    protected function _beforeSave()
    {
        Mage::dispatchEvent('sitewards_cmspage_revision_save_before', array($this->_eventObject => $this));
        return parent::_beforeSave();
    }
}
