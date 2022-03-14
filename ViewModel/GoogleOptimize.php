<?php
declare(strict_types=1);

namespace MageSuite\GoogleOptimizeIntegration\ViewModel;

class GoogleOptimize implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \MageSuite\GoogleOptimizeIntegration\Helper\Configuration
     */
    protected $configuration;

    /**
     * @var \Magento\Framework\Serialize\SerializerInterface
     */
    protected $serializer;

    public function __construct(
        \MageSuite\GoogleOptimizeIntegration\Helper\Configuration $configuration,
        \Magento\Framework\Serialize\SerializerInterface $serializer
    ) {
        $this->configuration = $configuration;
        $this->serializer = $serializer;
    }

    public function isIntegrationEnabled(): bool
    {
        return $this->configuration->isIntegrationEnabled();
    }

    public function isAsyncScript(): bool
    {
        return $this->configuration->isAsyncScript();
    }

    public function getContainerId(): string
    {
        return $this->configuration->getContainerId();
    }

    public function isAntiFlickerEnabled(): bool
    {
        return $this->configuration->isAntiFlickerEnabled();
    }

    public function getContainerIdForAntiFlicker(): string
    {
        return $this->configuration->getContainerIdForAntiFlicker();
    }

    public function getAntiFlickerJsonConfig(): string
    {
        $includePathsUnserialized = $this->serializer->unserialize($this->configuration->getAntiFlickerIncludePaths());
        $includeMatchMediaUnserialized = $this->serializer->unserialize($this->configuration->getAntiFlickerIncludeMatchMedia());

        $includePaths = [];
        $includeMatchMedia = [];

        foreach ($includePathsUnserialized as $path) {
            $includePaths[] = $path['expression'];
        }

        foreach ($includeMatchMediaUnserialized as $matchMedia) {
            $includeMatchMedia[] = $matchMedia['expression'];
        }

        return $this->serializer->serialize([
            'includePaths' => $includePaths,
            'includeMatchMedia' => $includeMatchMedia,
        ]);
    }
}
