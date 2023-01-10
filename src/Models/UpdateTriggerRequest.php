<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateTriggerRequest extends Model
{
    /**
     * @description The description of the trigger.
     *
     * @example trigger for test
     *
     * @var string
     */
    public $description;

    /**
     * @description The role that is used by the event source such as OSS to invoke the function. For more information, see [Overview](~~53102~~).
     *
     * @example acs:ram::123456xxxx:role/fc-test
     *
     * @var string
     */
    public $invocationRole;

    /**
     * @description The version or alias of the service.
     *
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description The configurations of the trigger. The configurations vary based on the trigger type. For more information about the format, see the following topics:
     *
     *   OSS trigger: [OSSTriggerConfig](javascript:void\(0\)).
     *   Log Service trigger: [LogTriggerConfig](javascript:void\(0\)).
     *   Time trigger: [TimeTriggerConfig](javascript:void\(0\)).
     *   HTTP trigger: [HTTPTriggerConfig](javascript:void\(0\)).
     *   Tablestore trigger: Specify the **SourceArn** parameter and leave this parameter empty.
     *   Alibaba Cloud CDN event trigger: [CDNEventsTriggerConfig](javascript:void\(0\)).
     *   MNS topic trigger: [MnsTopicTriggerConfig](javascript:void\(0\)).
     *
     * @example {"events": ["oss:ObjectCreated:*"], "filter": {"key": {"prefix": "/prefix", "suffix": ".zip"}}}
     *
     * @var string
     */
    public $triggerConfig;
    protected $_name = [
        'description'    => 'description',
        'invocationRole' => 'invocationRole',
        'qualifier'      => 'qualifier',
        'triggerConfig'  => 'triggerConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->invocationRole) {
            $res['invocationRole'] = $this->invocationRole;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->triggerConfig) {
            $res['triggerConfig'] = $this->triggerConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['invocationRole'])) {
            $model->invocationRole = $map['invocationRole'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['triggerConfig'])) {
            $model->triggerConfig = $map['triggerConfig'];
        }

        return $model;
    }
}
