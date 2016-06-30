<?php

/*
 * This file is part of the Bavarian package.
 *
 * (c) Jorge Vahldick <jorge.dev@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bavarian\Component\Uploader\Context;

/**
 * @author Jorge Vahldick <jorge.dev@outlook.com>
 */
class Context implements ContextInterface
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $mappings = [];

    /**
     * @var string
     */
    protected $uploadDir;

    /**
     * @var string
     */
    protected $nominator;

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;

        return $name;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setMappings($mappings)
    {
        $this->mappings = $mappings;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMappings()
    {
        return $this->mappings;
    }

    /**
     * {@inheritdoc}
     */
    public function setNominator($service)
    {
        $this->nominator = $service;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNominator()
    {
        return $this->nominator;
    }

    /**
     * {@inheritdoc}
     */
    public function setUploadDir($uploadDir)
    {
        $this->uploadDir = $uploadDir;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUploadDir()
    {
        return $this->uploadDir;
    }

}