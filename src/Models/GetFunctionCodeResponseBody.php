<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class GetFunctionCodeResponseBody extends Model
{
    /**
     * @description function code包的CRC64值
     *
     * @var string
     */
    public $checksum;

    /**
     * @description 获取function代码的URL
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'checksum' => 'checksum',
        'url'      => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checksum) {
            $res['checksum'] = $this->checksum;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFunctionCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checksum'])) {
            $model->checksum = $map['checksum'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
