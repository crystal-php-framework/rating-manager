<?php
declare(strict_types=1);
/**
 * Crystal Rating Manager.
 *
 * @author Nicholas E. <https://github.com/isupozoy> Maintainer.
 * @link   <https://github.com/crystal/rating-manager> Github Repository.
 */

namespace Crystal\Chess;

use function trim;
use function strtolower;

/**
 * A trait that converts a rating data type.
 */
trait RatingConvertTrait
{

    /**
     * Convert the rating.
     *
     * @param mixed  $rating     The rating to convert.
     * @param string $returnType The return type to use.
     *
     * @return mixed The converted rating.
     */
    public function convert($rating, string $returnType)
    {
        $returnType = trim($returnType);
        $returnType = strtolower($returnType);
        if ($returnType === 'int')
        {
            return (int) $rating;
        }
        return (string) $rating;
    }
}
