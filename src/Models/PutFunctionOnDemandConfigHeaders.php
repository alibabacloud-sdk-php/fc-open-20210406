<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class PutFunctionOnDemandConfigHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description If the ETag specified in the request matches the ETag value of the object, the object and 200 OK are returned. Otherwise, 412 Precondition Failed is returned.
     *
     * @example e19d5cd5af0378da05f63f891c7467af
     *
     * @var string
     */
    public $ifMatch;

    /**
     * @description The ID of your Alibaba Cloud account.
     *
     * @example 188077086902****
     *
     * @var string
     */
    public $xFcAccountId;

    /**
     * @description The time when the function is invoked. The value is in the **EEE,d MMM yyyy HH:mm:ss GMT** format.
     *
     * @example Wed, 11 May 2022 09:00:00 GMT
     *
     * @var string
     */
    public $xFcDate;

    /**
     * @description The unique ID of the trace.
     *
     * @example r9s89isisi****
     *
     * @var string
     */
    public $xFcTraceId;
    protected $_name = [
        'ifMatch'      => 'If-Match',
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
        if (null !== $this->ifMatch) {
            $res['If-Match'] = $this->ifMatch;
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
     * @return PutFunctionOnDemandConfigHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['If-Match'])) {
            $model->ifMatch = $map['If-Match'];
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
