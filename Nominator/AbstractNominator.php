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

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @author Jorge Vahldick <jorge.dev@outlook.com>
 */
abstract class AbstractNominator implements NominatorInterface
{

    /**
     * Guess the extension of the given file.
     *
     * @param   UploadedFile    $file
     *
     * @return  string|null
     */
    protected function getExtension(UploadedFile $file)
    {
        $originalName = $file->getClientOriginalName();

        if ($extension = pathinfo($originalName, PATHINFO_EXTENSION)) {
            return $extension;
        }

        if ($extension = $file->guessExtension()) {
            return $extension;
        }

        return null;
    }

}