<?php


namespace OpenSearch\Generated\Summary;


use OpenSearch\Thrift\Exception\TProtocolException;
use OpenSearch\Thrift\Type\TType;

class SummaryService_listByAppIdAndGroup_result {
    static $_TSPEC;

    /**
     * @var \OpenSearch\Generated\Summary\Summary[]
     */
    public $success = null;
    /**
     * @var \OpenSearch\Generated\Common\OpenSearchException
     */
    public $error = null;
    /**
     * @var \OpenSearch\Generated\Common\OpenSearchClientException
     */
    public $e = null;

    public function __construct($vals=null) {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success',
                    'type' => TType::LST,
                    'etype' => TType::STRUCT,
                    'elem' => array(
                        'type' => TType::STRUCT,
                        'class' => '\OpenSearch\Generated\Summary\Summary',
                    ),
                ),
                1 => array(
                    'var' => 'error',
                    'type' => TType::STRUCT,
                    'class' => '\OpenSearch\Generated\Common\OpenSearchException',
                ),
                2 => array(
                    'var' => 'e',
                    'type' => TType::STRUCT,
                    'class' => '\OpenSearch\Generated\Common\OpenSearchClientException',
                ),
            );
        }
        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
            if (isset($vals['error'])) {
                $this->error = $vals['error'];
            }
            if (isset($vals['e'])) {
                $this->e = $vals['e'];
            }
        }
    }

    public function getName() {
        return 'SummaryService_listByAppIdAndGroup_result';
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
                case 0:
                    if ($ftype == TType::LST) {
                        $this->success = array();
                        $_size0 = 0;
                        $_etype3 = 0;
                        $xfer += $input->readListBegin($_etype3, $_size0);
                        for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
                        {
                            $elem5 = null;
                            $elem5 = new \OpenSearch\Generated\Summary\Summary();
                            $xfer += $elem5->read($input);
                            $this->success []= $elem5;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->error = new \OpenSearch\Generated\Common\OpenSearchException();
                        $xfer += $this->error->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->e = new \OpenSearch\Generated\Common\OpenSearchClientException();
                        $xfer += $this->e->read($input);
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
        $xfer += $output->writeStructBegin('SummaryService_listByAppIdAndGroup_result');
        if ($this->success !== null) {
            if (!is_array($this->success)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('success', TType::LST, 0);
            {
                $output->writeListBegin(TType::STRUCT, count($this->success));
                {
                    foreach ($this->success as $iter6)
                    {
                        $xfer += $iter6->write($output);
                    }
                }
                $output->writeListEnd();
            }
            $xfer += $output->writeFieldEnd();
        }
        if ($this->error !== null) {
            $xfer += $output->writeFieldBegin('error', TType::STRUCT, 1);
            $xfer += $this->error->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->e !== null) {
            $xfer += $output->writeFieldBegin('e', TType::STRUCT, 2);
            $xfer += $this->e->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }

}