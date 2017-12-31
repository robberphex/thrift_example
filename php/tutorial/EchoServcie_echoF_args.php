<?php
namespace tutorial;
/**
 * Autogenerated by Thrift Compiler (0.11.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class EchoServcie_echoF_args {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'arg',
      'isRequired' => false,
      'type' => TType::SET,
      'etype' => TType::MAP,
      'elem' => array(
        'type' => TType::MAP,
        'ktype' => TType::I32,
        'vtype' => TType::I64,
        'key' => array(
          'type' => TType::I32,
        ),
        'val' => array(
          'type' => TType::I64,
          ),
        ),
      ),
    );

  /**
   * @var (array)[]
   */
  public $arg = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['arg'])) {
        $this->arg = $vals['arg'];
      }
    }
  }

  public function getName() {
    return 'EchoServcie_echoF_args';
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
          if ($ftype == TType::SET) {
            $this->arg = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readSetBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $elem5 = array();
              $_size6 = 0;
              $_ktype7 = 0;
              $_vtype8 = 0;
              $xfer += $input->readMapBegin($_ktype7, $_vtype8, $_size6);
              for ($_i10 = 0; $_i10 < $_size6; ++$_i10)
              {
                $key11 = 0;
                $val12 = 0;
                $xfer += $input->readI32($key11);
                $xfer += $input->readI64($val12);
                $elem5[$key11] = $val12;
              }
              $xfer += $input->readMapEnd();
              $this->arg[] = $elem5;
            }
            $xfer += $input->readSetEnd();
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
    $xfer += $output->writeStructBegin('EchoServcie_echoF_args');
    if ($this->arg !== null) {
      if (!is_array($this->arg)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('arg', TType::SET, 1);
      {
        $output->writeSetBegin(TType::MAP, count($this->arg));
        {
          foreach ($this->arg as $iter13 => $iter14)
          {
            {
              $output->writeMapBegin(TType::I32, TType::I64, count($iter14));
              {
                foreach ($iter14 as $kiter15 => $viter16)
                {
                  $xfer += $output->writeI32($kiter15);
                  $xfer += $output->writeI64($viter16);
                }
              }
              $output->writeMapEnd();
            }
          }
        }
        $output->writeSetEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

