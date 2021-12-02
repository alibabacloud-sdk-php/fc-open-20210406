<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateAliasRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateAliasResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateCustomDomainRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateCustomDomainResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateFunctionHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateFunctionRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateFunctionResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateLayerVersionRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateLayerVersionResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateServiceRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateServiceResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateTriggerRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateTriggerResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateVpcBindingRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CreateVpcBindingResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteAliasHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteAliasResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteCustomDomainResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteFunctionAsyncInvokeConfigRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteFunctionAsyncInvokeConfigResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteFunctionHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteFunctionOnDemandConfigHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteFunctionOnDemandConfigRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteFunctionOnDemandConfigResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteFunctionResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteLayerVersionResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteServiceHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteServiceVersionResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteTriggerHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteTriggerResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeleteVpcBindingResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeregisterEventSourceRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\DeregisterEventSourceResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetAccountSettingsResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetAliasResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetCustomDomainResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetFunctionAsyncInvokeConfigRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetFunctionAsyncInvokeConfigResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetFunctionCodeRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetFunctionCodeResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetFunctionOnDemandConfigRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetFunctionOnDemandConfigResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetFunctionRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetFunctionResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetLayerVersionByArnResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetLayerVersionResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetProvisionConfigRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetProvisionConfigResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetResourceTagsRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetResourceTagsResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetServiceRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetServiceResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetStatefulAsyncInvocationRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetStatefulAsyncInvocationResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\GetTriggerResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\InvokeFunctionHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\InvokeFunctionRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\InvokeFunctionResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListAliasesRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListAliasesResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListCustomDomainsRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListCustomDomainsResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListEventSourcesRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListEventSourcesResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListFunctionAsyncInvokeConfigsRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListFunctionAsyncInvokeConfigsResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListFunctionsRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListFunctionsResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListInstancesHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListInstancesRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListInstancesResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListLayersRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListLayersResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListLayerVersionsRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListLayerVersionsResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListOnDemandConfigsRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListOnDemandConfigsResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListProvisionConfigsRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListProvisionConfigsResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListReservedCapacitiesRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListReservedCapacitiesResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListServicesRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListServicesResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListServiceVersionsRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListServiceVersionsResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListStatefulAsyncInvocationsRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListStatefulAsyncInvocationsResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListTaggedResourcesRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListTaggedResourcesResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListTriggersRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListTriggersResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListVpcBindingsResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\PermanentDeleteLayerVersionResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\PublishLayerAsPublicResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\PublishServiceVersionHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\PublishServiceVersionRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\PublishServiceVersionResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\PutFunctionAsyncInvokeConfigRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\PutFunctionAsyncInvokeConfigResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\PutFunctionOnDemandConfigHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\PutFunctionOnDemandConfigRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\PutFunctionOnDemandConfigResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\PutProvisionConfigRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\PutProvisionConfigResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\RegisterEventSourceRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\RegisterEventSourceResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\StopStatefulAsyncInvocationRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\StopStatefulAsyncInvocationResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\TagResourceRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\TagResourceResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UntagResourceRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UntagResourceResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateAliasHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateAliasRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateAliasResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateCustomDomainRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateCustomDomainResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateFunctionHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateFunctionRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateFunctionResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateServiceHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateTriggerHeaders;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateTriggerRequest;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\UpdateTriggerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class FCOpen extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'      => 'account-id.ap-northeast-1.fc.aliyuncs.com',
            'ap-south-1'          => 'account-id.ap-south-1.fc.aliyuncs.com',
            'ap-southeast-1'      => 'account-id.ap-southeast-1.fc.aliyuncs.com',
            'ap-southeast-2'      => 'account-id.ap-southeast-2.fc.aliyuncs.com',
            'ap-southeast-3'      => 'account-id.ap-southeast-3.fc.aliyuncs.com',
            'ap-southeast-5'      => 'account-id.ap-southeast-5.fc.aliyuncs.com',
            'cn-beijing'          => 'account-id.cn-beijing.fc.aliyuncs.com',
            'cn-chengdu'          => 'account-id.cn-chengdu.fc.aliyuncs.com',
            'cn-hangzhou'         => 'account-id.cn-hangzhou.fc.aliyuncs.com',
            'cn-hangzhou-finance' => 'account-id.cn-hangzhou-finance.fc.aliyuncs.com',
            'cn-hongkong'         => 'account-id.cn-hongkong.fc.aliyuncs.com',
            'cn-huhehaote'        => 'account-id.cn-huhehaote.fc.aliyuncs.com',
            'cn-north-2-gov-1'    => 'account-id.cn-north-2-gov-1.fc.aliyuncs.com',
            'cn-qingdao'          => 'account-id.cn-qingdao.fc.aliyuncs.com',
            'cn-shanghai'         => 'account-id.cn-shanghai.fc.aliyuncs.com',
            'cn-shenzhen'         => 'account-id.cn-shenzhen.fc.aliyuncs.com',
            'cn-zhangjiakou'      => 'account-id.cn-zhangjiakou.fc.aliyuncs.com',
            'eu-central-1'        => 'account-id.eu-central-1.fc.aliyuncs.com',
            'eu-west-1'           => 'account-id.eu-west-1.fc.aliyuncs.com',
            'us-east-1'           => 'account-id.us-east-1.fc.aliyuncs.com',
            'us-west-1'           => 'account-id.us-west-1.fc.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('fc-open', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param string             $serviceName
     * @param CreateAliasRequest $request
     *
     * @return CreateAliasResponse
     */
    public function createAlias($serviceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAliasWithOptions($serviceName, $request, $headers, $runtime);
    }

    /**
     * @param string             $serviceName
     * @param CreateAliasRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAliasResponse
     */
    public function createAliasWithOptions($serviceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $body        = [];
        if (!Utils::isUnset($request->additionalVersionWeight)) {
            @$body['additionalVersionWeight'] = $request->additionalVersionWeight;
        }
        if (!Utils::isUnset($request->aliasName)) {
            @$body['aliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->versionId)) {
            @$body['versionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAlias',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/aliases',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCustomDomainRequest $request
     *
     * @return CreateCustomDomainResponse
     */
    public function createCustomDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateCustomDomainRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCustomDomainResponse
     */
    public function createCustomDomainWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->certConfig)) {
            @$body['certConfig'] = $request->certConfig;
        }
        if (!Utils::isUnset($request->domainName)) {
            @$body['domainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->protocol)) {
            @$body['protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->routeConfig)) {
            @$body['routeConfig'] = $request->routeConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomDomain',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/custom-domains',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $serviceName
     * @param CreateFunctionRequest $request
     *
     * @return CreateFunctionResponse
     */
    public function createFunction($serviceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateFunctionHeaders([]);

        return $this->createFunctionWithOptions($serviceName, $request, $headers, $runtime);
    }

    /**
     * @param string                $serviceName
     * @param CreateFunctionRequest $request
     * @param CreateFunctionHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFunctionResponse
     */
    public function createFunctionWithOptions($serviceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $body        = [];
        if (!Utils::isUnset($request->caPort)) {
            @$body['caPort'] = $request->caPort;
        }
        if (!Utils::isUnset($request->code)) {
            @$body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->customContainerConfig)) {
            @$body['customContainerConfig'] = $request->customContainerConfig;
        }
        if (!Utils::isUnset($request->customDNS)) {
            @$body['customDNS'] = $request->customDNS;
        }
        if (!Utils::isUnset($request->customRuntimeConfig)) {
            @$body['customRuntimeConfig'] = $request->customRuntimeConfig;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->environmentVariables)) {
            @$body['environmentVariables'] = $request->environmentVariables;
        }
        if (!Utils::isUnset($request->functionName)) {
            @$body['functionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->handler)) {
            @$body['handler'] = $request->handler;
        }
        if (!Utils::isUnset($request->initializationTimeout)) {
            @$body['initializationTimeout'] = $request->initializationTimeout;
        }
        if (!Utils::isUnset($request->initializer)) {
            @$body['initializer'] = $request->initializer;
        }
        if (!Utils::isUnset($request->instanceConcurrency)) {
            @$body['instanceConcurrency'] = $request->instanceConcurrency;
        }
        if (!Utils::isUnset($request->instanceLifecycleConfig)) {
            @$body['instanceLifecycleConfig'] = $request->instanceLifecycleConfig;
        }
        if (!Utils::isUnset($request->instanceType)) {
            @$body['instanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->layers)) {
            @$body['layers'] = $request->layers;
        }
        if (!Utils::isUnset($request->memorySize)) {
            @$body['memorySize'] = $request->memorySize;
        }
        if (!Utils::isUnset($request->runtime)) {
            @$body['runtime'] = $request->runtime;
        }
        if (!Utils::isUnset($request->timeout)) {
            @$body['timeout'] = $request->timeout;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xFcCodeChecksum)) {
            @$realHeaders['x-fc-code-checksum'] = Utils::toJSONString($headers->xFcCodeChecksum);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFunction',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $layerName
     * @param CreateLayerVersionRequest $request
     *
     * @return CreateLayerVersionResponse
     */
    public function createLayerVersion($layerName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLayerVersionWithOptions($layerName, $request, $headers, $runtime);
    }

    /**
     * @param string                    $layerName
     * @param CreateLayerVersionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLayerVersionResponse
     */
    public function createLayerVersionWithOptions($layerName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $layerName = OpenApiUtilClient::getEncodeParam($layerName);
        $body      = [];
        if (!Utils::isUnset($request->code)) {
            @$body['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->compatibleRuntime)) {
            @$body['compatibleRuntime'] = $request->compatibleRuntime;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLayerVersion',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/layers/' . $layerName . '/versions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateLayerVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->internetAccess)) {
            @$body['internetAccess'] = $request->internetAccess;
        }
        if (!Utils::isUnset($request->logConfig)) {
            @$body['logConfig'] = $request->logConfig;
        }
        if (!Utils::isUnset($request->nasConfig)) {
            @$body['nasConfig'] = $request->nasConfig;
        }
        if (!Utils::isUnset($request->role)) {
            @$body['role'] = $request->role;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$body['serviceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->tracingConfig)) {
            @$body['tracingConfig'] = $request->tracingConfig;
        }
        if (!Utils::isUnset($request->vpcConfig)) {
            @$body['vpcConfig'] = $request->vpcConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateService',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $serviceName
     * @param string               $functionName
     * @param CreateTriggerRequest $request
     *
     * @return CreateTriggerResponse
     */
    public function createTrigger($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTriggerWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string               $serviceName
     * @param string               $functionName
     * @param CreateTriggerRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateTriggerResponse
     */
    public function createTriggerWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $body         = [];
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->invocationRole)) {
            @$body['invocationRole'] = $request->invocationRole;
        }
        if (!Utils::isUnset($request->qualifier)) {
            @$body['qualifier'] = $request->qualifier;
        }
        if (!Utils::isUnset($request->sourceArn)) {
            @$body['sourceArn'] = $request->sourceArn;
        }
        if (!Utils::isUnset($request->triggerConfig)) {
            @$body['triggerConfig'] = $request->triggerConfig;
        }
        if (!Utils::isUnset($request->triggerName)) {
            @$body['triggerName'] = $request->triggerName;
        }
        if (!Utils::isUnset($request->triggerType)) {
            @$body['triggerType'] = $request->triggerType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTrigger',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/triggers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $serviceName
     * @param CreateVpcBindingRequest $request
     *
     * @return CreateVpcBindingResponse
     */
    public function createVpcBinding($serviceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVpcBindingWithOptions($serviceName, $request, $headers, $runtime);
    }

    /**
     * @param string                  $serviceName
     * @param CreateVpcBindingRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateVpcBindingResponse
     */
    public function createVpcBindingWithOptions($serviceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $body        = [];
        if (!Utils::isUnset($request->vpcId)) {
            @$body['vpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcBinding',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/bindings',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateVpcBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $serviceName
     * @param string $aliasName
     *
     * @return DeleteAliasResponse
     */
    public function deleteAlias($serviceName, $aliasName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteAliasHeaders([]);

        return $this->deleteAliasWithOptions($serviceName, $aliasName, $headers, $runtime);
    }

    /**
     * @param string             $serviceName
     * @param string             $aliasName
     * @param DeleteAliasHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAliasResponse
     */
    public function deleteAliasWithOptions($serviceName, $aliasName, $headers, $runtime)
    {
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $aliasName   = OpenApiUtilClient::getEncodeParam($aliasName);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            @$realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'DeleteAlias',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/aliases/' . $aliasName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $domainName
     *
     * @return DeleteCustomDomainResponse
     */
    public function deleteCustomDomain($domainName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCustomDomainWithOptions($domainName, $headers, $runtime);
    }

    /**
     * @param string         $domainName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCustomDomainResponse
     */
    public function deleteCustomDomainWithOptions($domainName, $headers, $runtime)
    {
        $domainName = OpenApiUtilClient::getEncodeParam($domainName);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomDomain',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/custom-domains/' . $domainName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $serviceName
     * @param string $functionName
     *
     * @return DeleteFunctionResponse
     */
    public function deleteFunction($serviceName, $functionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteFunctionHeaders([]);

        return $this->deleteFunctionWithOptions($serviceName, $functionName, $headers, $runtime);
    }

    /**
     * @param string                $serviceName
     * @param string                $functionName
     * @param DeleteFunctionHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteFunctionResponse
     */
    public function deleteFunctionWithOptions($serviceName, $functionName, $headers, $runtime)
    {
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $realHeaders  = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            @$realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'DeleteFunction',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                 $serviceName
     * @param string                                 $functionName
     * @param DeleteFunctionAsyncInvokeConfigRequest $request
     *
     * @return DeleteFunctionAsyncInvokeConfigResponse
     */
    public function deleteFunctionAsyncInvokeConfig($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionAsyncInvokeConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                                 $serviceName
     * @param string                                 $functionName
     * @param DeleteFunctionAsyncInvokeConfigRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteFunctionAsyncInvokeConfigResponse
     */
    public function deleteFunctionAsyncInvokeConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFunctionAsyncInvokeConfig',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/async-invoke-config',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteFunctionAsyncInvokeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                              $serviceName
     * @param string                              $functionName
     * @param DeleteFunctionOnDemandConfigRequest $request
     *
     * @return DeleteFunctionOnDemandConfigResponse
     */
    public function deleteFunctionOnDemandConfig($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteFunctionOnDemandConfigHeaders([]);

        return $this->deleteFunctionOnDemandConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                              $serviceName
     * @param string                              $functionName
     * @param DeleteFunctionOnDemandConfigRequest $request
     * @param DeleteFunctionOnDemandConfigHeaders $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteFunctionOnDemandConfigResponse
     */
    public function deleteFunctionOnDemandConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            @$realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFunctionOnDemandConfig',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/on-demand-config',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteFunctionOnDemandConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $layerName
     * @param string $version
     *
     * @return DeleteLayerVersionResponse
     */
    public function deleteLayerVersion($layerName, $version)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLayerVersionWithOptions($layerName, $version, $headers, $runtime);
    }

    /**
     * @param string         $layerName
     * @param string         $version
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLayerVersionResponse
     */
    public function deleteLayerVersionWithOptions($layerName, $version, $headers, $runtime)
    {
        $layerName = OpenApiUtilClient::getEncodeParam($layerName);
        $version   = OpenApiUtilClient::getEncodeParam($version);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteLayerVersion',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/layers/' . $layerName . '/versions/' . $version . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteLayerVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $serviceName
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($serviceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteServiceHeaders([]);

        return $this->deleteServiceWithOptions($serviceName, $headers, $runtime);
    }

    /**
     * @param string               $serviceName
     * @param DeleteServiceHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($serviceName, $headers, $runtime)
    {
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            @$realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'DeleteService',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $serviceName
     * @param string $versionId
     *
     * @return DeleteServiceVersionResponse
     */
    public function deleteServiceVersion($serviceName, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceVersionWithOptions($serviceName, $versionId, $headers, $runtime);
    }

    /**
     * @param string         $serviceName
     * @param string         $versionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceVersionResponse
     */
    public function deleteServiceVersionWithOptions($serviceName, $versionId, $headers, $runtime)
    {
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $versionId   = OpenApiUtilClient::getEncodeParam($versionId);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceVersion',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/versions/' . $versionId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $serviceName
     * @param string $functionName
     * @param string $triggerName
     *
     * @return DeleteTriggerResponse
     */
    public function deleteTrigger($serviceName, $functionName, $triggerName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteTriggerHeaders([]);

        return $this->deleteTriggerWithOptions($serviceName, $functionName, $triggerName, $headers, $runtime);
    }

    /**
     * @param string               $serviceName
     * @param string               $functionName
     * @param string               $triggerName
     * @param DeleteTriggerHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteTriggerResponse
     */
    public function deleteTriggerWithOptions($serviceName, $functionName, $triggerName, $headers, $runtime)
    {
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $triggerName  = OpenApiUtilClient::getEncodeParam($triggerName);
        $realHeaders  = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            @$realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'DeleteTrigger',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/triggers/' . $triggerName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $serviceName
     * @param string $vpcId
     *
     * @return DeleteVpcBindingResponse
     */
    public function deleteVpcBinding($serviceName, $vpcId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVpcBindingWithOptions($serviceName, $vpcId, $headers, $runtime);
    }

    /**
     * @param string         $serviceName
     * @param string         $vpcId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteVpcBindingResponse
     */
    public function deleteVpcBindingWithOptions($serviceName, $vpcId, $headers, $runtime)
    {
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $vpcId       = OpenApiUtilClient::getEncodeParam($vpcId);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcBinding',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/bindings/' . $vpcId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteVpcBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $serviceName
     * @param string                       $functionName
     * @param string                       $sourceArn
     * @param DeregisterEventSourceRequest $request
     *
     * @return DeregisterEventSourceResponse
     */
    public function deregisterEventSource($serviceName, $functionName, $sourceArn, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deregisterEventSourceWithOptions($serviceName, $functionName, $sourceArn, $request, $headers, $runtime);
    }

    /**
     * @param string                       $serviceName
     * @param string                       $functionName
     * @param string                       $sourceArn
     * @param DeregisterEventSourceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeregisterEventSourceResponse
     */
    public function deregisterEventSourceWithOptions($serviceName, $functionName, $sourceArn, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $sourceArn    = OpenApiUtilClient::getEncodeParam($sourceArn);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeregisterEventSource',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/event-sources/' . $sourceArn . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeregisterEventSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetAccountSettingsResponse
     */
    public function getAccountSettings()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAccountSettingsWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountSettingsResponse
     */
    public function getAccountSettingsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAccountSettings',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/account-settings',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAccountSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $serviceName
     * @param string $aliasName
     *
     * @return GetAliasResponse
     */
    public function getAlias($serviceName, $aliasName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAliasWithOptions($serviceName, $aliasName, $headers, $runtime);
    }

    /**
     * @param string         $serviceName
     * @param string         $aliasName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAliasResponse
     */
    public function getAliasWithOptions($serviceName, $aliasName, $headers, $runtime)
    {
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $aliasName   = OpenApiUtilClient::getEncodeParam($aliasName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAlias',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/aliases/' . $aliasName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $domainName
     *
     * @return GetCustomDomainResponse
     */
    public function getCustomDomain($domainName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCustomDomainWithOptions($domainName, $headers, $runtime);
    }

    /**
     * @param string         $domainName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCustomDomainResponse
     */
    public function getCustomDomainWithOptions($domainName, $headers, $runtime)
    {
        $domainName = OpenApiUtilClient::getEncodeParam($domainName);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetCustomDomain',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/custom-domains/' . $domainName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $serviceName
     * @param string             $functionName
     * @param GetFunctionRequest $request
     *
     * @return GetFunctionResponse
     */
    public function getFunction($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string             $serviceName
     * @param string             $functionName
     * @param GetFunctionRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetFunctionResponse
     */
    public function getFunctionWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunction',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                              $serviceName
     * @param string                              $functionName
     * @param GetFunctionAsyncInvokeConfigRequest $request
     *
     * @return GetFunctionAsyncInvokeConfigResponse
     */
    public function getFunctionAsyncInvokeConfig($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionAsyncInvokeConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                              $serviceName
     * @param string                              $functionName
     * @param GetFunctionAsyncInvokeConfigRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetFunctionAsyncInvokeConfigResponse
     */
    public function getFunctionAsyncInvokeConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunctionAsyncInvokeConfig',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/async-invoke-config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionAsyncInvokeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $serviceName
     * @param string                 $functionName
     * @param GetFunctionCodeRequest $request
     *
     * @return GetFunctionCodeResponse
     */
    public function getFunctionCode($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionCodeWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                 $serviceName
     * @param string                 $functionName
     * @param GetFunctionCodeRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetFunctionCodeResponse
     */
    public function getFunctionCodeWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunctionCode',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/code',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $serviceName
     * @param string                           $functionName
     * @param GetFunctionOnDemandConfigRequest $request
     *
     * @return GetFunctionOnDemandConfigResponse
     */
    public function getFunctionOnDemandConfig($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionOnDemandConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                           $serviceName
     * @param string                           $functionName
     * @param GetFunctionOnDemandConfigRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetFunctionOnDemandConfigResponse
     */
    public function getFunctionOnDemandConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunctionOnDemandConfig',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/on-demand-config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionOnDemandConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $layerName
     * @param string $version
     *
     * @return GetLayerVersionResponse
     */
    public function getLayerVersion($layerName, $version)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLayerVersionWithOptions($layerName, $version, $headers, $runtime);
    }

    /**
     * @param string         $layerName
     * @param string         $version
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLayerVersionResponse
     */
    public function getLayerVersionWithOptions($layerName, $version, $headers, $runtime)
    {
        $layerName = OpenApiUtilClient::getEncodeParam($layerName);
        $version   = OpenApiUtilClient::getEncodeParam($version);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLayerVersion',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/layers/' . $layerName . '/versions/' . $version . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLayerVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $arn
     *
     * @return GetLayerVersionByArnResponse
     */
    public function getLayerVersionByArn($arn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLayerVersionByArnWithOptions($arn, $headers, $runtime);
    }

    /**
     * @param string         $arn
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLayerVersionByArnResponse
     */
    public function getLayerVersionByArnWithOptions($arn, $headers, $runtime)
    {
        $arn = OpenApiUtilClient::getEncodeParam($arn);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLayerVersionByArn',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/layerarn/' . $arn . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLayerVersionByArnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $serviceName
     * @param string                    $functionName
     * @param GetProvisionConfigRequest $request
     *
     * @return GetProvisionConfigResponse
     */
    public function getProvisionConfig($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProvisionConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                    $serviceName
     * @param string                    $functionName
     * @param GetProvisionConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetProvisionConfigResponse
     */
    public function getProvisionConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $body = [];
        if (!Utils::isUnset($request->target)) {
            @$body['target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetProvisionConfig',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/provision-config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProvisionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceTagsRequest $request
     *
     * @return GetResourceTagsResponse
     */
    public function getResourceTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetResourceTagsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetResourceTagsResponse
     */
    public function getResourceTagsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceArn)) {
            @$query['resourceArn'] = $request->resourceArn;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceTags',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/tag',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $serviceName
     * @param GetServiceRequest $request
     *
     * @return GetServiceResponse
     */
    public function getService($serviceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($serviceName, $request, $headers, $runtime);
    }

    /**
     * @param string            $serviceName
     * @param GetServiceRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($serviceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $query       = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetService',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $serviceName
     * @param string                            $functionName
     * @param string                            $invocationId
     * @param GetStatefulAsyncInvocationRequest $request
     *
     * @return GetStatefulAsyncInvocationResponse
     */
    public function getStatefulAsyncInvocation($serviceName, $functionName, $invocationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStatefulAsyncInvocationWithOptions($serviceName, $functionName, $invocationId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $serviceName
     * @param string                            $functionName
     * @param string                            $invocationId
     * @param GetStatefulAsyncInvocationRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetStatefulAsyncInvocationResponse
     */
    public function getStatefulAsyncInvocationWithOptions($serviceName, $functionName, $invocationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $invocationId = OpenApiUtilClient::getEncodeParam($invocationId);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStatefulAsyncInvocation',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/stateful-async-invocations/' . $invocationId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetStatefulAsyncInvocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $serviceName
     * @param string $functionName
     * @param string $triggerName
     *
     * @return GetTriggerResponse
     */
    public function getTrigger($serviceName, $functionName, $triggerName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTriggerWithOptions($serviceName, $functionName, $triggerName, $headers, $runtime);
    }

    /**
     * @param string         $serviceName
     * @param string         $functionName
     * @param string         $triggerName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTriggerResponse
     */
    public function getTriggerWithOptions($serviceName, $functionName, $triggerName, $headers, $runtime)
    {
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $triggerName  = OpenApiUtilClient::getEncodeParam($triggerName);
        $req          = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTrigger',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/triggers/' . $triggerName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $serviceName
     * @param string                $functionName
     * @param InvokeFunctionRequest $request
     *
     * @return InvokeFunctionResponse
     */
    public function invokeFunction($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvokeFunctionHeaders([]);

        return $this->invokeFunctionWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                $serviceName
     * @param string                $functionName
     * @param InvokeFunctionRequest $request
     * @param InvokeFunctionHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return InvokeFunctionResponse
     */
    public function invokeFunctionWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xFcAccountId)) {
            @$realHeaders['X-Fc-Account-Id'] = Utils::toJSONString($headers->xFcAccountId);
        }
        if (!Utils::isUnset($headers->xFcInvocationType)) {
            @$realHeaders['x-fc-invocation-type'] = Utils::toJSONString($headers->xFcInvocationType);
        }
        if (!Utils::isUnset($headers->xFcLogType)) {
            @$realHeaders['x-fc-log-type'] = Utils::toJSONString($headers->xFcLogType);
        }
        if (!Utils::isUnset($headers->xFcStatefulAsyncInvocationId)) {
            @$realHeaders['x-fc-stateful-async-invocation-id'] = Utils::toJSONString($headers->xFcStatefulAsyncInvocationId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'InvokeFunction',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/invocations',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'byte',
        ]);

        return InvokeFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $serviceName
     * @param ListAliasesRequest $request
     *
     * @return ListAliasesResponse
     */
    public function listAliases($serviceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAliasesWithOptions($serviceName, $request, $headers, $runtime);
    }

    /**
     * @param string             $serviceName
     * @param ListAliasesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListAliasesResponse
     */
    public function listAliasesWithOptions($serviceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $query       = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            @$query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->startKey)) {
            @$query['startKey'] = $request->startKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAliases',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/aliases',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAliasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCustomDomainsRequest $request
     *
     * @return ListCustomDomainsResponse
     */
    public function listCustomDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCustomDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListCustomDomainsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListCustomDomainsResponse
     */
    public function listCustomDomainsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            @$query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->startKey)) {
            @$query['startKey'] = $request->startKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomDomains',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/custom-domains',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCustomDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $serviceName
     * @param string                  $functionName
     * @param ListEventSourcesRequest $request
     *
     * @return ListEventSourcesResponse
     */
    public function listEventSources($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEventSourcesWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                  $serviceName
     * @param string                  $functionName
     * @param ListEventSourcesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListEventSourcesResponse
     */
    public function listEventSourcesWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEventSources',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/event-sources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEventSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                $serviceName
     * @param string                                $functionName
     * @param ListFunctionAsyncInvokeConfigsRequest $request
     *
     * @return ListFunctionAsyncInvokeConfigsResponse
     */
    public function listFunctionAsyncInvokeConfigs($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionAsyncInvokeConfigsWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                                $serviceName
     * @param string                                $functionName
     * @param ListFunctionAsyncInvokeConfigsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListFunctionAsyncInvokeConfigsResponse
     */
    public function listFunctionAsyncInvokeConfigsWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctionAsyncInvokeConfigs',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/async-invoke-configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFunctionAsyncInvokeConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $serviceName
     * @param ListFunctionsRequest $request
     *
     * @return ListFunctionsResponse
     */
    public function listFunctions($serviceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionsWithOptions($serviceName, $request, $headers, $runtime);
    }

    /**
     * @param string               $serviceName
     * @param ListFunctionsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListFunctionsResponse
     */
    public function listFunctionsWithOptions($serviceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $query       = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            @$query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        if (!Utils::isUnset($request->startKey)) {
            @$query['startKey'] = $request->startKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctions',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFunctionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $serviceName
     * @param string               $functionName
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListInstancesHeaders([]);

        return $this->listInstancesWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string               $serviceName
     * @param string               $functionName
     * @param ListInstancesRequest $request
     * @param ListInstancesHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xFcAccountId)) {
            @$realHeaders['X-Fc-Account-Id'] = Utils::toJSONString($headers->xFcAccountId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $layerName
     * @param ListLayerVersionsRequest $request
     *
     * @return ListLayerVersionsResponse
     */
    public function listLayerVersions($layerName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLayerVersionsWithOptions($layerName, $request, $headers, $runtime);
    }

    /**
     * @param string                   $layerName
     * @param ListLayerVersionsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListLayerVersionsResponse
     */
    public function listLayerVersionsWithOptions($layerName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $layerName = OpenApiUtilClient::getEncodeParam($layerName);
        $query     = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->startVersion)) {
            @$query['startVersion'] = $request->startVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLayerVersions',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/layers/' . $layerName . '/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLayerVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLayersRequest $request
     *
     * @return ListLayersResponse
     */
    public function listLayers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLayersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListLayersRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListLayersResponse
     */
    public function listLayersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            @$query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->startKey)) {
            @$query['startKey'] = $request->startKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLayers',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/layers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLayersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOnDemandConfigsRequest $request
     *
     * @return ListOnDemandConfigsResponse
     */
    public function listOnDemandConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOnDemandConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListOnDemandConfigsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListOnDemandConfigsResponse
     */
    public function listOnDemandConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            @$query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->startKey)) {
            @$query['startKey'] = $request->startKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOnDemandConfigs',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/on-demand-configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOnDemandConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProvisionConfigsRequest $request
     *
     * @return ListProvisionConfigsResponse
     */
    public function listProvisionConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProvisionConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProvisionConfigsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListProvisionConfigsResponse
     */
    public function listProvisionConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$query['serviceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProvisionConfigs',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/provision-configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProvisionConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListReservedCapacitiesRequest $request
     *
     * @return ListReservedCapacitiesResponse
     */
    public function listReservedCapacities($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listReservedCapacitiesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListReservedCapacitiesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListReservedCapacitiesResponse
     */
    public function listReservedCapacitiesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListReservedCapacities',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/reserved-capacities',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListReservedCapacitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $serviceName
     * @param ListServiceVersionsRequest $request
     *
     * @return ListServiceVersionsResponse
     */
    public function listServiceVersions($serviceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceVersionsWithOptions($serviceName, $request, $headers, $runtime);
    }

    /**
     * @param string                     $serviceName
     * @param ListServiceVersionsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListServiceVersionsResponse
     */
    public function listServiceVersionsWithOptions($serviceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $query       = [];
        if (!Utils::isUnset($request->direction)) {
            @$query['direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startKey)) {
            @$query['startKey'] = $request->startKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceVersions',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListServicesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            @$query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->startKey)) {
            @$query['startKey'] = $request->startKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServices',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                              $serviceName
     * @param string                              $functionName
     * @param ListStatefulAsyncInvocationsRequest $request
     *
     * @return ListStatefulAsyncInvocationsResponse
     */
    public function listStatefulAsyncInvocations($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStatefulAsyncInvocationsWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                              $serviceName
     * @param string                              $functionName
     * @param ListStatefulAsyncInvocationsRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListStatefulAsyncInvocationsResponse
     */
    public function listStatefulAsyncInvocationsWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->includePayload)) {
            @$query['includePayload'] = $request->includePayload;
        }
        if (!Utils::isUnset($request->invocationIdPrefix)) {
            @$query['invocationIdPrefix'] = $request->invocationIdPrefix;
        }
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        if (!Utils::isUnset($request->sortOrderByTime)) {
            @$query['sortOrderByTime'] = $request->sortOrderByTime;
        }
        if (!Utils::isUnset($request->startedTimeBegin)) {
            @$query['startedTimeBegin'] = $request->startedTimeBegin;
        }
        if (!Utils::isUnset($request->startedTimeEnd)) {
            @$query['startedTimeEnd'] = $request->startedTimeEnd;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStatefulAsyncInvocations',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/stateful-async-invocations',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListStatefulAsyncInvocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaggedResourcesRequest $request
     *
     * @return ListTaggedResourcesResponse
     */
    public function listTaggedResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTaggedResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTaggedResourcesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListTaggedResourcesResponse
     */
    public function listTaggedResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaggedResources',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/tags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTaggedResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $serviceName
     * @param string              $functionName
     * @param ListTriggersRequest $request
     *
     * @return ListTriggersResponse
     */
    public function listTriggers($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTriggersWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string              $serviceName
     * @param string              $functionName
     * @param ListTriggersRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListTriggersResponse
     */
    public function listTriggersWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->limit)) {
            @$query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            @$query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->startKey)) {
            @$query['startKey'] = $request->startKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTriggers',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/triggers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTriggersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $serviceName
     *
     * @return ListVpcBindingsResponse
     */
    public function listVpcBindings($serviceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVpcBindingsWithOptions($serviceName, $headers, $runtime);
    }

    /**
     * @param string         $serviceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListVpcBindingsResponse
     */
    public function listVpcBindingsWithOptions($serviceName, $headers, $runtime)
    {
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListVpcBindings',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/bindings',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVpcBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $userID
     * @param string $layerName
     * @param string $version
     *
     * @return PermanentDeleteLayerVersionResponse
     */
    public function permanentDeleteLayerVersion($userID, $layerName, $version)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->permanentDeleteLayerVersionWithOptions($userID, $layerName, $version, $headers, $runtime);
    }

    /**
     * @param string         $userID
     * @param string         $layerName
     * @param string         $version
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PermanentDeleteLayerVersionResponse
     */
    public function permanentDeleteLayerVersionWithOptions($userID, $layerName, $version, $headers, $runtime)
    {
        $userID    = OpenApiUtilClient::getEncodeParam($userID);
        $layerName = OpenApiUtilClient::getEncodeParam($layerName);
        $version   = OpenApiUtilClient::getEncodeParam($version);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PermanentDeleteLayerVersion',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/adminlayers/' . $userID . '/' . $layerName . '/versions/' . $version . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PermanentDeleteLayerVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $layerName
     * @param string $version
     *
     * @return PublishLayerAsPublicResponse
     */
    public function publishLayerAsPublic($layerName, $version)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishLayerAsPublicWithOptions($layerName, $version, $headers, $runtime);
    }

    /**
     * @param string         $layerName
     * @param string         $version
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PublishLayerAsPublicResponse
     */
    public function publishLayerAsPublicWithOptions($layerName, $version, $headers, $runtime)
    {
        $layerName = OpenApiUtilClient::getEncodeParam($layerName);
        $version   = OpenApiUtilClient::getEncodeParam($version);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PublishLayerAsPublic',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/layers/' . $layerName . '/versions/' . $version . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PublishLayerAsPublicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $serviceName
     * @param PublishServiceVersionRequest $request
     *
     * @return PublishServiceVersionResponse
     */
    public function publishServiceVersion($serviceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PublishServiceVersionHeaders([]);

        return $this->publishServiceVersionWithOptions($serviceName, $request, $headers, $runtime);
    }

    /**
     * @param string                       $serviceName
     * @param PublishServiceVersionRequest $request
     * @param PublishServiceVersionHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return PublishServiceVersionResponse
     */
    public function publishServiceVersionWithOptions($serviceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $body        = [];
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            @$realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishServiceVersion',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/versions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                              $serviceName
     * @param string                              $functionName
     * @param PutFunctionAsyncInvokeConfigRequest $request
     *
     * @return PutFunctionAsyncInvokeConfigResponse
     */
    public function putFunctionAsyncInvokeConfig($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putFunctionAsyncInvokeConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                              $serviceName
     * @param string                              $functionName
     * @param PutFunctionAsyncInvokeConfigRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return PutFunctionAsyncInvokeConfigResponse
     */
    public function putFunctionAsyncInvokeConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $body = [];
        if (!Utils::isUnset($request->destinationConfig)) {
            @$body['destinationConfig'] = $request->destinationConfig;
        }
        if (!Utils::isUnset($request->maxAsyncEventAgeInSeconds)) {
            @$body['maxAsyncEventAgeInSeconds'] = $request->maxAsyncEventAgeInSeconds;
        }
        if (!Utils::isUnset($request->maxAsyncRetryAttempts)) {
            @$body['maxAsyncRetryAttempts'] = $request->maxAsyncRetryAttempts;
        }
        if (!Utils::isUnset($request->statefulInvocation)) {
            @$body['statefulInvocation'] = $request->statefulInvocation;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutFunctionAsyncInvokeConfig',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/async-invoke-config',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutFunctionAsyncInvokeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $serviceName
     * @param string                           $functionName
     * @param PutFunctionOnDemandConfigRequest $request
     *
     * @return PutFunctionOnDemandConfigResponse
     */
    public function putFunctionOnDemandConfig($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PutFunctionOnDemandConfigHeaders([]);

        return $this->putFunctionOnDemandConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                           $serviceName
     * @param string                           $functionName
     * @param PutFunctionOnDemandConfigRequest $request
     * @param PutFunctionOnDemandConfigHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return PutFunctionOnDemandConfigResponse
     */
    public function putFunctionOnDemandConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $body = [];
        if (!Utils::isUnset($request->maximumInstanceCount)) {
            @$body['maximumInstanceCount'] = $request->maximumInstanceCount;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            @$realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutFunctionOnDemandConfig',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/on-demand-config',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutFunctionOnDemandConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $serviceName
     * @param string                    $functionName
     * @param PutProvisionConfigRequest $request
     *
     * @return PutProvisionConfigResponse
     */
    public function putProvisionConfig($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putProvisionConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                    $serviceName
     * @param string                    $functionName
     * @param PutProvisionConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return PutProvisionConfigResponse
     */
    public function putProvisionConfigWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $body = [];
        if (!Utils::isUnset($request->scheduledActions)) {
            @$body['scheduledActions'] = $request->scheduledActions;
        }
        if (!Utils::isUnset($request->target)) {
            @$body['target'] = $request->target;
        }
        if (!Utils::isUnset($request->targetTrackingPolicies)) {
            @$body['targetTrackingPolicies'] = $request->targetTrackingPolicies;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutProvisionConfig',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/provision-config',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutProvisionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $serviceName
     * @param string                     $functionName
     * @param RegisterEventSourceRequest $request
     *
     * @return RegisterEventSourceResponse
     */
    public function registerEventSource($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->registerEventSourceWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                     $serviceName
     * @param string                     $functionName
     * @param RegisterEventSourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RegisterEventSourceResponse
     */
    public function registerEventSourceWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $body = [];
        if (!Utils::isUnset($request->sourceArn)) {
            @$body['sourceArn'] = $request->sourceArn;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RegisterEventSource',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/event-sources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RegisterEventSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                             $serviceName
     * @param string                             $functionName
     * @param string                             $invocationId
     * @param StopStatefulAsyncInvocationRequest $request
     *
     * @return StopStatefulAsyncInvocationResponse
     */
    public function stopStatefulAsyncInvocation($serviceName, $functionName, $invocationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopStatefulAsyncInvocationWithOptions($serviceName, $functionName, $invocationId, $request, $headers, $runtime);
    }

    /**
     * @param string                             $serviceName
     * @param string                             $functionName
     * @param string                             $invocationId
     * @param StopStatefulAsyncInvocationRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return StopStatefulAsyncInvocationResponse
     */
    public function stopStatefulAsyncInvocationWithOptions($serviceName, $functionName, $invocationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $invocationId = OpenApiUtilClient::getEncodeParam($invocationId);
        $query        = [];
        if (!Utils::isUnset($request->qualifier)) {
            @$query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopStatefulAsyncInvocation',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/stateful-async-invocations/' . $invocationId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return StopStatefulAsyncInvocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagResourceRequest $request
     *
     * @return TagResourceResponse
     */
    public function tagResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TagResourceRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return TagResourceResponse
     */
    public function tagResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceArn)) {
            @$body['resourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->tags)) {
            @$body['tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TagResource',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/tag',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return TagResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UntagResourceRequest $request
     *
     * @return UntagResourceResponse
     */
    public function untagResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UntagResourceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UntagResourceResponse
     */
    public function untagResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->all)) {
            @$body['all'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceArn)) {
            @$body['resourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->tagKeys)) {
            @$body['tagKeys'] = $request->tagKeys;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UntagResource',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/tag',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UntagResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $serviceName
     * @param string             $aliasName
     * @param UpdateAliasRequest $request
     *
     * @return UpdateAliasResponse
     */
    public function updateAlias($serviceName, $aliasName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateAliasHeaders([]);

        return $this->updateAliasWithOptions($serviceName, $aliasName, $request, $headers, $runtime);
    }

    /**
     * @param string             $serviceName
     * @param string             $aliasName
     * @param UpdateAliasRequest $request
     * @param UpdateAliasHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAliasResponse
     */
    public function updateAliasWithOptions($serviceName, $aliasName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $aliasName   = OpenApiUtilClient::getEncodeParam($aliasName);
        $body        = [];
        if (!Utils::isUnset($request->additionalVersionWeight)) {
            @$body['additionalVersionWeight'] = $request->additionalVersionWeight;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->versionId)) {
            @$body['versionId'] = $request->versionId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            @$realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlias',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/aliases/' . $aliasName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $domainName
     * @param UpdateCustomDomainRequest $request
     *
     * @return UpdateCustomDomainResponse
     */
    public function updateCustomDomain($domainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCustomDomainWithOptions($domainName, $request, $headers, $runtime);
    }

    /**
     * @param string                    $domainName
     * @param UpdateCustomDomainRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateCustomDomainResponse
     */
    public function updateCustomDomainWithOptions($domainName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $domainName = OpenApiUtilClient::getEncodeParam($domainName);
        $body       = [];
        if (!Utils::isUnset($request->certConfig)) {
            @$body['certConfig'] = $request->certConfig;
        }
        if (!Utils::isUnset($request->protocol)) {
            @$body['protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->routeConfig)) {
            @$body['routeConfig'] = $request->routeConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomDomain',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/custom-domains/' . $domainName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $serviceName
     * @param string                $functionName
     * @param UpdateFunctionRequest $request
     *
     * @return UpdateFunctionResponse
     */
    public function updateFunction($serviceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateFunctionHeaders([]);

        return $this->updateFunctionWithOptions($serviceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                $serviceName
     * @param string                $functionName
     * @param UpdateFunctionRequest $request
     * @param UpdateFunctionHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFunctionResponse
     */
    public function updateFunctionWithOptions($serviceName, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $body         = [];
        if (!Utils::isUnset($request->instanceConcurrency)) {
            @$body['InstanceConcurrency'] = $request->instanceConcurrency;
        }
        if (!Utils::isUnset($request->caPort)) {
            @$body['caPort'] = $request->caPort;
        }
        if (!Utils::isUnset($request->code)) {
            @$body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->customContainerConfig)) {
            @$body['customContainerConfig'] = $request->customContainerConfig;
        }
        if (!Utils::isUnset($request->customDNS)) {
            @$body['customDNS'] = $request->customDNS;
        }
        if (!Utils::isUnset($request->customRuntimeConfig)) {
            @$body['customRuntimeConfig'] = $request->customRuntimeConfig;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->environmentVariables)) {
            @$body['environmentVariables'] = $request->environmentVariables;
        }
        if (!Utils::isUnset($request->handler)) {
            @$body['handler'] = $request->handler;
        }
        if (!Utils::isUnset($request->initializationTimeout)) {
            @$body['initializationTimeout'] = $request->initializationTimeout;
        }
        if (!Utils::isUnset($request->initializer)) {
            @$body['initializer'] = $request->initializer;
        }
        if (!Utils::isUnset($request->instanceLifecycleConfig)) {
            @$body['instanceLifecycleConfig'] = $request->instanceLifecycleConfig;
        }
        if (!Utils::isUnset($request->instanceType)) {
            @$body['instanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->layers)) {
            @$body['layers'] = $request->layers;
        }
        if (!Utils::isUnset($request->memorySize)) {
            @$body['memorySize'] = $request->memorySize;
        }
        if (!Utils::isUnset($request->runtime)) {
            @$body['runtime'] = $request->runtime;
        }
        if (!Utils::isUnset($request->timeout)) {
            @$body['timeout'] = $request->timeout;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            @$realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        if (!Utils::isUnset($headers->xFcAccountId)) {
            @$realHeaders['X-Fc-Account-Id'] = Utils::toJSONString($headers->xFcAccountId);
        }
        if (!Utils::isUnset($headers->xFcCodeChecksum)) {
            @$realHeaders['x-fc-code-checksum'] = Utils::toJSONString($headers->xFcCodeChecksum);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFunction',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $serviceName
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($serviceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateServiceHeaders([]);

        return $this->updateServiceWithOptions($serviceName, $request, $headers, $runtime);
    }

    /**
     * @param string               $serviceName
     * @param UpdateServiceRequest $request
     * @param UpdateServiceHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($serviceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName = OpenApiUtilClient::getEncodeParam($serviceName);
        $body        = [];
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->internetAccess)) {
            @$body['internetAccess'] = $request->internetAccess;
        }
        if (!Utils::isUnset($request->logConfig)) {
            @$body['logConfig'] = $request->logConfig;
        }
        if (!Utils::isUnset($request->nasConfig)) {
            @$body['nasConfig'] = $request->nasConfig;
        }
        if (!Utils::isUnset($request->role)) {
            @$body['role'] = $request->role;
        }
        if (!Utils::isUnset($request->tracingConfig)) {
            @$body['tracingConfig'] = $request->tracingConfig;
        }
        if (!Utils::isUnset($request->vpcConfig)) {
            @$body['vpcConfig'] = $request->vpcConfig;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            @$realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        if (!Utils::isUnset($headers->xFcAccountId)) {
            @$realHeaders['X-Fc-Account-Id'] = Utils::toJSONString($headers->xFcAccountId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateService',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $serviceName
     * @param string               $functionName
     * @param string               $triggerName
     * @param UpdateTriggerRequest $request
     *
     * @return UpdateTriggerResponse
     */
    public function updateTrigger($serviceName, $functionName, $triggerName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateTriggerHeaders([]);

        return $this->updateTriggerWithOptions($serviceName, $functionName, $triggerName, $request, $headers, $runtime);
    }

    /**
     * @param string               $serviceName
     * @param string               $functionName
     * @param string               $triggerName
     * @param UpdateTriggerRequest $request
     * @param UpdateTriggerHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateTriggerResponse
     */
    public function updateTriggerWithOptions($serviceName, $functionName, $triggerName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $serviceName  = OpenApiUtilClient::getEncodeParam($serviceName);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $triggerName  = OpenApiUtilClient::getEncodeParam($triggerName);
        $body         = [];
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->invocationRole)) {
            @$body['invocationRole'] = $request->invocationRole;
        }
        if (!Utils::isUnset($request->qualifier)) {
            @$body['qualifier'] = $request->qualifier;
        }
        if (!Utils::isUnset($request->triggerConfig)) {
            @$body['triggerConfig'] = $request->triggerConfig;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            @$realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        if (!Utils::isUnset($headers->xFcAccountId)) {
            @$realHeaders['X-Fc-Account-Id'] = Utils::toJSONString($headers->xFcAccountId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrigger',
            'version'     => '2021-04-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2021-04-06/services/' . $serviceName . '/functions/' . $functionName . '/triggers/' . $triggerName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
