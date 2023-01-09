<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DeleteSwimmingLaneRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the lane.
     *
     * @example 229
     *
     * @var int
     */
    public $laneId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'laneId'         => 'LaneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->laneId) {
            $res['LaneId'] = $this->laneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSwimmingLaneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['LaneId'])) {
            $model->laneId = $map['LaneId'];
        }

        return $model;
    }
}
