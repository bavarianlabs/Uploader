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

use Bavarian\Component\Uploader\Factory\FactoryInterface;

/**
 * @author Jorge Vahldick <jorge.dev@outlook.com>
 */
class Registry implements RegistryInterface
{

    /**
     * @var array
     */
    protected $contexts = [];

    /**
     * @var FactoryInterface
     */
    protected $contextFactory;

    /**
     * Registry constructor.
     *
     * @param FactoryInterface $contextFactory
     */
    public function __construct(FactoryInterface $contextFactory)
    {
        $this->contextFactory = $contextFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return $this->contexts;
    }

    /**
     * {@inheritdoc}
     */
    public function register($identifier, $mapping)
    {
        // TODO: Implement register() method.
    }

    /**
     * {@inheritdoc}
     */
    public function unregister($identifier)
    {
        // TODO: Implement unregister() method.
    }

    /**
     * {@inheritdoc}
     */
    public function has($identifier)
    {
        // TODO: Implement has() method.
    }

    /**
     * {@inheritdoc}
     */
    public function get($identifier)
    {
        // TODO: Implement get() method.
    }

}