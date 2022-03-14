<?php

namespace MageSuite\GoogleOptimizeIntegration\Helper;

class Configuration extends \Magento\Framework\App\Helper\AbstractHelper
{
    const XML_PATH_GOOGLE_OPTIMIZE_ENABLED = 'google_optimize/integration/enabled';
    const XML_PATH_GOOGLE_OPTIMIZE_ASYNC = 'google_optimize/integration/async';
    const XML_PATH_GOOGLE_OPTIMIZE_CONTAINER_ID = 'google_optimize/integration/container_id';
    const XML_PATH_GOOGLE_OPTIMIZE_ANTI_FLICKER_ENABLED = 'google_optimize/anti_flicker/enabled';
    const XML_PATH_GOOGLE_OPTIMIZE_ANTI_FLICKER_CONTAINER_ID = 'google_optimize/anti_flicker/container_id';
    const XML_PATH_GOOGLE_OPTIMIZE_ANTI_FLICKER_INCLUDE_PATHS = 'google_optimize/anti_flicker/include_paths';
    const XML_PATH_GOOGLE_OPTIMIZE_ANTI_FLICKER_INCLUDE_MATCH_MEDIA = 'google_optimize/anti_flicker/include_match_media';

    public function isIntegrationEnabled(): bool
    {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_GOOGLE_OPTIMIZE_ENABLED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function isAsyncScript(): bool
    {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_GOOGLE_OPTIMIZE_ASYNC,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getContainerId(): string
    {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_GOOGLE_OPTIMIZE_CONTAINER_ID,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function isAntiFlickerEnabled(): bool
    {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_GOOGLE_OPTIMIZE_ANTI_FLICKER_ENABLED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getContainerIdForAntiFlicker(): string
    {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_GOOGLE_OPTIMIZE_ANTI_FLICKER_CONTAINER_ID,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getAntiFlickerIncludePaths(): string
    {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_GOOGLE_OPTIMIZE_ANTI_FLICKER_INCLUDE_PATHS,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getAntiFlickerIncludeMatchMedia(): string
    {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_GOOGLE_OPTIMIZE_ANTI_FLICKER_INCLUDE_MATCH_MEDIA,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
