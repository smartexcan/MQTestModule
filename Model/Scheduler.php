<?php
declare(strict_types=1);

namespace Vendor\Example\Model;

use Magento\Framework\MessageQueue\PublisherInterface;

class Scheduler
{
    /**
     * @var PublisherInterface
     */
    private $publisher;

    /**
     * @var SyncRequestDataFactory
     */
    private $requestFactory;

    /**
     * @param PublisherInterface $publisher
     * @param SyncRequestDataFactory $requestFactory
     */
    public function __construct(
        PublisherInterface $publisher,
        SyncRequestDataFactory $requestFactory
    ) {
        $this->publisher = $publisher;
        $this->requestFactory = $requestFactory;
    }

    /**
     * @return void
     */
    public function execute(): void
    {
        $requests = [
            $this->requestFactory->create([
                'storeId' => 1,
                'sessionIds' => [1, 2],
                'websiteStoreId' => 1
            ])
        ];

        $this->publisher->publish('example.sync.run', $requests);
    }
}
