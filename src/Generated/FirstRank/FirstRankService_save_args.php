<?php

namespace OpenSearch\Generated\FirstRank;

// HELPER FUNCTIONS AND STRUCTURES

use Thrift\Exception\TProtocolException;
use Thrift\Type\TType;

class FirstRankService_save_args {
    static $_TSPEC;

    /**
     * @var \OpenSearch\Generated\FirstRank\FirstRank
     */
    public $firstRank = null;

    public function __construct($vals=null) {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'firstRank',
                    'type' => TType::STRUCT,
                    'class' => '\OpenSearch\Generated\FirstRank\FirstRank',
                ),
            );
        }
        if (is_array($vals)) {
            if (isset($vals['firstRank'])) {
                $this->firstRank = $vals['firstRank'];
            }
        }
    }

    public function getName() {
        return 'FirstRankService_save_args';
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
                    if ($ftype == TType::STRUCT) {
                        $this->firstRank = new \OpenSearch\Generated\FirstRank\FirstRank();
                        $xfer += $this->firstRank->read($input);
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
        $xfer += $output->writeStructBegin('FirstRankService_save_args');
        if ($this->firstRank !== null) {
            if (!is_object($this->firstRank)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('firstRank', TType::STRUCT, 1);
            $xfer += $this->firstRank->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }

}