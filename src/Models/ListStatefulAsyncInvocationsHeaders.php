<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListStatefulAsyncInvocationsHeaders extends Model
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
     * @description The CRC-64 value of the function code package. This value is used to check data integrity. The value is automatically calculated by the tool.
     *
     * @example 1506052139770049xxxx
     *
     * @var string
     */
    public $xFcCodeChecksum;

    /**
     * @description The time when Function Compute API is called. Specify the time in the **EEE,d MMM yyyy HH:mm:ss GMT** format.
     *
     * @example Sat, 14 Jul 2017 07:02:38 GMT
     *
     * @var string
     */
    public $xFcDate;

    /**
     * @description The invocation method.
     *
     * - **Sync**: synchronous invocation
     * - **Async**: asynchronous invocation
     * @example Async
     *
     * @var string
     */
    public $xFcInvocationType;

    /**
     * @description The method used to return logs. Valid values:
     *
     * - **Tail**: returns the last 4 KB of logs that are generated for the current request.
     * - **None**: does not return logs for the current request. This is the default value.
     * @example Tail
     *
     * @var string
     */
    public $xFcLogType;

    /**
     * @description The trace ID of the invocation request of Function Compute.
     *
     * @example abcxxx
     *
     * @var string
     */
    public $xFcTraceId;
    protected $_name = [
        'xFcAccountId'      => 'X-Fc-Account-Id',
        'xFcCodeChecksum'   => 'X-Fc-Code-Checksum',
        'xFcDate'           => 'X-Fc-Date',
        'xFcInvocationType' => 'X-Fc-Invocation-Type',
        'xFcLogType'        => 'X-Fc-Log-Type',
        'xFcTraceId'        => 'X-Fc-Trace-Id',
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
        if (null !== $this->xFcCodeChecksum) {
            $res['X-Fc-Code-Checksum'] = $this->xFcCodeChecksum;
        }
        if (null !== $this->xFcDate) {
            $res['X-Fc-Date'] = $this->xFcDate;
        }
        if (null !== $this->xFcInvocationType) {
            $res['X-Fc-Invocation-Type'] = $this->xFcInvocationType;
        }
        if (null !== $this->xFcLogType) {
            $res['X-Fc-Log-Type'] = $this->xFcLogType;
        }
        if (null !== $this->xFcTraceId) {
            $res['X-Fc-Trace-Id'] = $this->xFcTraceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStatefulAsyncInvocationsHeaders
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
        if (isset($map['X-Fc-Code-Checksum'])) {
            $model->xFcCodeChecksum = $map['X-Fc-Code-Checksum'];
        }
        if (isset($map['X-Fc-Date'])) {
            $model->xFcDate = $map['X-Fc-Date'];
        }
        if (isset($map['X-Fc-Invocation-Type'])) {
            $model->xFcInvocationType = $map['X-Fc-Invocation-Type'];
        }
        if (isset($map['X-Fc-Log-Type'])) {
            $model->xFcLogType = $map['X-Fc-Log-Type'];
        }
        if (isset($map['X-Fc-Trace-Id'])) {
            $model->xFcTraceId = $map['X-Fc-Trace-Id'];
        }

        return $model;
    }
}
