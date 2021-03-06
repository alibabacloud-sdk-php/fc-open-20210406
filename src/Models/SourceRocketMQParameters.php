<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class SourceRocketMQParameters extends Model
{
    /**
     * @description GroupID
     *
     * @var string
     */
    public $groupID;

    /**
     * @description InstanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Offset
     *
     * @var string
     */
    public $offset;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Tag
     *
     * @var string
     */
    public $tag;

    /**
     * @description Timestamp
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description Topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'groupID'    => 'GroupID',
        'instanceId' => 'InstanceId',
        'offset'     => 'Offset',
        'regionId'   => 'RegionId',
        'tag'        => 'Tag',
        'timestamp'  => 'Timestamp',
        'topic'      => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupID) {
            $res['GroupID'] = $this->groupID;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SourceRocketMQParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupID'])) {
            $model->groupID = $map['GroupID'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
