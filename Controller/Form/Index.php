<?php
namespace SnakeCodder\Testimonials\Controller\Form;
class Index extends \Magento\Framework\App\Action\Action
{
    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    protected $_testimonial;
    /**      * @param \Magento\Framework\App\Action\Context $context      */
    public function __construct(\Magento\Framework\App\Action\Context $context,SnakeCodder\Testimonials\Model\Testimonial $_testimonial,  \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->_testimonial = $_testimonial;
        parent::__construct($context);
    }
    /**
     * Blog Index, shows a list of recent blog posts.
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
   /* public function execute()
    {
        
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Testimonials Form'));
        return $resultPage;
    }*/
    public function execute()
    {
        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();


        if (!empty($post)) {
            // Retrieve your form data

            $name   = $post['name'];
            $email   = $post['email'];
            $company   = $post['company'];
            $website   = $post['website'];
            $twitter   = $post['twitter'];
            $facebook   = $post['facebook'];
            $profile_img   = '';
            $rating   = '';
            $content = $post['content'];
           
            print_r($post);die();
            // Doing-something with...

            // Display the succes form validation message
            $this->messageManager->addSuccessMessage('Testimonials done !');

            // Redirect to your form page (or anywhere you want...)
            $resultPage = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
           $resultPage->setUrl('/testimonials/form/index');

            return $resultPage;
        }
        // 2. GET request : Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
    
   
}