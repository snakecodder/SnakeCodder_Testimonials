<?php


namespace SnakeCodder\Testimonials\Model\ResourceModel;

class Testimonial extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('snakecodder_testimonials_testimonial', 'testimonial_id');
    }
}
