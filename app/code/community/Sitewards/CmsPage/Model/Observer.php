<?php
/**
 * Sitewards_CmsPage_Model_Observer
 *  Class that observes the following events
 *  - sitewards_cmspage_revision_save_before
 *      upload/delete teaser image files
 *
 * @category    Sitewards
 * @package     Sitewards_CmsPage
 * @copyright   Copyright (c) 2013 Sitewards GmbH (http://www.sitewards.com/)
 */
class Sitewards_CmsPage_Model_Observer extends Sitewards_CmsTeaser_Model_Observer
{
    /**
     * Observe the action enterprise_cms_revision_save_before
     *  - Delete the file and update the attribute with delete is requested
     *  - Upload the and update the page attribute when an upload is required
     * @param Varien_Event_Observer $oObserver
     */
    public function sitewardsCmsPageRevisionSaveBefore(Varien_Event_Observer $oObserver)
    {
        $oRevision = $oObserver->getData('revision');
        $this->uploadImage($oRevision);
    }
}
