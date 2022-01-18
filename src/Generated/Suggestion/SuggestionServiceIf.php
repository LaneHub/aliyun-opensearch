<?php


namespace OpenSearch\Generated\Suggestion;


interface SuggestionServiceIf {
    /**
     * @param \OpenSearch\Generated\Suggestion\SuggestParams $suggestParams
     * @return \OpenSearch\Generated\GeneralSearcher\SearchResult
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function execute(\OpenSearch\Generated\Suggestion\SuggestParams $suggestParams);
    /**
     * @return string
     * @throws \OpenSearch\Generated\Common\OpenSearchException
     * @throws \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public function search();
}