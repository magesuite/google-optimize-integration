<?php
declare(strict_types=1);

namespace MageSuite\GoogleOptimize\ViewModel;

class Integration implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \MageSuite\GoogleOptimize\Helper\Configuration
     */
    protected $configuration;


    public function __construct(
        \MageSuite\GoogleOptimize\Helper\Configuration $configuration
    ) {
        $this->configuration = $configuration;
    }

    public function isEnabled(): bool
    {
        return $this->configuration->isEnabled();
    }

    public function isAsync(): bool
    {
        return $this->configuration->isAsync();
    }

    public function isAntiFlickerEnabled(): bool
    {
        return $this->configuration->isAntiFlickerEnabled();
    }

    public function getContainerId(): string
    {
        return $this->configuration->getContainerId();
    }
}
