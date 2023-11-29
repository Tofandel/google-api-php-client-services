<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1NotebookRuntime extends \Google\Model
{
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $expirationTime;
  /**
   * @var string
   */
  public $healthState;
  /**
   * @var string[]
   */
  public $labels;
  /**
   * @var string
   */
  public $name;
  /**
   * @var GoogleCloudAiplatformV1NotebookRuntimeTemplateRef
   */
  public $notebookRuntimeTemplateRef;
  protected $notebookRuntimeTemplateRefType = GoogleCloudAiplatformV1NotebookRuntimeTemplateRef::class;
  protected $notebookRuntimeTemplateRefDataType = '';
  /**
   * @var string
   */
  public $notebookRuntimeType;
  /**
   * @var string
   */
  public $proxyUri;
  /**
   * @var string
   */
  public $runtimeState;
  /**
   * @var string
   */
  public $runtimeUser;
  /**
   * @var string
   */
  public $serviceAccount;
  /**
   * @var string
   */
  public $updateTime;
  /**
   * @var string
   */
  public $version;

  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param string
   */
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /**
   * @return string
   */
  public function getExpirationTime()
  {
    return $this->expirationTime;
  }
  /**
   * @param string
   */
  public function setHealthState($healthState)
  {
    $this->healthState = $healthState;
  }
  /**
   * @return string
   */
  public function getHealthState()
  {
    return $this->healthState;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param GoogleCloudAiplatformV1NotebookRuntimeTemplateRef
   */
  public function setNotebookRuntimeTemplateRef(GoogleCloudAiplatformV1NotebookRuntimeTemplateRef $notebookRuntimeTemplateRef)
  {
    $this->notebookRuntimeTemplateRef = $notebookRuntimeTemplateRef;
  }
  /**
   * @return GoogleCloudAiplatformV1NotebookRuntimeTemplateRef
   */
  public function getNotebookRuntimeTemplateRef()
  {
    return $this->notebookRuntimeTemplateRef;
  }
  /**
   * @param string
   */
  public function setNotebookRuntimeType($notebookRuntimeType)
  {
    $this->notebookRuntimeType = $notebookRuntimeType;
  }
  /**
   * @return string
   */
  public function getNotebookRuntimeType()
  {
    return $this->notebookRuntimeType;
  }
  /**
   * @param string
   */
  public function setProxyUri($proxyUri)
  {
    $this->proxyUri = $proxyUri;
  }
  /**
   * @return string
   */
  public function getProxyUri()
  {
    return $this->proxyUri;
  }
  /**
   * @param string
   */
  public function setRuntimeState($runtimeState)
  {
    $this->runtimeState = $runtimeState;
  }
  /**
   * @return string
   */
  public function getRuntimeState()
  {
    return $this->runtimeState;
  }
  /**
   * @param string
   */
  public function setRuntimeUser($runtimeUser)
  {
    $this->runtimeUser = $runtimeUser;
  }
  /**
   * @return string
   */
  public function getRuntimeUser()
  {
    return $this->runtimeUser;
  }
  /**
   * @param string
   */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /**
   * @return string
   */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * @param string
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1NotebookRuntime::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1NotebookRuntime');
