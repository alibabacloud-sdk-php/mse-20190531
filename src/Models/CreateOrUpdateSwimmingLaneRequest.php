<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest\entryRules;
use AlibabaCloud\Tea\Model;

class CreateOrUpdateSwimmingLaneRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description 是否开启。
     *
     * @var bool
     */
    public $enable;

    /**
     * @var bool
     */
    public $enableRules;

    /**
     * @description json string
     *
     * @var string
     */
    public $entryRule;

    /**
     * @description SwimmingLane
     *
     * @var entryRules[]
     */
    public $entryRules;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 更新时间
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description 所属泳道组
     *
     * @var int
     */
    public $groupId;

    /**
     * @description 主键ID。由SP生成(数据库自增主键)。
     *
     * @var int
     */
    public $id;

    /**
     * @description 格式为UUID。比如48bd91e9-41d5-4dae-8a9a-439611742b45
     *
     * @var string
     */
    public $licenseKey;

    /**
     * @description 名称
     *
     * @var string
     */
    public $name;

    /**
     * @description region
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 来源。可选值为: EDAS。
     *
     * @var string
     */
    public $source;

    /**
     * @description 0 未生效
     *
     * @var int
     */
    public $status;

    /**
     * @description 标识
     *
     * @var string
     */
    public $tag;

    /**
     * @description EDAS账号。格式为数字，比如1362469756373809。
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'enable'         => 'Enable',
        'enableRules'    => 'EnableRules',
        'entryRule'      => 'EntryRule',
        'entryRules'     => 'EntryRules',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'groupId'        => 'GroupId',
        'id'             => 'Id',
        'licenseKey'     => 'LicenseKey',
        'name'           => 'Name',
        'regionId'       => 'RegionId',
        'source'         => 'Source',
        'status'         => 'Status',
        'tag'            => 'Tag',
        'userId'         => 'UserId',
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
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->enableRules) {
            $res['EnableRules'] = $this->enableRules;
        }
        if (null !== $this->entryRule) {
            $res['EntryRule'] = $this->entryRule;
        }
        if (null !== $this->entryRules) {
            $res['EntryRules'] = [];
            if (null !== $this->entryRules && \is_array($this->entryRules)) {
                $n = 0;
                foreach ($this->entryRules as $item) {
                    $res['EntryRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateSwimmingLaneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EnableRules'])) {
            $model->enableRules = $map['EnableRules'];
        }
        if (isset($map['EntryRule'])) {
            $model->entryRule = $map['EntryRule'];
        }
        if (isset($map['EntryRules'])) {
            if (!empty($map['EntryRules'])) {
                $model->entryRules = [];
                $n                 = 0;
                foreach ($map['EntryRules'] as $item) {
                    $model->entryRules[$n++] = null !== $item ? entryRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
