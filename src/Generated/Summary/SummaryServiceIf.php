<?php


namespace OpenSearch\Generated\Summary;


interface SummaryServiceIf {
    /**
     * @param string $appId
     * @param string $group
     * @return \OpenSearch\Generated\Summary\Summary[]
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function listByAppIdAndGroup($appId, $group);
}