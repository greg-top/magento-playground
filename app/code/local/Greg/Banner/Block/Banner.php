<?php

/**
 * Class Greg_Banner_Block_Banner
 */
class Greg_Banner_Block_Banner extends  Mage_Core_Block_Template
{
    /**
     * @return $this|Mage_Core_Block_Abstract
     */
    protected function _beforeToHtml()
    {
        return $this;
    }

    /**
     * @return bool
     * @throws Mage_Core_Model_Store_Exception
     */
    public function render()
    {
        $isBannerText = $this->getBannerText();

        if($isBannerText) {
            return true;
        }
    }

    /**
     * @return string|null
     * @throws Mage_Core_Model_Store_Exception
     */
     public function getBannerText()
     {
         return Mage::app()->getStore()->getConfig('greg_banner/settings/text');
     }

     public function getBannerLink()
     {
         return Mage::app()->getStore()->getConfig('greg_banner/settings/link');
     }

    /**
     * @return string|null
     * @throws Mage_Core_Model_Store_Exception
     */
     public function getBannerPosition()
     {
         return Mage::app()->getStore()->getConfig('greg_banner/settings/position');
     }

    public function customizeBanner()
    {
        return Mage::app()->getStore()->getConfig('greg_banner/customization/enabled');
    }

     public function getBgColor()
     {
         return Mage::app()->getStore()->getConfig('greg_banner/customization/bg_color');
     }

     public function getFontColor()
     {
         return Mage::app()->getStore()->getConfig('greg_banner/customization/text_color');
     }
}