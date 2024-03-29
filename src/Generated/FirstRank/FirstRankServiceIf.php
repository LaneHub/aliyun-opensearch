<?php

namespace OpenSearch\Generated\FirstRank;

interface FirstRankServiceIf {
    /**
     * @param \OpenSearch\Generated\FirstRank\FirstRank $firstRank
     * @return \OpenSearch\Generated\FirstRank\FirstRank
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function save(\OpenSearch\Generated\FirstRank\FirstRank $firstRank);
    /**
     * @param string $identity
     * @return \OpenSearch\Generated\FirstRank\FirstRank
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function getById($identity);
    /**
     * @return \OpenSearch\Generated\FirstRank\FirstRank[]
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function listAll();
    /**
     * @param string $appId
     * @return \OpenSearch\Generated\FirstRank\FirstRank[]
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function listByAppId($appId);
    /**
     * @param string $appId
     * @param string $name
     * @return \OpenSearch\Generated\FirstRank\FirstRank[]
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function listByAppIdAndName($appId, $name);
    /**
     * @param string $identity
     * @param \OpenSearch\Generated\FirstRank\FirstRank $firstRank
     * @return \OpenSearch\Generated\FirstRank\FirstRank
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function updateById($identity, \OpenSearch\Generated\FirstRank\FirstRank $firstRank);
    /**
     * @param string $identity
     * @param \OpenSearch\Generated\FirstRank\FirstRank $firstRank
     * @return \OpenSearch\Generated\FirstRank\FirstRank
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function validateUpdateById($identity, \OpenSearch\Generated\FirstRank\FirstRank $firstRank);
    /**
     * @param string $identity
     * @return \OpenSearch\Generated\FirstRank\FirstRank
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function removeById($identity);
}