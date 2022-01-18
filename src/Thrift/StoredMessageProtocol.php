<?php

namespace OpenSearch\Thrift;

use OpenSearch\Thrift\Protocol\TProtocol;
use OpenSearch\Thrift\Protocol\TProtocolDecorator;

/**
 *  Our goal was to work with any protocol. In order to do that, we needed
 *  to allow them to call readMessageBegin() and get the Message in exactly
 *  the standard format, without the service name prepended to the Message name.
 */
class StoredMessageProtocol extends TProtocolDecorator
{
    private $fname_, $mtype_, $rseqid_;

    public function __construct(TProtocol $protocol, $fname, $mtype, $rseqid)
    {
        parent::__construct($protocol);
        $this->fname_  = $fname;
        $this->mtype_  = $mtype;
        $this->rseqid_ = $rseqid;
    }

    public function readMessageBegin(&$name, &$type, &$seqid)
    {
        $name  = $this->fname_;
        $type  = $this->mtype_;
        $seqid = $this->rseqid_;
    }
}