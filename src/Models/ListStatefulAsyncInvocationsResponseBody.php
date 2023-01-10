<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListStatefulAsyncInvocationsResponseBody extends Model
{
    /**
     * @description The information about asynchronous tasks.
     *
     * @var StatefulAsyncInvocation[]
     */
    public $invocations;

    /**
     * @description The token used to obtain more results. If this parameter is left empty, all the results are returned.
     *
     * @example 8bj81uI8n****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'invocations' => 'invocations',
        'nextToken'   => 'nextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocations) {
            $res['invocations'] = [];
            if (null !== $this->invocations && \is_array($this->invocations)) {
                $n = 0;
                foreach ($this->invocations as $item) {
                    $res['invocations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStatefulAsyncInvocationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['invocations'])) {
            if (!empty($map['invocations'])) {
                $model->invocations = [];
                $n                  = 0;
                foreach ($map['invocations'] as $item) {
                    $model->invocations[$n++] = null !== $item ? StatefulAsyncInvocation::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
