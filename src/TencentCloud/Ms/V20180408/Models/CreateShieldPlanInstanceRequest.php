<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method string getPlanName() 获取策略名称
 * @method void setPlanName(string $PlanName) 设置策略名称
 * @method PlanInfo getPlanInfo() 获取策略具体信息
 * @method void setPlanInfo(PlanInfo $PlanInfo) 设置策略具体信息
 */

/**
 *CreateShieldPlanInstance请求参数结构体
 */
class CreateShieldPlanInstanceRequest extends AbstractModel
{
    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var string 策略名称
     */
    public $PlanName;

    /**
     * @var PlanInfo 策略具体信息
     */
    public $PlanInfo;
    /**
     * @param string $ResourceId 资源id
     * @param string $PlanName 策略名称
     * @param PlanInfo $PlanInfo 策略具体信息
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("PlanInfo",$param) and $param["PlanInfo"] !== null) {
            $this->PlanInfo = new PlanInfo();
            $this->PlanInfo->deserialize($param["PlanInfo"]);
        }
    }
}
