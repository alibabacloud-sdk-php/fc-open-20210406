<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListServicesRequest extends Model
{
    /**
     * @description 最多返回个数
     *
     * @var int
     */
    public $limit;

    /**
     * @description 下次查询token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 前缀
     *
     * @var string
     */
    public $prefix;

    /**
     * @description 起始key
     *
     * @var string
     */
    public $startKey;
    protected $_name = [
        'limit'     => 'limit',
        'nextToken' => 'nextToken',
        'prefix'    => 'prefix',
        'startKey'  => 'startKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->startKey) {
            $res['startKey'] = $this->startKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['startKey'])) {
            $model->startKey = $map['startKey'];
        }

        return $model;
    }
}
