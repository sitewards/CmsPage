Sitewards CmsPage
=================

Extends Sitewards CmsTeaser Extension to be compatible with Enterprise edition.

Features
------------------
* Added Teaser attributes to cms Version Control
* Added breadcrumbs to Hierarchy Cms pages

File list
------------------
* app\code\community\Sitewards\CmsPage\Block\Adminhtml\Cms\Page\Revision\Edit\Form.php
    * Add the enctype of 'multipart/form-data' to allow for image uploading via the cms page form
* app\code\community\Sitewards\CmsPage\Block\Breadcrumbs.php
     * Reset the breadcrumbs
     * Return the breadcrumbs
* app\code\community\Sitewards\CmsPage\Block\Page.php
    * Add breadcrumbs to hierarchy cms pages
* app\code\community\Sitewards\CmsPage\etc\config.xml
    * Set-up block declaration
    * Set-up model declaration
    * Set-up resources
    * Add new page template
    * Set-up layout
    * Set-up event observers for
        * sitewards_cmspage_revision_save_before
* app\code\community\Sitewards\CmsPage\Model\Page\Revision.php
    * Dispatch sitewards_cmspage_revision_save_before before the beforesave action
* app\code\community\Sitewards\CmsPage\Model\Config.php
    * Add the new image attributes to the revision controlled list
* app\code\community\Sitewards\CmsPage\Model\Observer.php
    * Observes the following events
       * sitewards_cmspage_revision_save_before
         Upload/delete teaser image files
* app\code\community\Sitewards\CmsPage\sql\sitewards_cms_page_setup\mysql4-install-1.0.0.php
    * add two additional fields to cms_page table
* app\design\frontend\base\default\template\sitewards\cmsteaser\page\1columns-teaser.phtml
    * one column template with teaser in the header
* app\etc\modules\Sitewards_CmsTeaser.xml
    * Activate module
    * Specify community code pool
    * Set-up dependencies
        * Enterprise_Cms
        * Sitewards_CmsTeaser
