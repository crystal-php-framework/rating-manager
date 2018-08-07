<?php
declare(strict_types=1);
/**
 * Crystal Rating Manager.
 *
 * @author Nicholas E. <https://github.com/isupozoy> Maintainer.
 * @link   <https://github.com/crystal/rating-manager> Github Repository.
 */

namespace Crystal\Chess;

/**
 * A trait that verifies a rating.
 */
trait RatingTrait
{

    /**
     * Verify the rating.
     *
     * @param mixed $rating The rating to verify.
     *
     * @return RatingInterface Returns the rating instance.
     */
    public function isRating($rating): bool
    {
        if (!is_int($rating) && !is_string($rating))
        {
            return false;
        }
        if (intval($rating) < 1 || intval($rating) > 7000)
        {
            return false;
        }
        return true;
    }
}
