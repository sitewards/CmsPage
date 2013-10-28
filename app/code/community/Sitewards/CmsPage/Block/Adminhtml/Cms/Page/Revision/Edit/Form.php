<?php
/**
 * Sitewards_CmsPage_Block_Adminhtml_Cms_Page_Revision_Edit_Form
 *  Class to update the enctype for the revision edit page
 *
 * @category    Sitewards
 * @package     Sitewards_CmsPage
 * @copyright   Copyright (c) 2013 Sitewards GmbH (http://www.sitewards.com/)
 */
class Sitewards_CmsPage_Block_Adminhtml_Cms_Page_Revision_Edit_Form
    extends Enterprise_Cms_Block_Adminhtml_Cms_Page_Revision_Edit_Form
{
    /**
     * Preparing from for revision page
     *
     * @return Enterprise_Cms_Block_Adminhtml_Cms_Page_Revision_Edit_Form
     */
    protected function _prepareForm()
    {
        $oForm = new Varien_Data_Form(
            array(
                'id'      => 'edit_form',
                'action'  => $this->getData('action'),
                'method'  => 'post',
                'enctype' => 'multipart/form-data'
            )
        );
        $oForm->setUseContainer(true);
        $this->setForm($oForm);
    }
}
