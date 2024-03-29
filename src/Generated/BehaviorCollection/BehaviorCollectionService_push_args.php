<?php

namespace OpenSearch\Generated\BehaviorCollection;

use OpenSearch\Thrift\Type\TType;

/**
 * @deprecated
 */
class BehaviorCollectionService_push_args {
    static $_TSPEC;

    /**
     * @var string
     */
    public $recordsJson = null;
    /**
     * @var string
     */
    public $searchAppName = null;
    /**
     * @var string
     */
    public $behaviorCollectionName = null;

    public function __construct($vals=null) {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'recordsJson',
                    'type' => TType::STRING,
                ),
                2 => array(
                    'var' => 'searchAppName',
                    'type' => TType::STRING,
                ),
                3 => array(
                    'var' => 'behaviorCollectionName',
                    'type' => TType::STRING,
                ),
            );
        }
        if (is_array($vals)) {
            if (isset($vals['recordsJson'])) {
                $this->recordsJson = $vals['recordsJson'];
            }
            if (isset($vals['searchAppName'])) {
                $this->searchAppName = $vals['searchAppName'];
            }
            if (isset($vals['behaviorCollectionName'])) {
                $this->behaviorCollectionName = $vals['behaviorCollectionName'];
            }
        }
    }

    public function getName() {
        return 'BehaviorCollectionService_push_args';
    }

    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true)
        {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid)
            {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->recordsJson);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->searchAppName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->behaviorCollectionName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output) {
        $xfer = 0;
        $xfer += $output->writeStructBegin('BehaviorCollectionService_push_args');
        if ($this->recordsJson !== null) {
            $xfer += $output->writeFieldBegin('recordsJson', TType::STRING, 1);
            $xfer += $output->writeString($this->recordsJson);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->searchAppName !== null) {
            $xfer += $output->writeFieldBegin('searchAppName', TType::STRING, 2);
            $xfer += $output->writeString($this->searchAppName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->behaviorCollectionName !== null) {
            $xfer += $output->writeFieldBegin('behaviorCollectionName', TType::STRING, 3);
            $xfer += $output->writeString($this->behaviorCollectionName);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }

}