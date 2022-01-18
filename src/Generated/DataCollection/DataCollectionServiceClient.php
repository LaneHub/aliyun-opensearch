<?php

namespace OpenSearch\Generated\DataCollection;

use Thrift\Exception\TApplicationException;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Type\TMessageType;

class DataCollectionServiceClient implements \OpenSearch\Generated\DataCollection\DataCollectionServiceIf {
    protected $input_ = null;
    protected $output_ = null;

    protected $seqid_ = 0;

    public function __construct($input, $output=null) {
        $this->input_ = $input;
        $this->output_ = $output ? $output : $input;
    }

    public function push($docJson, $searchAppName, $dataCollectionName, $dataCollectionType)
    {
        $this->send_push($docJson, $searchAppName, $dataCollectionName, $dataCollectionType);
        return $this->recv_push();
    }

    public function send_push($docJson, $searchAppName, $dataCollectionName, $dataCollectionType)
    {
        $args = new \DataCollectionService_push_args();
        $args->docJson = $docJson;
        $args->searchAppName = $searchAppName;
        $args->dataCollectionName = $dataCollectionName;
        $args->dataCollectionType = $dataCollectionType;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel)
        {
            thrift_protocol_write_binary($this->output_, 'push', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
        }
        else
        {
            $this->output_->writeMessageBegin('push', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_push()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\DataCollectionService_push_result', $this->input_->isStrictRead());
        else
        {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \DataCollectionService_push_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->error !== null) {
            throw $result->error;
        }
        if ($result->e !== null) {
            throw $result->e;
        }
        throw new \Exception("push failed: unknown result");
    }

}