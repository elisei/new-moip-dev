<?php
/**
 * Copyright © Moip by PagSeguro. All rights reserved.
 *
 * @author    Bruno Elisei <brunoelisei@o2ti.com>
 * See COPYING.txt for license details.
 */

namespace Moip\Magento2\Block\Adminhtml\System\Config;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Street - Defines address lines.
 */
class Street implements ArrayInterface
{
    /**
     * Returns Options.
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            null => __('Please select'),
            '0'  => __('1st line of the street'),
            '1'  => __('2st line of the street'),
            '2'  => __('3st line of the street'),
            '3'  => __('4st line of the street'),
        ];
    }
}
