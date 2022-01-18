<?php

namespace OpenSearch\Generated\Document;

use Thrift\Exception\TApplicationException;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Type\TMessageType;
use Thrift\Type\TType;

class DocumentServiceProcessor {
    protected $handler_ = null;
    public function __construct($handler) {
        $this->handler_ = $handler;
    }

    public function process($input, $output) {
        $rseqid = 0;
        $fname = null;
        $mtype = 0;

        $input->readMessageBegin($fname, $mtype, $rseqid);
        $methodname = 'process_'.$fname;
        if (!method_exists($this, $methodname)) {
            $input->skip(TType::STRUCT);
            $input->readMessageEnd();
            $x = new TApplicationException('Function '.$fname.' not implemented.', TApplicationException::UNKNOWN_METHOD);
            $output->writeMessageBegin($fname, TMessageType::EXCEPTION, $rseqid);
            $x->write($output);
            $output->writeMessageEnd();
            $output->getTransport()->flush();
            return;
        }
        $this->$methodname($rseqid, $input, $output);
        return true;
    }

    protected function process_push($seqid, $input, $output) {
        $args = new \OpenSearch\Generated\Document\DocumentService_push_args();
        $args->read($input);
        $input->readMessageEnd();
        $result = new \OpenSearch\Generated\Document\DocumentService_push_result();
        try {
            $result->success = $this->handler_->push($args->docsJson, $args->appName, $args->tableName);
        } catch (\OpenSearch\Generated\Common\OpenSearchException $error) {
            $result->error = $error;
        } catch (\OpenSearch\Generated\Common\OpenSearchClientException $e) {
            $result->e = $e;
        }
        $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel)
        {
            thrift_protocol_write_binary($output, 'push', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
        }
        else
        {
            $output->writeMessageBegin('push', TMessageType::REPLY, $seqid);
            $result->write($output);
            $output->writeMessageEnd();
            $output->getTransport()->flush();
        }
    }
}