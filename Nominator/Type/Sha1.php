<?php

/*
 * This file is part of the Bavarian package.
 *
 * (c) Jorge Vahldick <jorge.dev@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bavarian\Component\Uploader\Nominator\Type;

use Bavarian\Component\Uploader\Model\MediaInterface;

/**
 * @author Jorge Vahldick <jorge.dev@outlook.com>
 */
class Sha1 extends AbstractNominator
{

    /**
     * {@inheritdoc}
     */
    public function generate(MediaInterface $media)
    {
        $file = $media->getFile();
        $name = sha1_file($file);

        if ($extension = $this->getExtension($file)) {
            $name = sprintf('%s.%s', $name, $extension);
        }

        return $name;
    }

}