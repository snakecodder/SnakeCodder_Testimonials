<?php


namespace SnakeCodder\Testimonials\Api\Data;

interface TestimonialInterface
{

    const TESTIMONIAL_ID = 'testimonial_id';
    const IS_ACTIVE = 'is_active';
    const WEBSITE = 'website';
    const STORE_ID = 'store_id';
    const PROFILE_IMG = 'profile_img';
    const TWITTER_URL = 'twitter_url';
    const FACEBOOK_URL = 'facebook_url';
    const CREATED_AT = 'created_at';
    const NAME = 'name';
    const CONTENT = 'content';
    const COMPANY = 'company';
    const EMAIL = 'email';
    const UPDATED_AT = 'updated_at';

    /**
     * Get testimonial_id
     * @return string|null
     */
    public function getTestimonialId();

    /**
     * Set testimonial_id
     * @param string $testimonialId
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setTestimonialId($testimonialId);

    /**
     * Get store_id
     * @return string|null
     */
    public function getStoreId();

    /**
     * Set store_id
     * @param string $storeId
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setStoreId($storeId);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setName($name);

    /**
     * Get email
     * @return string|null
     */
    public function getEmail();

    /**
     * Set email
     * @param string $email
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setEmail($email);

    /**
     * Get company
     * @return string|null
     */
    public function getCompany();

    /**
     * Set company
     * @param string $company
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setCompany($company);

    /**
     * Get profile_img
     * @return string|null
     */
    public function getProfileImg();

    /**
     * Set profile_img
     * @param string $profileImg
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setProfileImg($profileImg);

    /**
     * Get website
     * @return string|null
     */
    public function getWebsite();

    /**
     * Set website
     * @param string $website
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setWebsite($website);

    /**
     * Get facebook_url
     * @return string|null
     */
    public function getFacebookUrl();

    /**
     * Set facebook_url
     * @param string $facebookUrl
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setFacebookUrl($facebookUrl);

    /**
     * Get twitter_url
     * @return string|null
     */
    public function getTwitterUrl();

    /**
     * Set twitter_url
     * @param string $twitterUrl
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setTwitterUrl($twitterUrl);

    /**
     * Get content
     * @return string|null
     */
    public function getContent();

    /**
     * Set content
     * @param string $content
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setContent($content);

    /**
     * Get is_active
     * @return string|null
     */
    public function getIsActive();

    /**
     * Set is_active
     * @param string $isActive
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setIsActive($isActive);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setUpdatedAt($updatedAt);
}
