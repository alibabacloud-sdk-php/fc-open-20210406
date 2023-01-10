<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceResponseBody extends Model
{
    /**
     * @description The time when the service was created.
     *
     * @example 2016-08-15T16:06:05.000+0000
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the service.
     *
     * @example test_description
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to allow functions to access the Internet. Valid values:
     *
     *   **true**: allows functions in the specified service to access the Internet.
     *   **false**: does not allow functions in the specified service to access the Internet.
     *
     * @example true
     *
     * @var bool
     */
    public $internetAccess;

    /**
     * @description The time when the service was last modified.
     *
     * @example 2016-08-15T16:06:05.000+0000
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @description The log configuration, which specifies a Logstore to store function execution logs.
     *
     * @var LogConfig
     */
    public $logConfig;

    /**
     * @description The configurations of the NAS file system. The configuration allows functions in the specified service in Function Compute to access the NAS file system.
     *
     * @var NASConfig
     */
    public $nasConfig;

    /**
     * @description The OSS mount configurations.
     *
     * @var OSSMountConfig
     */
    public $ossMountConfig;

    /**
     * @description The RAM role that is used to grant required permissions to Function Compute. The RAM role is used in the following scenarios:
     *
     *   Sends function execution logs to your Logstore.
     *   Generates a token for a function to access other cloud resources during function execution.
     *
     * @example acs:ram::1234567890:role/fc-test
     *
     * @var string
     */
    public $role;

    /**
     * @description The unique ID generated by the system for the service.
     *
     * @example 2d28e0e9-9ba5-4eed-8b1a-d3d9cd24e737
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The name of the service.
     *
     * @example demo-service
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The configurations of Tracing Analysis. After you configure Tracing Analysis for a service in Function Compute, you can record the execution duration of a request, view the amount of cold start time for a function, and record the execution duration of a function. For more information, see [Overview](~~189804~~).
     *
     * @var TracingConfig
     */
    public $tracingConfig;

    /**
     * @description The VPC configuration. The configuration allows a function to access the specified VPC.
     *
     * @var VPCConfig
     */
    public $vpcConfig;
    protected $_name = [
        'createdTime'      => 'createdTime',
        'description'      => 'description',
        'internetAccess'   => 'internetAccess',
        'lastModifiedTime' => 'lastModifiedTime',
        'logConfig'        => 'logConfig',
        'nasConfig'        => 'nasConfig',
        'ossMountConfig'   => 'ossMountConfig',
        'role'             => 'role',
        'serviceId'        => 'serviceId',
        'serviceName'      => 'serviceName',
        'tracingConfig'    => 'tracingConfig',
        'vpcConfig'        => 'vpcConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->internetAccess) {
            $res['internetAccess'] = $this->internetAccess;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toMap() : null;
        }
        if (null !== $this->nasConfig) {
            $res['nasConfig'] = null !== $this->nasConfig ? $this->nasConfig->toMap() : null;
        }
        if (null !== $this->ossMountConfig) {
            $res['ossMountConfig'] = null !== $this->ossMountConfig ? $this->ossMountConfig->toMap() : null;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->tracingConfig) {
            $res['tracingConfig'] = null !== $this->tracingConfig ? $this->tracingConfig->toMap() : null;
        }
        if (null !== $this->vpcConfig) {
            $res['vpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['internetAccess'])) {
            $model->internetAccess = $map['internetAccess'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['logConfig'])) {
            $model->logConfig = LogConfig::fromMap($map['logConfig']);
        }
        if (isset($map['nasConfig'])) {
            $model->nasConfig = NASConfig::fromMap($map['nasConfig']);
        }
        if (isset($map['ossMountConfig'])) {
            $model->ossMountConfig = OSSMountConfig::fromMap($map['ossMountConfig']);
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['tracingConfig'])) {
            $model->tracingConfig = TracingConfig::fromMap($map['tracingConfig']);
        }
        if (isset($map['vpcConfig'])) {
            $model->vpcConfig = VPCConfig::fromMap($map['vpcConfig']);
        }

        return $model;
    }
}
