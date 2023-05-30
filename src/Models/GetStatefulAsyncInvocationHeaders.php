<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class GetStatefulAsyncInvocationHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description The list of events that trigger the asynchronous task.
     *
     * @example 188077086902****
     *
     * @var string
     */
    public $xFcAccountId;

    /**
     * @description The structure of the asynchronous task.
     *
     * @example 1506052139770049xxxx
     *
     * @var string
     */
    public $xFcCodeChecksum;

    /**
     * @description Alibaba Cloud provides SDKs for multiple programming languages to help you integrate Alibaba Cloud services by using APIs. We recommend that you use an SDK to call API operations. This frees you from manual signature verification.
     *
     * @example Sat, 14 Jul 2017 07:02:38 GMT
     *
     * @var string
     */
    public $xFcDate;

    /**
     * @description StatefulAsyncInvocation: asynchronous task. Asynchronous tasks allow you to manage the states on the basis of common asynchronous invocations, which is more suitable for task scenarios.
     *
     * @example Async
     *
     * @var string
     */
    public $xFcInvocationType;

    /**
     * @description The latest version of Function Compute API.
     *
     * @example Tail
     *
     * @var string
     */
    public $xFcLogType;

    /**
     * @description You can search for API operations, call and debug API operations online, and dynamically generate executable sample code for SDKs.
     *
     * @example asdf****
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
     * @return GetStatefulAsyncInvocationHeaders
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
