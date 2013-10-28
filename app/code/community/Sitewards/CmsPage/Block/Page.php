<?php
/**
 * Sitewards_CmsPage_Block_Page
 *  Add breadcrumbs to hierarchy cms pages
 *
 * @category    Sitewards
 * @package     Sitewards_CmsPage
 * @copyright   Copyright (c) 2013 Sitewards GmbH (http://www.sitewards.com/)
 */
class Sitewards_CmsPage_Block_Page extends Mage_Cms_Block_Page
{
    /**
     * Add breadcrumbs to hierarchy cms pages
     *
     * @return mixed
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $oBreadcrumbs = $this->getLayout()->getBlock('breadcrumbs');
        if ($oBreadcrumbs) {
            $aCrumbs = $oBreadcrumbs->getCrumbs();

            // disable modifying crumbs if home-page or page not in hierarchy
            if (count($aCrumbs) <= 1 || !Mage::registry('current_cms_hierarchy_node')) {
                return $oBreadcrumbs;
            }

            $oTmpNode = Mage::registry('current_cms_hierarchy_node');
            $aResultReverse = array();
            while ($oTmpNode->getLevel() != 0) {
                $aResultReverse[] = $oTmpNode;
                $oTmpNode = Mage::getModel('enterprise_cms/hierarchy_node')->load($oTmpNode->getParentNodeId());
            }

            // adding homapage
            $oBreadcrumbs->resetCrumbs()->addCrumb(
                'home',
                array(
                    'label'=>Mage::helper('catalog')->__('Home'),
                    'title'=>Mage::helper('catalog')->__('Go to Home Page'),
                    'link'=>Mage::getBaseUrl()
                )
            );

            //adding other nodes (reverse)
            foreach (array_reverse($aResultReverse) as $oNode) {
                if ($oNode->getPageTitle()) {
                    $aTempNodeCrumb = array(
                        'label'=> $oNode->getPageTitle(),
                        'title'=> $oNode->getPageTitle()
                    );
                } else {
                    $aTempNodeCrumb = array(
                        'label'=> $oNode->getLabel(),
                        'title'=> $oNode->getLabel()
                    );
                }

                if ($oNode->getLevel() != count($aResultReverse)) {
                    $aTempNodeCrumb['link'] = Mage::getBaseUrl().$oNode->getRequestUrl();
                }
                $oBreadcrumbs->addCrumb($oNode->getPageIdentifier(), $aTempNodeCrumb);
            }
        }
        return $oBreadcrumbs;
    }
}
