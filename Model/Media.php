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
class Media implements MediaInterface
{

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \SplFileInfo
     */
    protected $file;

    /**
     * @var string
     */
    protected $filename;

    /**
     * @var string
     */
    protected $originalFilename;

    /**
     * @var string
     */
    protected $mimeType;

    /**
     * @var integer
     */
    protected $size;

    /**
     * @var string
     */
    protected $path;

    /**
     * Sets object's id
     *
     * @return  int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setFile(\SplFileInfo $file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * {@inheritdoc}
     */
    public function hasFile()
    {
        return $this->file !== null;
    }

    /**
     * {@inheritdoc}
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * {@inheritdoc}
     */
    public function setOriginalFilename($originalFilename)
    {
        $this->originalFilename = $originalFilename;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOriginalFilename()
    {
        return $this->originalFilename;
    }

    /**
     * {@inheritdoc}
     */
    public function setSize($size)
    {
        $this->size = (int) $size;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * {@inheritdoc}
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMimeType()
    {
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return $this->path;
    }

}