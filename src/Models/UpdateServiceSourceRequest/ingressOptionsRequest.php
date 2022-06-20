<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateServiceSourceRequest;

use AlibabaCloud\Tea\Model;

class ingressOptionsRequest extends Model
{
    /**
     * @var bool
     */
    public $enableIngress;

    /**
     * @var string
     */
    public $ingressClass;

    /**
     * @var string
     */
    public $watchNamespace;
    protected $_name = [
        'enableIngress'  => 'EnableIngress',
        'ingressClass'   => 'IngressClass',
        'watchNamespace' => 'WatchNamespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableIngress) {
            $res['EnableIngress'] = $this->enableIngress;
        }
        if (null !== $this->ingressClass) {
            $res['IngressClass'] = $this->ingressClass;
        }
        if (null !== $this->watchNamespace) {
            $res['WatchNamespace'] = $this->watchNamespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ingressOptionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableIngress'])) {
            $model->enableIngress = $map['EnableIngress'];
        }
        if (isset($map['IngressClass'])) {
            $model->ingressClass = $map['IngressClass'];
        }
        if (isset($map['WatchNamespace'])) {
            $model->watchNamespace = $map['WatchNamespace'];
        }

        return $model;
    }
}
