<?php

/*
 * This file is part of the Bavarian package.
 *
 * (c) Jorge Vahldick <jorge.dev@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bavarian\Component\Uploader\Model;

/**
 * @author Jorge Vahldick <jorge.dev@outlook.com>
 */
interface MediaInterface
{

    /**
     * Return object id.
     */
    public function getId();

    /**
     * Sets image file.
     *
     * @param   \SplFileInfo    $file
     *
     * @return  MediaInterface
     */
    public function setFile(\SplFileInfo $file);

    /**
     * Returns file.
     *
     * @return  \SplFileInfo
     */
    public function getFile();

    /**
     * Checks if the media has a file associated.
     *
     * @return  boolean
     */
    public function hasFile();

    /**
     * Sets name of file.
     *
     * @param   string  $filename
     *
     * @return  MediaInterface
     */
    public function setFilename($filename);

    /**
     * Gets file name.
     *
     * @return  string
     */
    public function getFilename();

    /**
     * Sets the original name of file.
     *
     * @param   string  $originalFilename
     *
     * @return  MediaInterface
     */
    public function setOriginalFilename($originalFilename);

    /**
     * Gets original file name.
     *
     * @return  string
     */
    public function getOriginalFilename();

    /**
     * Sets image size.
     *
     * @param   integer     $size
     *
     * @return  MediaInterface
     */
    public function setSize($size);

    /**
     * Returns image size.
     *
     * @return  integer
     */
    public function getSize();

    /**
     * Sets file MimeType.
     *
     * @param   string  $mimeType
     *
     * @return  MediaInterface
     */
    public function setMimeType($mimeType);

    /**
     * Gets file MimeType.
     *
     * @return  string
     */
    public function getMimeType();

    /**
     * Sets file storage path.
     *
     * @param   string  $path
     *
     * @return  MediaInterface
     */
    public function setPath($path);

    /**
     * Gets file storage path.
     *
     * @return  string
     */
    public function getPath();

}