<?php


namespace SnakeCodder\Testimonials\Model;

use SnakeCodder\Testimonials\Api\Data\TestimonialInterface;

class Testimonial extends \Magento\Framework\Model\AbstractModel implements TestimonialInterface
{

    protected $_eventPrefix = 'snakecodder_testimonials_testimonial';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\SnakeCodder\Testimonials\Model\ResourceModel\Testimonial::class);
    }

    /**
     * Get testimonial_id
     * @return string
     */
    public function getTestimonialId()
    {
        return $this->getData(self::TESTIMONIAL_ID);
    }

    /**
     * Set testimonial_id
     * @param string $testimonialId
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setTestimonialId($testimonialId)
    {
        return $this->setData(self::TESTIMONIAL_ID, $testimonialId);
    }

    /**
     * Get store_id
     * @return string
     */
    public function getStoreId()
    {
        return $this->getData(self::STORE_ID);
    }

    /**
     * Set store_id
     * @param string $storeId
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setStoreId($storeId)
    {
        return $this->setData(self::STORE_ID, $storeId);
    }

    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Set name
     * @param string $name
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get email
     * @return string
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * Set email
     * @param string $email
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Get company
     * @return string
     */
    public function getCompany()
    {
        return $this->getData(self::COMPANY);
    }

    /**
     * Set company
     * @param string $company
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setCompany($company)
    {
        return $this->setData(self::COMPANY, $company);
    }

    /**
     * Get profile_img
     * @return string
     */
    public function getProfileImg()
    {
        return $this->getData(self::PROFILE_IMG);
    }

    /**
     * Set profile_img
     * @param string $profileImg
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setProfileImg($profileImg)
    {
        return $this->setData(self::PROFILE_IMG, $profileImg);
    }

    /**
     * Get website
     * @return string
     */
    public function getWebsite()
    {
        return $this->getData(self::WEBSITE);
    }

    /**
     * Set website
     * @param string $website
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setWebsite($website)
    {
        return $this->setData(self::WEBSITE, $website);
    }

    /**
     * Get facebook_url
     * @return string
     */
    public function getFacebookUrl()
    {
        return $this->getData(self::FACEBOOK_URL);
    }

    /**
     * Set facebook_url
     * @param string $facebookUrl
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setFacebookUrl($facebookUrl)
    {
        return $this->setData(self::FACEBOOK_URL, $facebookUrl);
    }

    /**
     * Get twitter_url
     * @return string
     */
    public function getTwitterUrl()
    {
        return $this->getData(self::TWITTER_URL);
    }

    /**
     * Set twitter_url
     * @param string $twitterUrl
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setTwitterUrl($twitterUrl)
    {
        return $this->setData(self::TWITTER_URL, $twitterUrl);
    }

    /**
     * Get content
     * @return string
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * Set content
     * @param string $content
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * Get is_active
     * @return string
     */
    public function getIsActive()
    {
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * Set is_active
     * @param string $isActive
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setIsActive($isActive)
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    /**
     * Get created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set created_at
     * @param string $createdAt
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \SnakeCodder\Testimonials\Api\Data\TestimonialInterface
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}
