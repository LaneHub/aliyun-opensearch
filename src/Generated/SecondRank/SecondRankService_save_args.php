<?php


namespace OpenSearch\Generated\SecondRank;


use OpenSearch\Thrift\Exception\TProtocolException;
use OpenSearch\Thrift\Type\TType;

class SecondRankService_save_args {
    static $_TSPEC;

    /**
     * @var \OpenSearch\Generated\SecondRank\SecondRank
     */
    public $secondRank = null;

    public function __construct($vals=null) {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'secondRank',
                    'type' => TType::STRUCT,
                    'class' => '\OpenSearch\Generated\SecondRank\SecondRank',
                ),
            );
        }
        if (is_array($vals)) {
            if (isset($vals['secondRank'])) {
                $this->secondRank = $vals['secondRank'];
            }
        }
    }

    public function getName() {
        return 'SecondRankService_save_args';
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
                        $this->secondRank = new \OpenSearch\Generated\SecondRank\SecondRank();
                        $xfer += $this->secondRank->read($input);
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
        $xfer += $output->writeStructBegin('SecondRankService_save_args');
        if ($this->secondRank !== null) {
            if (!is_object($this->secondRank)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('secondRank', TType::STRUCT, 1);
            $xfer += $this->secondRank->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }

}