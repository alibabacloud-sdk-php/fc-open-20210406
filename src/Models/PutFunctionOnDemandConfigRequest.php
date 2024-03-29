<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class PutFunctionOnDemandConfigRequest extends Model
{
    /**
     * @description The maximum number of on-demand instances. For more information, see [Configure provisioned instances and auto scaling rules](~~185038~~).
     *
     * @example 10
     *
     * @var int
     */
    public $maximumInstanceCount;

    /**
     * @description The service alias or latest version. Other versions are not supported.
     *
     * @example prod
     *
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'maximumInstanceCount' => 'maximumInstanceCount',
        'qualifier'            => 'qualifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maximumInstanceCount) {
            $res['maximumInstanceCount'] = $this->maximumInstanceCount;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutFunctionOnDemandConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maximumInstanceCount'])) {
            $model->maximumInstanceCount = $map['maximumInstanceCount'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
