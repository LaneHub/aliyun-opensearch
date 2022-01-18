<?php

namespace OpenSearch\Generated\FirstRank;

use OpenSearch\Thrift\Exception\TProtocolException;
use OpenSearch\Thrift\Type\TType;

class FirstRank {
    static $_TSPEC;

    /**
     * @var string
     */
    public $id = null;
    /**
     * @var \OpenSearch\Generated\Common\AppReference
     */
    public $app = null;
    /**
     * @var string
     */
    public $name = null;
    /**
     * @var \OpenSearch\Generated\FirstRank\Meta[]
     */
    public $meta = null;
    /**
     * @var bool
     */
    public $active = null;
    /**
     * @var string
     */
    public $description = null;

    public function __construct($vals=null) {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'id',
                    'type' => TType::STRING,
                ),
                2 => array(
                    'var' => 'app',
                    'type' => TType::STRUCT,
                    'class' => '\OpenSearch\Generated\Common\AppReference',
                ),
                10 => array(
                    'var' => 'name',
                    'type' => TType::STRING,
                ),
                11 => array(
                    'var' => 'meta',
                    'type' => TType::LST,
                    'etype' => TType::STRUCT,
                    'elem' => array(
                        'type' => TType::STRUCT,
                        'class' => '\OpenSearch\Generated\FirstRank\Meta',
                    ),
                ),
                12 => array(
                    'var' => 'active',
                    'type' => TType::BOOL,
                ),
                13 => array(
                    'var' => 'description',
                    'type' => TType::STRING,
                ),
            );
        }
        if (is_array($vals)) {
            if (isset($vals['id'])) {
                $this->id = $vals['id'];
            }
            if (isset($vals['app'])) {
                $this->app = $vals['app'];
            }
            if (isset($vals['name'])) {
                $this->name = $vals['name'];
            }
            if (isset($vals['meta'])) {
                $this->meta = $vals['meta'];
            }
            if (isset($vals['active'])) {
                $this->active = $vals['active'];
            }
            if (isset($vals['description'])) {
                $this->description = $vals['description'];
            }
        }
    }

    public function getName() {
        return 'FirstRank';
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
                        $xfer += $input->readString($this->id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->app = new \OpenSearch\Generated\Common\AppReference();
                        $xfer += $this->app->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::LST) {
                        $this->meta = array();
                        $_size0 = 0;
                        $_etype3 = 0;
                        $xfer += $input->readListBegin($_etype3, $_size0);
                        for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
                        {
                            $elem5 = null;
                            $elem5 = new \OpenSearch\Generated\FirstRank\Meta();
                            $xfer += $elem5->read($input);
                            $this->meta []= $elem5;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 12:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->active);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 13:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->description);
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
        $xfer += $output->writeStructBegin('FirstRank');
        if ($this->id !== null) {
            $xfer += $output->writeFieldBegin('id', TType::STRING, 1);
            $xfer += $output->writeString($this->id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->app !== null) {
            if (!is_object($this->app)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('app', TType::STRUCT, 2);
            $xfer += $this->app->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->name !== null) {
            $xfer += $output->writeFieldBegin('name', TType::STRING, 10);
            $xfer += $output->writeString($this->name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->meta !== null) {
            if (!is_array($this->meta)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('meta', TType::LST, 11);
            {
                $output->writeListBegin(TType::STRUCT, count($this->meta));
                {
                    foreach ($this->meta as $iter6)
                    {
                        $xfer += $iter6->write($output);
                    }
                }
                $output->writeListEnd();
            }
            $xfer += $output->writeFieldEnd();
        }
        if ($this->active !== null) {
            $xfer += $output->writeFieldBegin('active', TType::BOOL, 12);
            $xfer += $output->writeBool($this->active);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->description !== null) {
            $xfer += $output->writeFieldBegin('description', TType::STRING, 13);
            $xfer += $output->writeString($this->description);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }

}