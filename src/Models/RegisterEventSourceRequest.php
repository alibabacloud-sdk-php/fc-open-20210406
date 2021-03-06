<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class RegisterEventSourceRequest extends Model
{
    /**
     * @description 事件源资源标识符
     *
     * @var string
     */
    public $sourceArn;

    /**
     * @description 别名或版本
     *
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'sourceArn' => 'sourceArn',
        'qualifier' => 'qualifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceArn) {
            $res['sourceArn'] = $this->sourceArn;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterEventSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sourceArn'])) {
            $model->sourceArn = $map['sourceArn'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
