<?php

/*
 * This file is part of the Bavarian package.
 *
 * (c) Jorge Vahldick <jorge.dev@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bavarian\Component\Uploader\Factory;

/**
 * @author Jorge Vahldick <jorge.dev@outlook.com>
 */
class Factory implements FactoryInterface
{

    /**
     * @var string
     */
    protected $class;

    /**
     * Factory constructor.
     *
     * @param   string  $className
     */
    public function __construct($className)
    {
        $this->class = $className;
    }

    /**
     * {@inheritdoc}
     */
    public function createNew()
    {
        return new $this->class();
    }

}