<?php

/*
 * This file is part of the Bavarian package.
 *
 * (c) Jorge Vahldick <jorge.dev@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bavarian\Component\Uploader\Nominator;

use Bavarian\Component\Uploader\Model\MediaInterface;

/**
 * @author Jorge Vahldick <jorge.dev@outlook.com>
 */
interface NominatorInterface
{

    /**
     * Generates store file name.
     *
     * @param MediaInterface $media
     */
    public function generate(MediaInterface $media);

}