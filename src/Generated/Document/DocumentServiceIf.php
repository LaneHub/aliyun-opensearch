<?php

namespace OpenSearch\Generated\Document;

interface DocumentServiceIf {
    /**
     * @param string $docsJson
     * @param string $appName
     * @param string $tableName
     * @return \OpenSearch\Generated\Common\OpenSearchResult
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function push($docsJson, $appName, $tableName);
}