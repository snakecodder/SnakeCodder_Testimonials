<?php


namespace SnakeCodder\Testimonials\Model;

use Magento\Framework\Api\DataObjectHelper;
use SnakeCodder\Testimonials\Model\ResourceModel\Testimonial as ResourceTestimonial;
use SnakeCodder\Testimonials\Api\TestimonialRepositoryInterface;
use SnakeCodder\Testimonials\Api\Data\TestimonialInterfaceFactory;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Reflection\DataObjectProcessor;
use SnakeCodder\Testimonials\Model\ResourceModel\Testimonial\CollectionFactory as TestimonialCollectionFactory;
use Magento\Framework\Api\SortOrder;
use SnakeCodder\Testimonials\Api\Data\TestimonialSearchResultsInterfaceFactory;
use Magento\Framework\Exception\CouldNotSaveException;

class TestimonialRepository implements TestimonialRepositoryInterface
{

    private $storeManager;
    protected $testimonialFactory;

    protected $resource;

    protected $testimonialCollectionFactory;

    protected $searchResultsFactory;

    protected $dataTestimonialFactory;

    protected $dataObjectProcessor;

    protected $dataObjectHelper;


    /**
     * @param ResourceTestimonial $resource
     * @param TestimonialFactory $testimonialFactory
     * @param TestimonialInterfaceFactory $dataTestimonialFactory
     * @param TestimonialCollectionFactory $testimonialCollectionFactory
     * @param TestimonialSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ResourceTestimonial $resource,
        TestimonialFactory $testimonialFactory,
        TestimonialInterfaceFactory $dataTestimonialFactory,
        TestimonialCollectionFactory $testimonialCollectionFactory,
        TestimonialSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->testimonialFactory = $testimonialFactory;
        $this->testimonialCollectionFactory = $testimonialCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataTestimonialFactory = $dataTestimonialFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \SnakeCodder\Testimonials\Api\Data\TestimonialInterface $testimonial
    ) {
        /* if (empty($testimonial->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $testimonial->setStoreId($storeId);
        } */
        try {
            $this->resource->save($testimonial);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the testimonial: %1',
                $exception->getMessage()
            ));
        }
        return $testimonial;
    }

    /**
     * {@inheritdoc}
     */
    public function getById($testimonialId)
    {
        $testimonial = $this->testimonialFactory->create();
        $this->resource->load($testimonial, $testimonialId);
        if (!$testimonial->getId()) {
            throw new NoSuchEntityException(__('testimonial with id "%1" does not exist.', $testimonialId));
        }
        return $testimonial;
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->testimonialCollectionFactory->create();
        foreach ($criteria->getFilterGroups() as $filterGroup) {
            $fields = [];
            $conditions = [];
            foreach ($filterGroup->getFilters() as $filter) {
                if ($filter->getField() === 'store_id') {
                    $collection->addStoreFilter($filter->getValue(), false);
                    continue;
                }
                $fields[] = $filter->getField();
                $condition = $filter->getConditionType() ?: 'eq';
                $conditions[] = [$condition => $filter->getValue()];
            }
            $collection->addFieldToFilter($fields, $conditions);
        }
        
        $sortOrders = $criteria->getSortOrders();
        if ($sortOrders) {
            /** @var SortOrder $sortOrder */
            foreach ($sortOrders as $sortOrder) {
                $collection->addOrder(
                    $sortOrder->getField(),
                    ($sortOrder->getDirection() == SortOrder::SORT_ASC) ? 'ASC' : 'DESC'
                );
            }
        }
        $collection->setCurPage($criteria->getCurrentPage());
        $collection->setPageSize($criteria->getPageSize());
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        $searchResults->setTotalCount($collection->getSize());
        $searchResults->setItems($collection->getItems());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        \SnakeCodder\Testimonials\Api\Data\TestimonialInterface $testimonial
    ) {
        try {
            $this->resource->delete($testimonial);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the testimonial: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($testimonialId)
    {
        return $this->delete($this->getById($testimonialId));
    }
}
