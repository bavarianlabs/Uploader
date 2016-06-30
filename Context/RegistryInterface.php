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
interface RegistryInterface
{

    /**
     * @return array
     */
    public function all();

    /**
     * @param string    $identifier
     * @param mixed     $mapping
     *
     * @throws \InvalidArgumentException
     */
    public function register($identifier, $mapping);

    /**
     * @param string $identifier
     *
     * @throws NonExistingServiceException
     */
    public function unregister($identifier);

    /**
     * @param string $identifier
     *
     * @return bool
     */
    public function has($identifier);

    /**
     * @param string $identifier
     *
     * @return object
     *
     * @throws NonExistingServiceException
     */
    public function get($identifier);

}