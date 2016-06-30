<?php

/*
 * This file is part of the Bavarian package.
 *
 * (c) Jorge Vahldick <jorge.dev@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Bavarian\Component\Uploader\Model;

use Bavarian\Component\Uploader\Model\MediaInterface;
use PhpSpec\ObjectBehavior;

/**
 * @author Jorge Vahldick <jorge.dev@outlook.com>
 */
class MediaSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Bavarian\Component\Uploader\Model\Media');
    }

    function it_implements_Bavarian_media_interface()
    {
        $this->shouldImplement(MediaInterface::class);
    }

    function it_has_no_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }

    function it_has_no_file_by_default()
    {
        $this->getFile()->shouldReturn(null);
        $this->hasFile()->shouldReturn(false);
    }

    function its_file_is_mutable()
    {
        $this->setFile(new \SplFileInfo(''));
        $this->getFile()->shouldHaveType('\SplFileInfo');
        $this->hasFile()->shouldReturn(true);
    }

    function it_has_no_filename_by_default()
    {
        $this->getFilename()->shouldReturn(null);
    }

    function its_filename_is_mutable()
    {
        $this->setFilename('filename');
        $this->getFilename()->shouldReturn('filename');
    }

    function it_has_no_original_filename_by_default()
    {
        $this->getOriginalFilename()->shouldReturn(null);
    }

    function its_original_filename_is_mutable()
    {
        $this->setOriginalFilename('original_filename');
        $this->getOriginalFilename()->shouldReturn('original_filename');
    }

    function it_has_no_size_by_default()
    {
        $this->getSize()->shouldReturn(null);
    }

    function its_size_is_mutable()
    {
        $this->setSize(2005);
        $this->getSize()->shouldReturn(2005);

        $this->setSize('2005');
        $this->getSize()->shouldReturn(2005);
    }

}