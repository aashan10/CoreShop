<?php

declare(strict_types=1);

/*
 * CoreShop
 *
 * This source file is available under two different licenses:
 *  - GNU General Public License version 3 (GPLv3)
 *  - CoreShop Commercial License (CCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 *
 */

namespace CoreShop\Bundle\VariantBundle\Service;



use CoreShop\Component\Variant\Model\ProductVariantAwareInterface;

interface VariantGeneratorServiceInterface
{
    public function generateVariants(array $combinations, ProductVariantAwareInterface $product): array;

    public function generateVariant(array $attributeIds, ProductVariantAwareInterface $product): ?ProductVariantAwareInterface;

    public function generateCombinations(array $groupedAttributes, array $currentCombination, int $groupIndex, array &$combinations): void;
}