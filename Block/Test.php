<?php


namespace SnakeCodder\Testimonials\Block;

class Test extends \Magento\Framework\View\Element\Template
{
    private $testCollection;
    // private $_storeManager;
    protected $_storeManager;
    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $_storeManager,
        \SnakeCodder\Testimonials\Model\ResourceModel\Testimonial\Collection $testCollection,
        array $data = []
    ) {
         $this->testCollection = $testCollection;
         $this->_storeManager = $_storeManager;
        parent::__construct($context,  $data);
    }

    /**
     * @return string
     */
    public function getColletionTestimonials()
    {
       return $this->testCollection;
    }
    public function getFormAction()
    {
            // companymodule is given in routes.xml
            // controller_name is folder name inside controller folder
            // action is php file name inside above controller_name folder
        $baseUrl = $this->_storeManager->getStore()->getBaseUrl();
        return $baseUrl.'testimonials/Save/Index';
        // here controller_name is index, action is booking
    }
}
