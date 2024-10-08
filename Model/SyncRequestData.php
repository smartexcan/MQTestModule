<?php
declare(strict_types=1);

namespace Vendor\Example\Model;

class SyncRequestData
{
    /**
     * @var int
     */
    private $storeId;

    /**
     * @var int[]
     */
    private $sessionIds;

    /**
     * @var int
     */
    private $websiteStoreId;

    /**
     * @param int $storeId
     * @param int[] $sessionIds
     * @param int $websiteStoreId
     */
    public function __construct(
        int $storeId,
        array $sessionIds,
        int $websiteStoreId
    ) {
        $this->storeId = $storeId;
        $this->sessionIds = $sessionIds;
        $this->websiteStoreId = $websiteStoreId;
    }

    /**
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }

    /**
     * @return int[]
     */
    public function getSessionIds(): array
    {
        return $this->sessionIds;
    }

    /**
     * @return int
     */
    public function getWebsiteStoreId(): int
    {
        return $this->websiteStoreId;
    }
}
