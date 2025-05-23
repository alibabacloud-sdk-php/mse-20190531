<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneGroupResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appIds;

    /**
     * @var int
     */
    public $canaryModel;

    /**
     * @var string
     */
    public $entryApp;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $messageQueueFilterSide;

    /**
     * @var bool
     */
    public $messageQueueGrayEnable;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $paths;

    /**
     * @var bool
     */
    public $recordCanaryDetail;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $swimVersion;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appIds' => 'AppIds',
        'canaryModel' => 'CanaryModel',
        'entryApp' => 'EntryApp',
        'id' => 'Id',
        'messageQueueFilterSide' => 'MessageQueueFilterSide',
        'messageQueueGrayEnable' => 'MessageQueueGrayEnable',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'paths' => 'Paths',
        'recordCanaryDetail' => 'RecordCanaryDetail',
        'region' => 'Region',
        'swimVersion' => 'SwimVersion',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }

        if (null !== $this->canaryModel) {
            $res['CanaryModel'] = $this->canaryModel;
        }

        if (null !== $this->entryApp) {
            $res['EntryApp'] = $this->entryApp;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->messageQueueFilterSide) {
            $res['MessageQueueFilterSide'] = $this->messageQueueFilterSide;
        }

        if (null !== $this->messageQueueGrayEnable) {
            $res['MessageQueueGrayEnable'] = $this->messageQueueGrayEnable;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }

        if (null !== $this->recordCanaryDetail) {
            $res['RecordCanaryDetail'] = $this->recordCanaryDetail;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->swimVersion) {
            $res['SwimVersion'] = $this->swimVersion;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }

        if (isset($map['CanaryModel'])) {
            $model->canaryModel = $map['CanaryModel'];
        }

        if (isset($map['EntryApp'])) {
            $model->entryApp = $map['EntryApp'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MessageQueueFilterSide'])) {
            $model->messageQueueFilterSide = $map['MessageQueueFilterSide'];
        }

        if (isset($map['MessageQueueGrayEnable'])) {
            $model->messageQueueGrayEnable = $map['MessageQueueGrayEnable'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['Paths'])) {
            $model->paths = $map['Paths'];
        }

        if (isset($map['RecordCanaryDetail'])) {
            $model->recordCanaryDetail = $map['RecordCanaryDetail'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SwimVersion'])) {
            $model->swimVersion = $map['SwimVersion'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
