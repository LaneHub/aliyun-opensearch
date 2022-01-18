<?php

namespace OpenSearch\Generated\BehaviorCollection;

/**
 * @deprecated
 */
interface BehaviorCollectionServiceIf {
    /**
     * @param string $recordsJson
     * @param string $searchAppName
     * @param string $behaviorCollectionName
     * @return \OpenSearch\Generated\Common\OpenSearchResult
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function push($recordsJson, $searchAppName, $behaviorCollectionName);
}