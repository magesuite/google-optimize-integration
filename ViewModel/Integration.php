<?php
declare(strict_types=1);

namespace MageSuite\GoogleOptimizeIntegration\ViewModel;

class Integration implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \MageSuite\GoogleOptimizeIntegration\Helper\Configuration
     */
    protected $configuration;


    public function __construct(
        \MageSuite\GoogleOptimizeIntegration\Helper\Configuration $configuration
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
