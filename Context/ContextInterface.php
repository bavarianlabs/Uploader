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
interface ContextInterface
{

    public function setName($name);

    public function getName();

    public function setMappings($mappings);

    public function getMappings();

    public function setUploadDir($path);

    public function getUploadDir();

    public function setNominator($service);

    public function getNominator();

}