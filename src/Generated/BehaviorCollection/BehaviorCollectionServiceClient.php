<?php

namespace OpenSearch\Generated\BehaviorCollection;

use OpenSearch\Thrift\Exception\TApplicationException;
use OpenSearch\Thrift\Protocol\TBinaryProtocolAccelerated;
use OpenSearch\Thrift\Type\TMessageType;

/**
 * @deprecated
 */
class BehaviorCollectionServiceClient implements \OpenSearch\Generated\BehaviorCollection\BehaviorCollectionServiceIf {
    protected $input_ = null;
    protected $output_ = null;

    protected $seqid_ = 0;

    public function __construct($input, $output=null) {
        $this->input_ = $input;
        $this->output_ = $output ? $output : $input;
    }

    public function push($recordsJson, $searchAppName, $behaviorCollectionName)
    {
        $this->send_push($recordsJson, $searchAppName, $behaviorCollectionName);
        return $this->recv_push();
    }

    public function send_push($recordsJson, $searchAppName, $behaviorCollectionName)
    {
        $args = new \BehaviorCollectionService_push_args();
        $args->recordsJson = $recordsJson;
        $args->searchAppName = $searchAppName;
        $args->behaviorCollectionName = $behaviorCollectionName;
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
        if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\BehaviorCollectionService_push_result', $this->input_->isStrictRead());
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
            $result = new \BehaviorCollectionService_push_result();
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