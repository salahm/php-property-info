<?php

/*
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PropertyInfo\Extractors;

/**
 * Description Extractor Interface.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface DescriptionExtractorInterface
{
    /**
     * Extracts the short description of the property.
     *
     * @return string|null
     */
    public function extractShortDescription();

    /**
     * Extracts the long description of the property.
     *
     * @return string|null
     */
    public function extractLongDescription();
}
