<?php


namespace SnakeCodder\Testimonials\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface TestimonialRepositoryInterface
{

    /**
     * Save testimonial
     * @param \SnakeCodder\Testimonials\Api\Data\TestimonialInterface $testimonial
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \SnakeCodder\Testimonials\Api\Data\TestimonialInterface $testimonial
    );

    /**
     * Retrieve testimonial
     * @param string $testimonialId
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($testimonialId);

    /**
     * Retrieve testimonial matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete testimonial
     * @param \SnakeCodder\Testimonials\Api\Data\TestimonialInterface $testimonial
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \SnakeCodder\Testimonials\Api\Data\TestimonialInterface $testimonial
    );

    /**
     * Delete testimonial by ID
     * @param string $testimonialId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($testimonialId);
}
