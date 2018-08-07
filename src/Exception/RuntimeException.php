<?php
declare(strict_types=1);
/**
 * Crystal Rating Manager.
 *
 * @author Nicholas E. <https://github.com/isupozoy> Maintainer.
 * @link   <https://github.com/crystal/rating-manager> Github Repository.
 */

namespace Crystal\Chess\Exception;

use RuntimeException as GlobalRuntimeException;

/**
 * Just a base runtime exception.
 */
class RuntimeException extends GlobalRuntimeException implements ExceptionInterface
{
}
