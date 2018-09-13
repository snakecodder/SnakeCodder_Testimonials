<?php


namespace SnakeCodder\Testimonials\Model\ResourceModel\Testimonial;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \SnakeCodder\Testimonials\Model\Testimonial::class,
            \SnakeCodder\Testimonials\Model\ResourceModel\Testimonial::class
        );
    }
}
