<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @description The name of the service.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The ID of your Alibaba Cloud account.
     *
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @description The ID of the instance.
     *
     * @example dev
     *
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'instanceIds' => 'instanceIds',
        'limit'       => 'limit',
        'qualifier'   => 'qualifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['instanceIds'] = $this->instanceIds;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceIds'])) {
            if (!empty($map['instanceIds'])) {
                $model->instanceIds = $map['instanceIds'];
            }
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
