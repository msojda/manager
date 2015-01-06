<?php

/*
 * This file is part of the puli/repository-manager package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Puli\RepositoryManager\Discovery;

use Exception;
use Rhumsaa\Uuid\Uuid;
use RuntimeException;

/**
 * Thrown when a binding cannot be enabled.
 *
 * @since  1.0
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CannotEnableBindingException extends RuntimeException
{
    /**
     * Creates an exception for a UUID that could not be enabled.
     *
     * @param Uuid      $uuid        The UUID.
     * @param string    $packageName The name of the package.
     * @param int       $code        The exception code.
     * @param Exception $cause       The exception that caused this exception.
     *
     * @return static The created exception.
     */
    public static function forUuid(Uuid $uuid, $packageName, $code = 0, Exception $cause = null)
    {
        return new static(sprintf(
            'The binding with UUID "%s" in package "%s" cannot be enabled.',
            $uuid->toString(),
            $packageName
        ), $code, $cause);
    }
}