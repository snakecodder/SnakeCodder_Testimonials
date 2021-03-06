<?php
namespace SnakeCodder\Testimonials\Controller\Save;

use \Magento\Framework\Controller\ResultFactory;
class Index extends \Magento\Framework\App\Action\Action
{
    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    protected $_testimonial;
     protected $_storeManager;
    /**      * @param \Magento\Framework\App\Action\Context $context      */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \SnakeCodder\Testimonials\Model\Testimonial $_testimonial,
        \Magento\Store\Model\StoreManagerInterface $_storeManager,  
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->_testimonial = $_testimonial;
        $this->_storeManager = $_storeManager;
        parent::__construct($context);
    }
    /**
     * Blog Index, shows a list of recent blog posts.
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */

        public function execute()
    {
       $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Testimonials Form'));
       $post = (array) $this->getRequest()->getPost();


        if (is_array($post)) {
            // Retrieve your form data
    

            $this->_testimonial->addData($post);
            $this->_testimonial->save();
            // Doing-something with...
            // Display the succes form validation message
           $this->messageManager->addSuccessMessage('Testimonials done !');

            // Redirect to your form page (or anywhere you want...)
             $baseUrl = $this->_storeManager->getStore()->getBaseUrl();
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl($baseUrl.'/testimonials/form/index');

            return $resultRedirect;
            
            
        }
        // 2. GET request : Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
    
   
}