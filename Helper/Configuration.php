<?php

namespace MageSuite\GoogleOptimize\Helper;

class Configuration extends \Magento\Framework\App\Helper\AbstractHelper
{
    const XML_PATH_GOOGLE_OPTIMIZE_ENABLED = 'google_optimize/integration/enabled';
    const XML_PATH_GOOGLE_OPTIMIZE_ASYNC = 'google_optimize/integration/async';
    const XML_PATH_GOOGLE_OPTIMIZE_ANTI_FLICKER = 'google_optimize/integration/anti_flicker';
    const XML_PATH_GOOGLE_OPTIMIZE_CONTAINER_ID = 'google_optimize/integration/container_id';

    public function isEnabled(): bool
    {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_GOOGLE_OPTIMIZE_ENABLED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function isAsync(): bool
    {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_GOOGLE_OPTIMIZE_ASYNC,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function isAntiFlickerEnabled(): bool
    {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_GOOGLE_OPTIMIZE_ANTI_FLICKER,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getContainerId(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_GOOGLE_OPTIMIZE_CONTAINER_ID,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}