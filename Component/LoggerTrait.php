<?php
/**
 * LoggerTrait.php
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License, which
 * is bundled with this package in the file LICENSE.txt.
 *
 * It is also available on the Internet at the following URL:
 * https://docs.auroraextensions.com/magento/extensions/2.x/sampledata/LICENSE.txt
 *
 * @package       AuroraExtensions_SimpleReturnsSampleData
 * @copyright     Copyright (C) 2019 Aurora Extensions <support@auroraextensions.com>
 * @license       MIT License
 */
declare(strict_types=1);

namespace AuroraExtensions\SimpleReturnsSampleData\Component;

use Psr\Log\LoggerInterface;

trait LoggerTrait
{
    /** @property LoggerInterface $logger */
    private $logger;

    /**
     * @return LoggerInterface|null
     */
    public function getLogger(): ?LoggerInterface
    {
        return $this->logger;
    }
}
