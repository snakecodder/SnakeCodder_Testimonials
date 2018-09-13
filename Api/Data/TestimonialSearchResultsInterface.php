<?php


namespace SnakeCodder\Testimonials\Api\Data;

interface TestimonialSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get testimonial list.
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface[]
     */
    public function getItems();

    /**
     * Set store_id list.
     * @param \SnakeCodder\Testimonials\Api\Data\TestimonialInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
