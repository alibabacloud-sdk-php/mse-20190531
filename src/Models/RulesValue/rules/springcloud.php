<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules\springcloud\restItems;

class springcloud extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var restItems[]
     */
    public $restItems;

    /**
     * @var string
     */
    public $triggerPolicy;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string[]
     */
    public $paths;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'condition' => 'condition',
        'restItems' => 'restItems',
        'triggerPolicy' => 'triggerPolicy',
        'enable' => 'enable',
        'appId' => 'appId',
        'priority' => 'priority',
        'tags' => 'tags',
        'paths' => 'paths',
        'path' => 'path',
    ];

    public function validate()
    {
        if (\is_array($this->restItems)) {
            Model::validateArray($this->restItems);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }

        if (null !== $this->restItems) {
            if (\is_array($this->restItems)) {
                $res['restItems'] = [];
                $n1 = 0;
                foreach ($this->restItems as $item1) {
                    $res['restItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->triggerPolicy) {
            $res['triggerPolicy'] = $this->triggerPolicy;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['paths'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }

        if (isset($map['restItems'])) {
            if (!empty($map['restItems'])) {
                $model->restItems = [];
                $n1 = 0;
                foreach ($map['restItems'] as $item1) {
                    $model->restItems[$n1++] = restItems::fromMap($item1);
                }
            }
        }

        if (isset($map['triggerPolicy'])) {
            $model->triggerPolicy = $map['triggerPolicy'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = $item1;
                }
            }
        }

        if (isset($map['paths'])) {
            if (!empty($map['paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['paths'] as $item1) {
                    $model->paths[$n1++] = $item1;
                }
            }
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}
