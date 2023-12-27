<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class BatchWindow extends Model
{
    /**
     * @var int
     */
    public $countBasedWindow;

    /**
     * @var int
     */
    public $timeBasedWindow;
    protected $_name = [
        'countBasedWindow' => 'CountBasedWindow',
        'timeBasedWindow'  => 'TimeBasedWindow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countBasedWindow) {
            $res['CountBasedWindow'] = $this->countBasedWindow;
        }
        if (null !== $this->timeBasedWindow) {
            $res['TimeBasedWindow'] = $this->timeBasedWindow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchWindow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CountBasedWindow'])) {
            $model->countBasedWindow = $map['CountBasedWindow'];
        }
        if (isset($map['TimeBasedWindow'])) {
            $model->timeBasedWindow = $map['TimeBasedWindow'];
        }

        return $model;
    }
}
