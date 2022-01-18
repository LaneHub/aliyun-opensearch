<?php

namespace OpenSearch\Generated\DataCollection;

interface DataCollectionServiceIf {
    /**
     * @param string $docJson
     * @param string $searchAppName
     * @param string $dataCollectionName
     * @param string $dataCollectionType
     * @return \Generated\Common\OpenSearchResult
     * @throws \Generated\Common\OpenSearchException
     * @throws \Generated\Common\OpenSearchClientException
     */
    public function push($docJson, $searchAppName, $dataCollectionName, $dataCollectionType);
}