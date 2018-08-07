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
 * Represents a single rating.
 */
class Rating implements RatingInterface
{
    use RatingTrait;
    use RatingConvertTrait;

    /**
     * @var int The rating.
     */
    private $rating;

    /**
     * Construct a new rating declaration.
     *
     * @param mixed $rating The rating to use.
     *
     * @return void Returns nothing.
     */
    public function __construct($rating = null, $returnType = 'int')
    {
        if (!is_null($rating))
        {
            $this->set($rating, $returnType);
        }
    }

    /**
     * Set the rating.
     *
     * @param mixed  $rating     The rating to set.
     * @param string $returnType The return type expected.
     *
     * @return RatingInterface Returns the rating instance.
     */
    public function set($rating, $returnType = 'int'): RatingInterface
    {
        if (!$this->isRating($rating))
        {
            throw new Exception\InvalidOperationException('The rating passed is not valid.');
        }
        $this->rating = $this->convert($rating, $returnType);
    }
}
