<?php

/*
 * This file is part of Chevereto.
 *
 * (c) Rodolfo Berrios <rodolfo@chevereto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Chevereto\Actions\Image;

use Chevere\Components\Action\Action;
use Chevere\Components\Parameter\Parameter;
use Chevere\Components\Parameter\Parameters;
use Chevere\Components\Response\ResponseSuccess;
use Chevere\Interfaces\Parameter\ArgumentsInterface;
use Chevere\Interfaces\Parameter\ParametersInterface;
use Chevere\Interfaces\Response\ResponseInterface;

class ValidateImage extends Action
{
    public function getParameters(): ParametersInterface
    {
        return (new Parameters)
            ->withAdded(new Parameter('filename'));
    }

    public function run(ArgumentsInterface $arguments): ResponseInterface
    {
        $image = $arguments->get('filename');
        // validate integrity
        // get real extension - fix it
        return new ResponseSuccess([]);
    }
}
