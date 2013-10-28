<?php
/**
 * Sitewards_CmsPage_Block_Breadcrumbs
 *  Reset the breadcrumbs
 *  Return the breadcrumbs
 *
 * @category    Sitewards
 * @package     Sitewards_CmsPage
 * @copyright   Copyright (c) 2013 Sitewards GmbH (http://www.sitewards.com/)
 */
class Sitewards_CmsPage_Block_Breadcrumbs extends Mage_Page_Block_Html_Breadcrumbs
{
    /**
     * Resets the breadcrumbs
     *
     * @return Sitewards_CmsPage_Block_Breadcrumbs
     */
    public function resetCrumbs()
    {
        $this->_crumbs = null;
        return $this;
    }

    /**
     * Return the breadcrumbs
     *
     * @return array|null
     */
    public function getCrumbs()
    {
        return $this->_crumbs;
    }

}
