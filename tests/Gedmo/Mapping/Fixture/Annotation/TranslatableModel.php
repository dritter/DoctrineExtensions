<?php

declare(strict_types=1);

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tests\Mapping\Fixture\Annotation;

use Gedmo\Mapping\Annotation as Gedmo;

class TranslatableModel
{
    /**
     * @var string|null
     *
     * @Gedmo\Translatable()
     */
    private $title;

    /**
     * @var string|null
     *
     * @Gedmo\Translatable(fallback=true)
     */
    private $titleFallbackTrue;

    /**
     * @var string|null
     *
     * @Gedmo\Translatable(fallback=false)
     */
    private $titleFallbackFalse;
}
