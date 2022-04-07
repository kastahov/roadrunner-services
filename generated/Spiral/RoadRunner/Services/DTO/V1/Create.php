<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: message.proto

namespace Spiral\RoadRunner\Services\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>service.V1.Create</code>
 */
class Create extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string command = 2;</code>
     */
    protected $command = '';
    /**
     * Generated from protobuf field <code>int64 process_num = 3;</code>
     */
    protected $process_num = 0;
    /**
     * Generated from protobuf field <code>int64 exec_timeout = 4;</code>
     */
    protected $exec_timeout = 0;
    /**
     * Generated from protobuf field <code>bool remain_after_exit = 5;</code>
     */
    protected $remain_after_exit = false;
    /**
     * Generated from protobuf field <code>map<string, string> env = 6;</code>
     */
    private $env;
    /**
     * Generated from protobuf field <code>uint64 restart_sec = 7;</code>
     */
    protected $restart_sec = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $command
     *     @type int|string $process_num
     *     @type int|string $exec_timeout
     *     @type bool $remain_after_exit
     *     @type array|\Google\Protobuf\Internal\MapField $env
     *     @type int|string $restart_sec
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string command = 2;</code>
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Generated from protobuf field <code>string command = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCommand($var)
    {
        GPBUtil::checkString($var, True);
        $this->command = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 process_num = 3;</code>
     * @return int|string
     */
    public function getProcessNum()
    {
        return $this->process_num;
    }

    /**
     * Generated from protobuf field <code>int64 process_num = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setProcessNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->process_num = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 exec_timeout = 4;</code>
     * @return int|string
     */
    public function getExecTimeout()
    {
        return $this->exec_timeout;
    }

    /**
     * Generated from protobuf field <code>int64 exec_timeout = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExecTimeout($var)
    {
        GPBUtil::checkInt64($var);
        $this->exec_timeout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool remain_after_exit = 5;</code>
     * @return bool
     */
    public function getRemainAfterExit()
    {
        return $this->remain_after_exit;
    }

    /**
     * Generated from protobuf field <code>bool remain_after_exit = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setRemainAfterExit($var)
    {
        GPBUtil::checkBool($var);
        $this->remain_after_exit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> env = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * Generated from protobuf field <code>map<string, string> env = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEnv($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->env = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 restart_sec = 7;</code>
     * @return int|string
     */
    public function getRestartSec()
    {
        return $this->restart_sec;
    }

    /**
     * Generated from protobuf field <code>uint64 restart_sec = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRestartSec($var)
    {
        GPBUtil::checkUint64($var);
        $this->restart_sec = $var;

        return $this;
    }

}

