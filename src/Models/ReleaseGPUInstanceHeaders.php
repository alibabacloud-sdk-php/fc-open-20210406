<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ReleaseGPUInstanceHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description The ID of your Alibaba Cloud account.
     *
     * @example 188077086902****
     *
     * @var string
     */
    public $xFcAccountId;

    /**
     * @description The time on which the function is invoked. The format of the value is: EEE,d MMM yyyy HH:mm:ss GMT.
     *
     * @example 2022-11-11 07:31:04.899465017 +0000 UTC m=+37.671563424
     *
     * @var string
     */
    public $xFcDate;

    /**
     * @description The custom request ID.
     *
     * @example test-trace-id
     *
     * @var string
     */
    public $xFcTraceId;
    protected $_name = [
        'xFcAccountId' => 'X-Fc-Account-Id',
        'xFcDate'      => 'X-Fc-Date',
        'xFcTraceId'   => 'X-Fc-Trace-Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xFcAccountId) {
            $res['X-Fc-Account-Id'] = $this->xFcAccountId;
        }
        if (null !== $this->xFcDate) {
            $res['X-Fc-Date'] = $this->xFcDate;
        }
        if (null !== $this->xFcTraceId) {
            $res['X-Fc-Trace-Id'] = $this->xFcTraceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseGPUInstanceHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['X-Fc-Account-Id'])) {
            $model->xFcAccountId = $map['X-Fc-Account-Id'];
        }
        if (isset($map['X-Fc-Date'])) {
            $model->xFcDate = $map['X-Fc-Date'];
        }
        if (isset($map['X-Fc-Trace-Id'])) {
            $model->xFcTraceId = $map['X-Fc-Trace-Id'];
        }

        return $model;
    }
}
