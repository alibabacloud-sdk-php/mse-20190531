<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthPolicyRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthPolicyResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthResourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthResourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthResourceShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddBlackWhiteListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddBlackWhiteListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayAuthConsumerRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayAuthConsumerResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayDomainRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayDomainResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayServiceVersionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayServiceVersionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewaySlbRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewaySlbResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewaySlbShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddMigrationTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddMigrationTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddMockRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddMockRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddSecurityGroupRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddSecurityGroupRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddSSLCertRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddSSLCertResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ApplyGatewayRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ApplyGatewayRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ApplyTagPoliciesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ApplyTagPoliciesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ApplyTagPoliciesShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CloneNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CloneNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateCircuitBreakerRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateCircuitBreakerRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateEngineNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateEngineNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateFlowRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateFlowRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateMseServiceApplicationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateMseServiceApplicationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosInstanceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosInstanceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosServiceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosServiceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateZnodeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateZnodeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteAuthResourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteAuthResourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteCircuitBreakerRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteCircuitBreakerRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteCircuitBreakerRulesShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteEngineNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteEngineNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteFlowRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteFlowRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteFlowRulesShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayAuthConsumerRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayAuthConsumerResourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayAuthConsumerResourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayAuthConsumerResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayDomainRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayDomainResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayServiceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayServiceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayServiceVersionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayServiceVersionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewaySlbRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewaySlbResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteMigrationTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteMigrationTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosConfigsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosConfigsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosInstanceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosInstanceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosServiceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosServiceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSecurityGroupRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSecurityGroupRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteServiceSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteServiceSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSwimmingLaneRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSwimmingLaneResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteZnodeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteZnodeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ExportNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ExportNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ExportZookeeperDataRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ExportZookeeperDataResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\FetchLosslessRuleListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\FetchLosslessRuleListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationInstanceListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationInstanceListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetAppMessageQueueRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetAppMessageQueueRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetBlackWhiteListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetBlackWhiteListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetEngineNamepaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetEngineNamepaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthConsumerDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthConsumerDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayDomainDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayDomainDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayOptionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayOptionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetImageRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetImageResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetImportFileUrlRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetImportFileUrlResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetKubernetesSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetKubernetesSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetLosslessRuleByAppRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetLosslessRuleByAppResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetMseFeatureSwitchRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetMseFeatureSwitchResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetMseSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetMseSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosHistoryConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosHistoryConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetOverviewRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetOverviewResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListenersRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListenersResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListPageRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListPageResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceMethodPageRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceMethodPageResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetTagsBySwimmingLaneGroupIdRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetTagsBySwimmingLaneGroupIdResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetZookeeperDataImportUrlRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetZookeeperDataImportUrlResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportServicesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportServicesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportServicesShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportZookeeperDataRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportZookeeperDataResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsInstancesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsInstancesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServicesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServicesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAppBySwimmingLaneGroupTagRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAppBySwimmingLaneGroupTagResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAppBySwimmingLaneGroupTagsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAppBySwimmingLaneGroupTagsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAppBySwimmingLaneGroupTagsShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListCircuitBreakerRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListCircuitBreakerRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterConnectionTypesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterConnectionTypesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterHealthCheckTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterHealthCheckTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClustersRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClustersResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterTypesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterTypesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterVersionsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterVersionsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListConfigTrackRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListConfigTrackResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEngineNamespacesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEngineNamespacesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaInstancesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaInstancesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaServicesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaServicesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListExportZookeeperDataRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListExportZookeeperDataResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListFlowRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListFlowRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayAuthConsumerRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayAuthConsumerResourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayAuthConsumerResourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayAuthConsumerResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayDomainRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayDomainResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteOnAuthRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteOnAuthResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewaySlbRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewaySlbResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListInstanceCountRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListInstanceCountResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByIpRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByIpResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListMigrationTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListMigrationTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosConfigsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosConfigsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosHistoryConfigsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosHistoryConfigsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNamingTrackRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNamingTrackResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSecurityGroupRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSecurityGroupResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSecurityGroupRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSecurityGroupRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListServiceSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListServiceSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSSLCertRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListSSLCertResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListZkTrackRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListZkTrackResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListZnodeChildrenRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListZnodeChildrenResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyGovernanceKubernetesClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyGovernanceKubernetesClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyGovernanceKubernetesClusterShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyLosslessRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyLosslessRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\OfflineGatewayRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\OfflineGatewayRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\OrderClusterHealthCheckRiskNoticeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\OrderClusterHealthCheckRiskNoticeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\PullServicesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\PullServicesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\PutClusterHealthCheckTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\PutClusterHealthCheckTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryBusinessLocationsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryBusinessLocationsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDiskSpecificationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDiskSpecificationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterInfoRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterInfoResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterSpecificationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterSpecificationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGatewayRegionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGatewayRegionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGatewayTypeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGatewayTypeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGovernanceKubernetesClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGovernanceKubernetesClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryInstancesInfoRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryInstancesInfoResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryMonitorRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryMonitorResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QuerySlbSpecRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QuerySlbSpecResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QuerySwimmingLaneByIdRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QuerySwimmingLaneByIdResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryZnodeDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryZnodeDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\RemoveApplicationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\RemoveApplicationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\RemoveAuthPolicyRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\RemoveAuthPolicyResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\RestartClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\RestartClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\RetryClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\RetryClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\SelectGatewaySlbRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\SelectGatewaySlbResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateAclRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateAclResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateAuthPolicyRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateAuthPolicyResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateBlackWhiteListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateBlackWhiteListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateCircuitBreakerRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateCircuitBreakerRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateClusterSpecRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateClusterSpecResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateEngineNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateEngineNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateFlowRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateFlowRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResourceShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResourceStatusRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResourceStatusResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerStatusRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerStatusResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayDomainRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayDomainResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayNameRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayNameResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayOptionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayOptionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayOptionShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteAuthRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteAuthResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteAuthShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteCORSRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteCORSResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteCORSShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteHeaderOpRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteHeaderOpResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteHTTPRewriteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteHTTPRewriteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRetryRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRetryResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRetryShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteTimeoutRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteTimeoutResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteTimeoutShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceCheckRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceCheckResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceCheckShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceTrafficPolicyRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceTrafficPolicyResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceTrafficPolicyShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceVersionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayServiceVersionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewaySpecRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewaySpecResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateImageRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateImageResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMessageQueueRouteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMessageQueueRouteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMessageQueueRouteShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMigrationTaskRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMigrationTaskResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosInstanceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosInstanceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosServiceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosServiceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdatePluginConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdatePluginConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateServiceSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateServiceSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateServiceSourceShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateSSLCertRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateSSLCertResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateZnodeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateZnodeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpgradeClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpgradeClusterResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Mse extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mse', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddAuthPolicyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddAuthPolicyResponse
     */
    public function addAuthPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->authRule)) {
            $query['AuthRule'] = $request->authRule;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->k8sNamespace)) {
            $query['K8sNamespace'] = $request->k8sNamespace;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAuthPolicy',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAuthPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddAuthPolicyRequest $request
     *
     * @return AddAuthPolicyResponse
     */
    public function addAuthPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAuthPolicyWithOptions($request, $runtime);
    }

    /**
     * @param AddAuthResourceRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return AddAuthResourceResponse
     */
    public function addAuthResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddAuthResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->authResourceHeaderList)) {
            $request->authResourceHeaderListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->authResourceHeaderList, 'AuthResourceHeaderList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->authId)) {
            $query['AuthId'] = $request->authId;
        }
        if (!Utils::isUnset($request->authResourceHeaderListShrink)) {
            $query['AuthResourceHeaderList'] = $request->authResourceHeaderListShrink;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->ignoreCase)) {
            $query['IgnoreCase'] = $request->ignoreCase;
        }
        if (!Utils::isUnset($request->matchType)) {
            $query['MatchType'] = $request->matchType;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAuthResource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAuthResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddAuthResourceRequest $request
     *
     * @return AddAuthResourceResponse
     */
    public function addAuthResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAuthResourceWithOptions($request, $runtime);
    }

    /**
     * @param AddBlackWhiteListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddBlackWhiteListResponse
     */
    public function addBlackWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->isWhite)) {
            $query['IsWhite'] = $request->isWhite;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->resourceIdJsonList)) {
            $query['ResourceIdJsonList'] = $request->resourceIdJsonList;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddBlackWhiteList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBlackWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddBlackWhiteListRequest $request
     *
     * @return AddBlackWhiteListResponse
     */
    public function addBlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param AddGatewayRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return AddGatewayResponse
     */
    public function addGatewayWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGatewayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->zoneInfo)) {
            $request->zoneInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->zoneInfo, 'ZoneInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->enableHardwareAcceleration)) {
            $query['EnableHardwareAcceleration'] = $request->enableHardwareAcceleration;
        }
        if (!Utils::isUnset($request->enableSls)) {
            $query['EnableSls'] = $request->enableSls;
        }
        if (!Utils::isUnset($request->enableXtrace)) {
            $query['EnableXtrace'] = $request->enableXtrace;
        }
        if (!Utils::isUnset($request->enterpriseSecurityGroup)) {
            $query['EnterpriseSecurityGroup'] = $request->enterpriseSecurityGroup;
        }
        if (!Utils::isUnset($request->internetSlbSpec)) {
            $query['InternetSlbSpec'] = $request->internetSlbSpec;
        }
        if (!Utils::isUnset($request->mserVersion)) {
            $query['MserVersion'] = $request->mserVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nlbNetworkType)) {
            $query['NlbNetworkType'] = $request->nlbNetworkType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->replica)) {
            $query['Replica'] = $request->replica;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->slbSpec)) {
            $query['SlbSpec'] = $request->slbSpec;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vSwitchId2)) {
            $query['VSwitchId2'] = $request->vSwitchId2;
        }
        if (!Utils::isUnset($request->vpc)) {
            $query['Vpc'] = $request->vpc;
        }
        if (!Utils::isUnset($request->xtraceRatio)) {
            $query['XtraceRatio'] = $request->xtraceRatio;
        }
        if (!Utils::isUnset($request->zoneInfoShrink)) {
            $query['ZoneInfo'] = $request->zoneInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGateway',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGatewayRequest $request
     *
     * @return AddGatewayResponse
     */
    public function addGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayWithOptions($request, $runtime);
    }

    /**
     * @param AddGatewayAuthConsumerRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddGatewayAuthConsumerResponse
     */
    public function addGatewayAuthConsumerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $query['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->jwks)) {
            $query['Jwks'] = $request->jwks;
        }
        if (!Utils::isUnset($request->keyName)) {
            $query['KeyName'] = $request->keyName;
        }
        if (!Utils::isUnset($request->keyValue)) {
            $query['KeyValue'] = $request->keyValue;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tokenName)) {
            $query['TokenName'] = $request->tokenName;
        }
        if (!Utils::isUnset($request->tokenPass)) {
            $query['TokenPass'] = $request->tokenPass;
        }
        if (!Utils::isUnset($request->tokenPosition)) {
            $query['TokenPosition'] = $request->tokenPosition;
        }
        if (!Utils::isUnset($request->tokenPrefix)) {
            $query['TokenPrefix'] = $request->tokenPrefix;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGatewayAuthConsumer',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewayAuthConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGatewayAuthConsumerRequest $request
     *
     * @return AddGatewayAuthConsumerResponse
     */
    public function addGatewayAuthConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayAuthConsumerWithOptions($request, $runtime);
    }

    /**
     * @param AddGatewayDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddGatewayDomainResponse
     */
    public function addGatewayDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->http2)) {
            $query['Http2'] = $request->http2;
        }
        if (!Utils::isUnset($request->mustHttps)) {
            $query['MustHttps'] = $request->mustHttps;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->tlsMax)) {
            $query['TlsMax'] = $request->tlsMax;
        }
        if (!Utils::isUnset($request->tlsMin)) {
            $query['TlsMin'] = $request->tlsMin;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGatewayDomain',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGatewayDomainRequest $request
     *
     * @return AddGatewayDomainResponse
     */
    public function addGatewayDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayDomainWithOptions($request, $runtime);
    }

    /**
     * @param AddGatewayRouteRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return AddGatewayRouteResponse
     */
    public function addGatewayRouteWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGatewayRouteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->directResponseJSON)) {
            $request->directResponseJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->directResponseJSON, 'DirectResponseJSON', 'json');
        }
        if (!Utils::isUnset($tmpReq->fallbackServices)) {
            $request->fallbackServicesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fallbackServices, 'FallbackServices', 'json');
        }
        if (!Utils::isUnset($tmpReq->predicates)) {
            $request->predicatesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->predicates, 'Predicates', 'json');
        }
        if (!Utils::isUnset($tmpReq->redirectJSON)) {
            $request->redirectJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->redirectJSON, 'RedirectJSON', 'json');
        }
        if (!Utils::isUnset($tmpReq->services)) {
            $request->servicesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->services, 'Services', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->directResponseJSONShrink)) {
            $query['DirectResponseJSON'] = $request->directResponseJSONShrink;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->domainIdListJSON)) {
            $query['DomainIdListJSON'] = $request->domainIdListJSON;
        }
        if (!Utils::isUnset($request->enableWaf)) {
            $query['EnableWaf'] = $request->enableWaf;
        }
        if (!Utils::isUnset($request->fallback)) {
            $query['Fallback'] = $request->fallback;
        }
        if (!Utils::isUnset($request->fallbackServicesShrink)) {
            $query['FallbackServices'] = $request->fallbackServicesShrink;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policies)) {
            $query['Policies'] = $request->policies;
        }
        if (!Utils::isUnset($request->predicatesShrink)) {
            $query['Predicates'] = $request->predicatesShrink;
        }
        if (!Utils::isUnset($request->redirectJSONShrink)) {
            $query['RedirectJSON'] = $request->redirectJSONShrink;
        }
        if (!Utils::isUnset($request->routeOrder)) {
            $query['RouteOrder'] = $request->routeOrder;
        }
        if (!Utils::isUnset($request->routeType)) {
            $query['RouteType'] = $request->routeType;
        }
        if (!Utils::isUnset($request->servicesShrink)) {
            $query['Services'] = $request->servicesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGatewayRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGatewayRouteRequest $request
     *
     * @return AddGatewayRouteResponse
     */
    public function addGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * @param AddGatewayServiceVersionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddGatewayServiceVersionResponse
     */
    public function addGatewayServiceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGatewayServiceVersion',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewayServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGatewayServiceVersionRequest $request
     *
     * @return AddGatewayServiceVersionResponse
     */
    public function addGatewayServiceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewayServiceVersionWithOptions($request, $runtime);
    }

    /**
     * @param AddGatewaySlbRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return AddGatewaySlbResponse
     */
    public function addGatewaySlbWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGatewaySlbShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->VServiceList)) {
            $request->VServiceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->VServiceList, 'VServiceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->httpPort)) {
            $query['HttpPort'] = $request->httpPort;
        }
        if (!Utils::isUnset($request->httpsPort)) {
            $query['HttpsPort'] = $request->httpsPort;
        }
        if (!Utils::isUnset($request->httpsVServerGroupId)) {
            $query['HttpsVServerGroupId'] = $request->httpsVServerGroupId;
        }
        if (!Utils::isUnset($request->serviceWeight)) {
            $query['ServiceWeight'] = $request->serviceWeight;
        }
        if (!Utils::isUnset($request->slbId)) {
            $query['SlbId'] = $request->slbId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->VServiceListShrink)) {
            $query['VServiceList'] = $request->VServiceListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGatewaySlb',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGatewaySlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGatewaySlbRequest $request
     *
     * @return AddGatewaySlbResponse
     */
    public function addGatewaySlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGatewaySlbWithOptions($request, $runtime);
    }

    /**
     * @param AddMigrationTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddMigrationTaskResponse
     */
    public function addMigrationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->originInstanceAddress)) {
            $query['OriginInstanceAddress'] = $request->originInstanceAddress;
        }
        if (!Utils::isUnset($request->originInstanceName)) {
            $query['OriginInstanceName'] = $request->originInstanceName;
        }
        if (!Utils::isUnset($request->originInstanceNamespace)) {
            $query['OriginInstanceNamespace'] = $request->originInstanceNamespace;
        }
        if (!Utils::isUnset($request->projectDesc)) {
            $query['ProjectDesc'] = $request->projectDesc;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->targetClusterName)) {
            $query['TargetClusterName'] = $request->targetClusterName;
        }
        if (!Utils::isUnset($request->targetClusterUrl)) {
            $query['TargetClusterUrl'] = $request->targetClusterUrl;
        }
        if (!Utils::isUnset($request->targetInstanceId)) {
            $query['TargetInstanceId'] = $request->targetInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMigrationTask',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddMigrationTaskRequest $request
     *
     * @return AddMigrationTaskResponse
     */
    public function addMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * @param AddMockRuleRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddMockRuleResponse
     */
    public function addMockRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerAppIds)) {
            $query['ConsumerAppIds'] = $request->consumerAppIds;
        }
        if (!Utils::isUnset($request->dubboMockItems)) {
            $query['DubboMockItems'] = $request->dubboMockItems;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->extraJson)) {
            $query['ExtraJson'] = $request->extraJson;
        }
        if (!Utils::isUnset($request->mockType)) {
            $query['MockType'] = $request->mockType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->providerAppId)) {
            $query['ProviderAppId'] = $request->providerAppId;
        }
        if (!Utils::isUnset($request->providerAppName)) {
            $query['ProviderAppName'] = $request->providerAppName;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->scMockItems)) {
            $query['ScMockItems'] = $request->scMockItems;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMockRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMockRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddMockRuleRequest $request
     *
     * @return AddMockRuleResponse
     */
    public function addMockRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMockRuleWithOptions($request, $runtime);
    }

    /**
     * @param AddSSLCertRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddSSLCertResponse
     */
    public function addSSLCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSSLCert',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSSLCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSSLCertRequest $request
     *
     * @return AddSSLCertResponse
     */
    public function addSSLCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSSLCertWithOptions($request, $runtime);
    }

    /**
     * @param AddSecurityGroupRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddSecurityGroupRuleResponse
     */
    public function addSecurityGroupRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->portRange)) {
            $query['PortRange'] = $request->portRange;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSecurityGroupRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSecurityGroupRuleRequest $request
     *
     * @return AddSecurityGroupRuleResponse
     */
    public function addSecurityGroupRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSecurityGroupRuleWithOptions($request, $runtime);
    }

    /**
     * @param AddServiceSourceRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return AddServiceSourceResponse
     */
    public function addServiceSourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddServiceSourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->groupList)) {
            $request->groupListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupList, 'GroupList', 'json');
        }
        if (!Utils::isUnset($tmpReq->ingressOptionsRequest)) {
            $request->ingressOptionsRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ingressOptionsRequest, 'IngressOptionsRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->pathList)) {
            $request->pathListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->pathList, 'PathList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->groupListShrink)) {
            $query['GroupList'] = $request->groupListShrink;
        }
        if (!Utils::isUnset($request->ingressOptionsRequestShrink)) {
            $query['IngressOptionsRequest'] = $request->ingressOptionsRequestShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pathListShrink)) {
            $query['PathList'] = $request->pathListShrink;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddServiceSource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddServiceSourceRequest $request
     *
     * @return AddServiceSourceResponse
     */
    public function addServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addServiceSourceWithOptions($request, $runtime);
    }

    /**
     * @param ApplyGatewayRouteRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ApplyGatewayRouteResponse
     */
    public function applyGatewayRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyGatewayRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyGatewayRouteRequest $request
     *
     * @return ApplyGatewayRouteResponse
     */
    public function applyGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * @param ApplyTagPoliciesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ApplyTagPoliciesResponse
     */
    public function applyTagPoliciesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyTagPoliciesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rules)) {
            $request->rulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->rulesShrink)) {
            $query['Rules'] = $request->rulesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyTagPolicies',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyTagPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyTagPoliciesRequest $request
     *
     * @return ApplyTagPoliciesResponse
     */
    public function applyTagPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyTagPoliciesWithOptions($request, $runtime);
    }

    /**
     * mse-200-105.
     *   *
     * @param CloneNacosConfigRequest $request CloneNacosConfigRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CloneNacosConfigResponse CloneNacosConfigResponse
     */
    public function cloneNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->originNamespaceId)) {
            $query['OriginNamespaceId'] = $request->originNamespaceId;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->targetNamespaceId)) {
            $query['TargetNamespaceId'] = $request->targetNamespaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloneNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * mse-200-105.
     *   *
     * @param CloneNacosConfigRequest $request CloneNacosConfigRequest
     *
     * @return CloneNacosConfigResponse CloneNacosConfigResponse
     */
    public function cloneNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sentinelEnable)) {
            $query['SentinelEnable'] = $request->sentinelEnable;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->switchEnable)) {
            $query['SwitchEnable'] = $request->switchEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplication',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * @param CreateCircuitBreakerRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateCircuitBreakerRuleResponse
     */
    public function createCircuitBreakerRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->halfOpenBaseAmountPerStep)) {
            $query['HalfOpenBaseAmountPerStep'] = $request->halfOpenBaseAmountPerStep;
        }
        if (!Utils::isUnset($request->halfOpenRecoveryStepNum)) {
            $query['HalfOpenRecoveryStepNum'] = $request->halfOpenRecoveryStepNum;
        }
        if (!Utils::isUnset($request->maxAllowedRtMs)) {
            $query['MaxAllowedRtMs'] = $request->maxAllowedRtMs;
        }
        if (!Utils::isUnset($request->minRequestAmount)) {
            $query['MinRequestAmount'] = $request->minRequestAmount;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->retryTimeoutMs)) {
            $query['RetryTimeoutMs'] = $request->retryTimeoutMs;
        }
        if (!Utils::isUnset($request->statIntervalMs)) {
            $query['StatIntervalMs'] = $request->statIntervalMs;
        }
        if (!Utils::isUnset($request->strategy)) {
            $query['Strategy'] = $request->strategy;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCircuitBreakerRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCircuitBreakerRuleRequest $request
     *
     * @return CreateCircuitBreakerRuleResponse
     */
    public function createCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * Before you call this API operation, you must make sure that you fully understand the billing methods and pricing of MSE.
     *   *
     * @param CreateClusterRequest $request CreateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clusterSpecification)) {
            $query['ClusterSpecification'] = $request->clusterSpecification;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->clusterVersion)) {
            $query['ClusterVersion'] = $request->clusterVersion;
        }
        if (!Utils::isUnset($request->connectionType)) {
            $query['ConnectionType'] = $request->connectionType;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->eipEnabled)) {
            $query['EipEnabled'] = $request->eipEnabled;
        }
        if (!Utils::isUnset($request->instanceCount)) {
            $query['InstanceCount'] = $request->instanceCount;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->privateSlbSpecification)) {
            $query['PrivateSlbSpecification'] = $request->privateSlbSpecification;
        }
        if (!Utils::isUnset($request->pubNetworkFlow)) {
            $query['PubNetworkFlow'] = $request->pubNetworkFlow;
        }
        if (!Utils::isUnset($request->pubSlbSpecification)) {
            $query['PubSlbSpecification'] = $request->pubSlbSpecification;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityGroupType)) {
            $query['SecurityGroupType'] = $request->securityGroupType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this API operation, you must make sure that you fully understand the billing methods and pricing of MSE.
     *   *
     * @param CreateClusterRequest $request CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateEngineNamespaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateEngineNamespaceResponse
     */
    public function createEngineNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceCount)) {
            $query['ServiceCount'] = $request->serviceCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEngineNamespace',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEngineNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEngineNamespaceRequest $request
     *
     * @return CreateEngineNamespaceResponse
     */
    public function createEngineNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEngineNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFlowRuleResponse
     */
    public function createFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->controlBehavior)) {
            $query['ControlBehavior'] = $request->controlBehavior;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->maxQueueingTimeMs)) {
            $query['MaxQueueingTimeMs'] = $request->maxQueueingTimeMs;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFlowRuleRequest $request
     *
     * @return CreateFlowRuleResponse
     */
    public function createFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @deprecated : CreateMseServiceApplication is deprecated, please use mse::2019-05-31::CreateApplication instead.
     *   *
     * Deprecated
     *
     * @param CreateMseServiceApplicationRequest $request CreateMseServiceApplicationRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMseServiceApplicationResponse CreateMseServiceApplicationResponse
     */
    public function createMseServiceApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $query['ExtraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sentinelEnable)) {
            $query['SentinelEnable'] = $request->sentinelEnable;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->switchEnable)) {
            $query['SwitchEnable'] = $request->switchEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMseServiceApplication',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMseServiceApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : CreateMseServiceApplication is deprecated, please use mse::2019-05-31::CreateApplication instead.
     *   *
     * Deprecated
     *
     * @param CreateMseServiceApplicationRequest $request CreateMseServiceApplicationRequest
     *
     * @return CreateMseServiceApplicationResponse CreateMseServiceApplicationResponse
     */
    public function createMseServiceApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMseServiceApplicationWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param CreateNacosConfigRequest $request CreateNacosConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNacosConfigResponse CreateNacosConfigResponse
     */
    public function createNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->betaIps)) {
            $query['BetaIps'] = $request->betaIps;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param CreateNacosConfigRequest $request CreateNacosConfigRequest
     *
     * @return CreateNacosConfigResponse CreateNacosConfigResponse
     */
    public function createNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNacosConfigWithOptions($request, $runtime);
    }

    /**
     * mse-200-105.
     *   *
     * @param CreateNacosInstanceRequest $request CreateNacosInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNacosInstanceResponse CreateNacosInstanceResponse
     */
    public function createNacosInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->ephemeral)) {
            $query['Ephemeral'] = $request->ephemeral;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $body = [];
        if (!Utils::isUnset($request->metadata)) {
            $body['Metadata'] = $request->metadata;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateNacosInstance',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNacosInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * mse-200-105.
     *   *
     * @param CreateNacosInstanceRequest $request CreateNacosInstanceRequest
     *
     * @return CreateNacosInstanceResponse CreateNacosInstanceResponse
     */
    public function createNacosInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNacosInstanceWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param CreateNacosServiceRequest $request CreateNacosServiceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNacosServiceResponse CreateNacosServiceResponse
     */
    public function createNacosServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ephemeral)) {
            $query['Ephemeral'] = $request->ephemeral;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->protectThreshold)) {
            $query['ProtectThreshold'] = $request->protectThreshold;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNacosService',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNacosServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param CreateNacosServiceRequest $request CreateNacosServiceRequest
     *
     * @return CreateNacosServiceResponse CreateNacosServiceResponse
     */
    public function createNacosService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNacosServiceWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrUpdateSwimmingLaneRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateOrUpdateSwimmingLaneResponse
     */
    public function createOrUpdateSwimmingLaneWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOrUpdateSwimmingLaneShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->gatewaySwimmingLaneRouteJson)) {
            $request->gatewaySwimmingLaneRouteJsonShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->gatewaySwimmingLaneRouteJson, 'GatewaySwimmingLaneRouteJson', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->enableRules)) {
            $query['EnableRules'] = $request->enableRules;
        }
        if (!Utils::isUnset($request->entryRule)) {
            $query['EntryRule'] = $request->entryRule;
        }
        if (!Utils::isUnset($request->gatewaySwimmingLaneRouteJsonShrink)) {
            $query['GatewaySwimmingLaneRouteJson'] = $request->gatewaySwimmingLaneRouteJsonShrink;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->entryRules)) {
            $body['EntryRules'] = $request->entryRules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateSwimmingLane',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrUpdateSwimmingLaneRequest $request
     *
     * @return CreateOrUpdateSwimmingLaneResponse
     */
    public function createOrUpdateSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateSwimmingLaneWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrUpdateSwimmingLaneGroupRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateOrUpdateSwimmingLaneGroupResponse
     */
    public function createOrUpdateSwimmingLaneGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->dbGrayEnable)) {
            $query['DbGrayEnable'] = $request->dbGrayEnable;
        }
        if (!Utils::isUnset($request->entryApp)) {
            $query['EntryApp'] = $request->entryApp;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->messageQueueFilterSide)) {
            $query['MessageQueueFilterSide'] = $request->messageQueueFilterSide;
        }
        if (!Utils::isUnset($request->messageQueueGrayEnable)) {
            $query['MessageQueueGrayEnable'] = $request->messageQueueGrayEnable;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->recordCanaryDetail)) {
            $query['RecordCanaryDetail'] = $request->recordCanaryDetail;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateSwimmingLaneGroup',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrUpdateSwimmingLaneGroupRequest $request
     *
     * @return CreateOrUpdateSwimmingLaneGroupResponse
     */
    public function createOrUpdateSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateSwimmingLaneGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateZnodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateZnodeResponse
     */
    public function createZnodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateZnode',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateZnodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateZnodeRequest $request
     *
     * @return CreateZnodeResponse
     */
    public function createZnode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createZnodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAuthResourceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAuthResourceResponse
     */
    public function deleteAuthResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAuthResource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAuthResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAuthResourceRequest $request
     *
     * @return DeleteAuthResourceResponse
     */
    public function deleteAuthResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAuthResourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCircuitBreakerRulesRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCircuitBreakerRulesResponse
     */
    public function deleteCircuitBreakerRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteCircuitBreakerRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $query['Ids'] = $request->idsShrink;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCircuitBreakerRules',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCircuitBreakerRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCircuitBreakerRulesRequest $request
     *
     * @return DeleteCircuitBreakerRulesResponse
     */
    public function deleteCircuitBreakerRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCircuitBreakerRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEngineNamespaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteEngineNamespaceResponse
     */
    public function deleteEngineNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEngineNamespace',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEngineNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEngineNamespaceRequest $request
     *
     * @return DeleteEngineNamespaceResponse
     */
    public function deleteEngineNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEngineNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowRulesRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteFlowRulesResponse
     */
    public function deleteFlowRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteFlowRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $query['Ids'] = $request->idsShrink;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowRules',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFlowRulesRequest $request
     *
     * @return DeleteFlowRulesResponse
     */
    public function deleteFlowRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->deleteSlb)) {
            $query['DeleteSlb'] = $request->deleteSlb;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGateway',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayRequest $request
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayAuthConsumerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteGatewayAuthConsumerResponse
     */
    public function deleteGatewayAuthConsumerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayAuthConsumer',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayAuthConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayAuthConsumerRequest $request
     *
     * @return DeleteGatewayAuthConsumerResponse
     */
    public function deleteGatewayAuthConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayAuthConsumerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayAuthConsumerResourceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DeleteGatewayAuthConsumerResourceResponse
     */
    public function deleteGatewayAuthConsumerResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->idList)) {
            $query['IdList'] = $request->idList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayAuthConsumerResource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayAuthConsumerResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayAuthConsumerResourceRequest $request
     *
     * @return DeleteGatewayAuthConsumerResourceResponse
     */
    public function deleteGatewayAuthConsumerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayAuthConsumerResourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteGatewayDomainResponse
     */
    public function deleteGatewayDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayDomain',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayDomainRequest $request
     *
     * @return DeleteGatewayDomainResponse
     */
    public function deleteGatewayDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayRouteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteGatewayRouteResponse
     */
    public function deleteGatewayRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayRouteRequest $request
     *
     * @return DeleteGatewayRouteResponse
     */
    public function deleteGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteGatewayServiceResponse
     */
    public function deleteGatewayServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayService',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayServiceRequest $request
     *
     * @return DeleteGatewayServiceResponse
     */
    public function deleteGatewayService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayServiceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayServiceVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteGatewayServiceVersionResponse
     */
    public function deleteGatewayServiceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayServiceVersion',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayServiceVersionRequest $request
     *
     * @return DeleteGatewayServiceVersionResponse
     */
    public function deleteGatewayServiceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayServiceVersionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewaySlbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteGatewaySlbResponse
     */
    public function deleteGatewaySlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->deleteSlb)) {
            $query['DeleteSlb'] = $request->deleteSlb;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->slbId)) {
            $query['SlbId'] = $request->slbId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewaySlb',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewaySlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewaySlbRequest $request
     *
     * @return DeleteGatewaySlbResponse
     */
    public function deleteGatewaySlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewaySlbWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMigrationTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteMigrationTaskResponse
     */
    public function deleteMigrationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMigrationTask',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMigrationTaskRequest $request
     *
     * @return DeleteMigrationTaskResponse
     */
    public function deleteMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNacosConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteNacosConfigResponse
     */
    public function deleteNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->beta)) {
            $query['Beta'] = $request->beta;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNacosConfigRequest $request
     *
     * @return DeleteNacosConfigResponse
     */
    public function deleteNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosConfigWithOptions($request, $runtime);
    }

    /**
     * >  The current API operation is not provided in Nacos SDK. For more information about the Nacos-SDK API, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param DeleteNacosConfigsRequest $request DeleteNacosConfigsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNacosConfigsResponse DeleteNacosConfigsResponse
     */
    public function deleteNacosConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNacosConfigs',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNacosConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The current API operation is not provided in Nacos SDK. For more information about the Nacos-SDK API, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param DeleteNacosConfigsRequest $request DeleteNacosConfigsRequest
     *
     * @return DeleteNacosConfigsResponse DeleteNacosConfigsResponse
     */
    public function deleteNacosConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosConfigsWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param DeleteNacosInstanceRequest $request DeleteNacosInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNacosInstanceResponse DeleteNacosInstanceResponse
     */
    public function deleteNacosInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->ephemeral)) {
            $query['Ephemeral'] = $request->ephemeral;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNacosInstance',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNacosInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param DeleteNacosInstanceRequest $request DeleteNacosInstanceRequest
     *
     * @return DeleteNacosInstanceResponse DeleteNacosInstanceResponse
     */
    public function deleteNacosInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosInstanceWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param DeleteNacosServiceRequest $request DeleteNacosServiceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNacosServiceResponse DeleteNacosServiceResponse
     */
    public function deleteNacosServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNacosService',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNacosServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param DeleteNacosServiceRequest $request DeleteNacosServiceRequest
     *
     * @return DeleteNacosServiceResponse DeleteNacosServiceResponse
     */
    public function deleteNacosService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosServiceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNamespace',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecurityGroupRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSecurityGroupRuleResponse
     */
    public function deleteSecurityGroupRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecurityGroupRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSecurityGroupRuleRequest $request
     *
     * @return DeleteSecurityGroupRuleResponse
     */
    public function deleteSecurityGroupRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityGroupRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceSourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteServiceSourceResponse
     */
    public function deleteServiceSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceSource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceSourceRequest $request
     *
     * @return DeleteServiceSourceResponse
     */
    public function deleteServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceSourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSwimmingLaneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSwimmingLaneResponse
     */
    public function deleteSwimmingLaneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->laneId)) {
            $query['LaneId'] = $request->laneId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSwimmingLane',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSwimmingLaneRequest $request
     *
     * @return DeleteSwimmingLaneResponse
     */
    public function deleteSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSwimmingLaneWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSwimmingLaneGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSwimmingLaneGroupResponse
     */
    public function deleteSwimmingLaneGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSwimmingLaneGroup',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSwimmingLaneGroupRequest $request
     *
     * @return DeleteSwimmingLaneGroupResponse
     */
    public function deleteSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSwimmingLaneGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteZnodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteZnodeResponse
     */
    public function deleteZnodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteZnode',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteZnodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteZnodeRequest $request
     *
     * @return DeleteZnodeResponse
     */
    public function deleteZnode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteZnodeWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ExportNacosConfigRequest $request ExportNacosConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportNacosConfigResponse ExportNacosConfigResponse
     */
    public function exportNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->dataIds)) {
            $query['DataIds'] = $request->dataIds;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ExportNacosConfigRequest $request ExportNacosConfigRequest
     *
     * @return ExportNacosConfigResponse ExportNacosConfigResponse
     */
    public function exportNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportNacosConfigWithOptions($request, $runtime);
    }

    /**
     * Only one task can run at a time.
     *   *
     * @param ExportZookeeperDataRequest $request ExportZookeeperDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportZookeeperDataResponse ExportZookeeperDataResponse
     */
    public function exportZookeeperDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->exportType)) {
            $query['ExportType'] = $request->exportType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportZookeeperData',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportZookeeperDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Only one task can run at a time.
     *   *
     * @param ExportZookeeperDataRequest $request ExportZookeeperDataRequest
     *
     * @return ExportZookeeperDataResponse ExportZookeeperDataResponse
     */
    public function exportZookeeperData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportZookeeperDataWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the rules for graceful start and shutdown.
     *   *
     * @param FetchLosslessRuleListRequest $request FetchLosslessRuleListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return FetchLosslessRuleListResponse FetchLosslessRuleListResponse
     */
    public function fetchLosslessRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FetchLosslessRuleList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FetchLosslessRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the rules for graceful start and shutdown.
     *   *
     * @param FetchLosslessRuleListRequest $request FetchLosslessRuleListRequest
     *
     * @return FetchLosslessRuleListResponse FetchLosslessRuleListResponse
     */
    public function fetchLosslessRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchLosslessRuleListWithOptions($request, $runtime);
    }

    /**
     * @param GetAppMessageQueueRouteRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAppMessageQueueRouteResponse
     */
    public function getAppMessageQueueRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppMessageQueueRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppMessageQueueRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAppMessageQueueRouteRequest $request
     *
     * @return GetAppMessageQueueRouteResponse
     */
    public function getAppMessageQueueRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppMessageQueueRouteWithOptions($request, $runtime);
    }

    /**
     * @param GetApplicationInstanceListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetApplicationInstanceListResponse
     */
    public function getApplicationInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplicationInstanceList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApplicationInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetApplicationInstanceListRequest $request
     *
     * @return GetApplicationInstanceListResponse
     */
    public function getApplicationInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param GetApplicationListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetApplicationListResponse
     */
    public function getApplicationListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sentinelEnable)) {
            $query['SentinelEnable'] = $request->sentinelEnable;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->switchEnable)) {
            $query['SwitchEnable'] = $request->switchEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplicationList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApplicationListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetApplicationListRequest $request
     *
     * @return GetApplicationListResponse
     */
    public function getApplicationList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationListWithOptions($request, $runtime);
    }

    /**
     * @param GetBlackWhiteListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBlackWhiteListResponse
     */
    public function getBlackWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->isWhite)) {
            $query['IsWhite'] = $request->isWhite;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBlackWhiteList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBlackWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBlackWhiteListRequest $request
     *
     * @return GetBlackWhiteListResponse
     */
    public function getBlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param GetEngineNamepaceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEngineNamepaceResponse
     */
    public function getEngineNamepaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEngineNamepace',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEngineNamepaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEngineNamepaceRequest $request
     *
     * @return GetEngineNamepaceResponse
     */
    public function getEngineNamepace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEngineNamepaceWithOptions($request, $runtime);
    }

    /**
     * @param GetGatewayRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetGatewayResponse
     */
    public function getGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGateway',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGatewayRequest $request
     *
     * @return GetGatewayResponse
     */
    public function getGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayWithOptions($request, $runtime);
    }

    /**
     * @param GetGatewayAuthConsumerDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetGatewayAuthConsumerDetailResponse
     */
    public function getGatewayAuthConsumerDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGatewayAuthConsumerDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayAuthConsumerDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGatewayAuthConsumerDetailRequest $request
     *
     * @return GetGatewayAuthConsumerDetailResponse
     */
    public function getGatewayAuthConsumerDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayAuthConsumerDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetGatewayDomainDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetGatewayDomainDetailResponse
     */
    public function getGatewayDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGatewayDomainDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGatewayDomainDetailRequest $request
     *
     * @return GetGatewayDomainDetailResponse
     */
    public function getGatewayDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetGatewayOptionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetGatewayOptionResponse
     */
    public function getGatewayOptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGatewayOption',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGatewayOptionRequest $request
     *
     * @return GetGatewayOptionResponse
     */
    public function getGatewayOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayOptionWithOptions($request, $runtime);
    }

    /**
     * @param GetGatewayRouteDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetGatewayRouteDetailResponse
     */
    public function getGatewayRouteDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGatewayRouteDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayRouteDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGatewayRouteDetailRequest $request
     *
     * @return GetGatewayRouteDetailResponse
     */
    public function getGatewayRouteDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayRouteDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetGatewayServiceDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetGatewayServiceDetailResponse
     */
    public function getGatewayServiceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGatewayServiceDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayServiceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGatewayServiceDetailRequest $request
     *
     * @return GetGatewayServiceDetailResponse
     */
    public function getGatewayServiceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayServiceDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetGovernanceKubernetesClusterRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetGovernanceKubernetesClusterResponse
     */
    public function getGovernanceKubernetesClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGovernanceKubernetesCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGovernanceKubernetesClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGovernanceKubernetesClusterRequest $request
     *
     * @return GetGovernanceKubernetesClusterResponse
     */
    public function getGovernanceKubernetesCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGovernanceKubernetesClusterWithOptions($request, $runtime);
    }

    /**
     * @param GetImageRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetImageResponse
     */
    public function getImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->versionCode)) {
            $query['VersionCode'] = $request->versionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImage',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetImageRequest $request
     *
     * @return GetImageResponse
     */
    public function getImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).\\n.
     *   *
     * @param GetImportFileUrlRequest $request GetImportFileUrlRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImportFileUrlResponse GetImportFileUrlResponse
     */
    public function getImportFileUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->contentType)) {
            $query['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImportFileUrl',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImportFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).\\n.
     *   *
     * @param GetImportFileUrlRequest $request GetImportFileUrlRequest
     *
     * @return GetImportFileUrlResponse GetImportFileUrlResponse
     */
    public function getImportFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImportFileUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetKubernetesSourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetKubernetesSourceResponse
     */
    public function getKubernetesSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->isAll)) {
            $query['IsAll'] = $request->isAll;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetKubernetesSource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetKubernetesSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetKubernetesSourceRequest $request
     *
     * @return GetKubernetesSourceResponse
     */
    public function getKubernetesSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKubernetesSourceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the rules for graceful start and shutdown of an application.
     *   * You can query the rules for graceful start and shutdown of an application preferentially by using the AppId parameter.
     *   * If the AppId parameter is left empty, you can use the RegionId, Namespace, and AppName parameters to query the rules for graceful start and shutdown of an application.
     *   *
     * @param GetLosslessRuleByAppRequest $request GetLosslessRuleByAppRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLosslessRuleByAppResponse GetLosslessRuleByAppResponse
     */
    public function getLosslessRuleByAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLosslessRuleByApp',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLosslessRuleByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the rules for graceful start and shutdown of an application.
     *   * You can query the rules for graceful start and shutdown of an application preferentially by using the AppId parameter.
     *   * If the AppId parameter is left empty, you can use the RegionId, Namespace, and AppName parameters to query the rules for graceful start and shutdown of an application.
     *   *
     * @param GetLosslessRuleByAppRequest $request GetLosslessRuleByAppRequest
     *
     * @return GetLosslessRuleByAppResponse GetLosslessRuleByAppResponse
     */
    public function getLosslessRuleByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLosslessRuleByAppWithOptions($request, $runtime);
    }

    /**
     * @param GetMseFeatureSwitchRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMseFeatureSwitchResponse
     */
    public function getMseFeatureSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMseFeatureSwitch',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMseFeatureSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMseFeatureSwitchRequest $request
     *
     * @return GetMseFeatureSwitchResponse
     */
    public function getMseFeatureSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMseFeatureSwitchWithOptions($request, $runtime);
    }

    /**
     * @param GetMseSourceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetMseSourceResponse
     */
    public function getMseSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMseSource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMseSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMseSourceRequest $request
     *
     * @return GetMseSourceResponse
     */
    public function getMseSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMseSourceWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param GetNacosConfigRequest $request GetNacosConfigRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNacosConfigResponse GetNacosConfigResponse
     */
    public function getNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->beta)) {
            $query['Beta'] = $request->beta;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param GetNacosConfigRequest $request GetNacosConfigRequest
     *
     * @return GetNacosConfigResponse GetNacosConfigResponse
     */
    public function getNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNacosConfigWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param GetNacosHistoryConfigRequest $request GetNacosHistoryConfigRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNacosHistoryConfigResponse GetNacosHistoryConfigResponse
     */
    public function getNacosHistoryConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->nid)) {
            $query['Nid'] = $request->nid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNacosHistoryConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNacosHistoryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param GetNacosHistoryConfigRequest $request GetNacosHistoryConfigRequest
     *
     * @return GetNacosHistoryConfigResponse GetNacosHistoryConfigResponse
     */
    public function getNacosHistoryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNacosHistoryConfigWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query overview information about service governance.
     *   *
     * @param GetOverviewRequest $request GetOverviewRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOverviewResponse GetOverviewResponse
     */
    public function getOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOverview',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query overview information about service governance.
     *   *
     * @param GetOverviewRequest $request GetOverviewRequest
     *
     * @return GetOverviewResponse GetOverviewResponse
     */
    public function getOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOverviewWithOptions($request, $runtime);
    }

    /**
     * @param GetPluginConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetPluginConfigResponse
     */
    public function getPluginConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['PluginId'] = $request->pluginId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPluginConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPluginConfigRequest $request
     *
     * @return GetPluginConfigResponse
     */
    public function getPluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPluginConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetPluginsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetPluginsResponse
     */
    public function getPluginsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->enableOnly)) {
            $query['EnableOnly'] = $request->enableOnly;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPlugins',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPluginsRequest $request
     *
     * @return GetPluginsResponse
     */
    public function getPlugins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPluginsWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetServiceListResponse
     */
    public function getServiceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceListRequest $request
     *
     * @return GetServiceListResponse
     */
    public function getServiceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceListWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceListPageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceListPageResponse
     */
    public function getServiceListPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceListPage',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceListPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceListPageRequest $request
     *
     * @return GetServiceListPageResponse
     */
    public function getServiceListPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceListPageWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceListenersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetServiceListenersResponse
     */
    public function getServiceListenersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->hasIpCount)) {
            $query['HasIpCount'] = $request->hasIpCount;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceListeners',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceListenersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceListenersRequest $request
     *
     * @return GetServiceListenersResponse
     */
    public function getServiceListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceListenersWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceMethodPageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetServiceMethodPageResponse
     */
    public function getServiceMethodPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->methodController)) {
            $query['MethodController'] = $request->methodController;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->serviceGroup)) {
            $query['ServiceGroup'] = $request->serviceGroup;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceMethodPage',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceMethodPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceMethodPageRequest $request
     *
     * @return GetServiceMethodPageResponse
     */
    public function getServiceMethodPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceMethodPageWithOptions($request, $runtime);
    }

    /**
     * @param GetTagsBySwimmingLaneGroupIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetTagsBySwimmingLaneGroupIdResponse
     */
    public function getTagsBySwimmingLaneGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTagsBySwimmingLaneGroupId',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTagsBySwimmingLaneGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTagsBySwimmingLaneGroupIdRequest $request
     *
     * @return GetTagsBySwimmingLaneGroupIdResponse
     */
    public function getTagsBySwimmingLaneGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTagsBySwimmingLaneGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param GetZookeeperDataImportUrlRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetZookeeperDataImportUrlResponse
     */
    public function getZookeeperDataImportUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->contentType)) {
            $query['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetZookeeperDataImportUrl',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetZookeeperDataImportUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetZookeeperDataImportUrlRequest $request
     *
     * @return GetZookeeperDataImportUrlResponse
     */
    public function getZookeeperDataImportUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getZookeeperDataImportUrlWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ImportNacosConfigRequest $request ImportNacosConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportNacosConfigResponse ImportNacosConfigResponse
     */
    public function importNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ImportNacosConfigRequest $request ImportNacosConfigRequest
     *
     * @return ImportNacosConfigResponse ImportNacosConfigResponse
     */
    public function importNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @param ImportServicesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ImportServicesResponse
     */
    public function importServicesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportServicesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->serviceList)) {
            $request->serviceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serviceList, 'ServiceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->fcAlias)) {
            $query['FcAlias'] = $request->fcAlias;
        }
        if (!Utils::isUnset($request->fcServiceName)) {
            $query['FcServiceName'] = $request->fcServiceName;
        }
        if (!Utils::isUnset($request->fcVersion)) {
            $query['FcVersion'] = $request->fcVersion;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceListShrink)) {
            $query['ServiceList'] = $request->serviceListShrink;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->tlsSetting)) {
            $query['TlsSetting'] = $request->tlsSetting;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportServices',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportServicesRequest $request
     *
     * @return ImportServicesResponse
     */
    public function importServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importServicesWithOptions($request, $runtime);
    }

    /**
     * **Danger** This operation clears existing data. Exercise caution when you call this API operation.
     *   *
     * @param ImportZookeeperDataRequest $request ImportZookeeperDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportZookeeperDataResponse ImportZookeeperDataResponse
     */
    public function importZookeeperDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportZookeeperData',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportZookeeperDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **Danger** This operation clears existing data. Exercise caution when you call this API operation.
     *   *
     * @param ImportZookeeperDataRequest $request ImportZookeeperDataRequest
     *
     * @return ImportZookeeperDataResponse ImportZookeeperDataResponse
     */
    public function importZookeeperData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importZookeeperDataWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListAnsInstancesRequest $request ListAnsInstancesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnsInstancesResponse ListAnsInstancesResponse
     */
    public function listAnsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAnsInstances',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAnsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListAnsInstancesRequest $request ListAnsInstancesRequest
     *
     * @return ListAnsInstancesResponse ListAnsInstancesResponse
     */
    public function listAnsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnsInstancesWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListAnsServiceClustersRequest $request ListAnsServiceClustersRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnsServiceClustersResponse ListAnsServiceClustersResponse
     */
    public function listAnsServiceClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAnsServiceClusters',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAnsServiceClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListAnsServiceClustersRequest $request ListAnsServiceClustersRequest
     *
     * @return ListAnsServiceClustersResponse ListAnsServiceClustersResponse
     */
    public function listAnsServiceClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnsServiceClustersWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListAnsServicesRequest $request ListAnsServicesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnsServicesResponse ListAnsServicesResponse
     */
    public function listAnsServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->hasIpCount)) {
            $query['HasIpCount'] = $request->hasIpCount;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAnsServices',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAnsServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListAnsServicesRequest $request ListAnsServicesRequest
     *
     * @return ListAnsServicesResponse ListAnsServicesResponse
     */
    public function listAnsServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnsServicesWithOptions($request, $runtime);
    }

    /**
     * @deprecated : ListAppBySwimmingLaneGroupTag is deprecated, please use mse::2019-05-31::ListAppBySwimmingLaneGroupTags instead.
     *   *
     * Deprecated
     *
     * @param ListAppBySwimmingLaneGroupTagRequest $request ListAppBySwimmingLaneGroupTagRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppBySwimmingLaneGroupTagResponse ListAppBySwimmingLaneGroupTagResponse
     */
    public function listAppBySwimmingLaneGroupTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppBySwimmingLaneGroupTag',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppBySwimmingLaneGroupTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : ListAppBySwimmingLaneGroupTag is deprecated, please use mse::2019-05-31::ListAppBySwimmingLaneGroupTags instead.
     *   *
     * Deprecated
     *
     * @param ListAppBySwimmingLaneGroupTagRequest $request ListAppBySwimmingLaneGroupTagRequest
     *
     * @return ListAppBySwimmingLaneGroupTagResponse ListAppBySwimmingLaneGroupTagResponse
     */
    public function listAppBySwimmingLaneGroupTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppBySwimmingLaneGroupTagWithOptions($request, $runtime);
    }

    /**
     * @param ListAppBySwimmingLaneGroupTagsRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return ListAppBySwimmingLaneGroupTagsResponse
     */
    public function listAppBySwimmingLaneGroupTagsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAppBySwimmingLaneGroupTagsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppBySwimmingLaneGroupTags',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppBySwimmingLaneGroupTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppBySwimmingLaneGroupTagsRequest $request
     *
     * @return ListAppBySwimmingLaneGroupTagsResponse
     */
    public function listAppBySwimmingLaneGroupTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppBySwimmingLaneGroupTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListApplicationsWithTagRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListApplicationsWithTagRulesResponse
     */
    public function listApplicationsWithTagRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationsWithTagRules',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicationsWithTagRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListApplicationsWithTagRulesRequest $request
     *
     * @return ListApplicationsWithTagRulesResponse
     */
    public function listApplicationsWithTagRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithTagRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListAuthPolicyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAuthPolicyResponse
     */
    public function listAuthPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAuthPolicy',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAuthPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAuthPolicyRequest $request
     *
     * @return ListAuthPolicyResponse
     */
    public function listAuthPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ListCircuitBreakerRulesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListCircuitBreakerRulesResponse
     */
    public function listCircuitBreakerRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceSearchKey)) {
            $query['ResourceSearchKey'] = $request->resourceSearchKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCircuitBreakerRules',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCircuitBreakerRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCircuitBreakerRulesRequest $request
     *
     * @return ListCircuitBreakerRulesResponse
     */
    public function listCircuitBreakerRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCircuitBreakerRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterConnectionTypesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListClusterConnectionTypesResponse
     */
    public function listClusterConnectionTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterConnectionTypes',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterConnectionTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterConnectionTypesRequest $request
     *
     * @return ListClusterConnectionTypesResponse
     */
    public function listClusterConnectionTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterConnectionTypesWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterHealthCheckTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListClusterHealthCheckTaskResponse
     */
    public function listClusterHealthCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterHealthCheckTask',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterHealthCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterHealthCheckTaskRequest $request
     *
     * @return ListClusterHealthCheckTaskResponse
     */
    public function listClusterHealthCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterHealthCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterTypesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListClusterTypesResponse
     */
    public function listClusterTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->connectType)) {
            $query['ConnectType'] = $request->connectType;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterTypes',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterTypesRequest $request
     *
     * @return ListClusterTypesResponse
     */
    public function listClusterTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterTypesWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterVersionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListClusterVersionsResponse
     */
    public function listClusterVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterVersions',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterVersionsRequest $request
     *
     * @return ListClusterVersionsResponse
     */
    public function listClusterVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterAliasName)) {
            $query['ClusterAliasName'] = $request->clusterAliasName;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * @param ListConfigTrackRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListConfigTrackResponse
     */
    public function listConfigTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfigTrack',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfigTrackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConfigTrackRequest $request
     *
     * @return ListConfigTrackResponse
     */
    public function listConfigTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigTrackWithOptions($request, $runtime);
    }

    /**
     * @param ListEngineNamespacesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListEngineNamespacesResponse
     */
    public function listEngineNamespacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEngineNamespaces',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEngineNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEngineNamespacesRequest $request
     *
     * @return ListEngineNamespacesResponse
     */
    public function listEngineNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEngineNamespacesWithOptions($request, $runtime);
    }

    /**
     * @param ListEurekaInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListEurekaInstancesResponse
     */
    public function listEurekaInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEurekaInstances',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEurekaInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEurekaInstancesRequest $request
     *
     * @return ListEurekaInstancesResponse
     */
    public function listEurekaInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEurekaInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListEurekaServicesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListEurekaServicesResponse
     */
    public function listEurekaServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEurekaServices',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEurekaServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEurekaServicesRequest $request
     *
     * @return ListEurekaServicesResponse
     */
    public function listEurekaServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEurekaServicesWithOptions($request, $runtime);
    }

    /**
     * @param ListExportZookeeperDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListExportZookeeperDataResponse
     */
    public function listExportZookeeperDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExportZookeeperData',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExportZookeeperDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListExportZookeeperDataRequest $request
     *
     * @return ListExportZookeeperDataResponse
     */
    public function listExportZookeeperData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExportZookeeperDataWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowRulesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListFlowRulesResponse
     */
    public function listFlowRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceSearchKey)) {
            $query['ResourceSearchKey'] = $request->resourceSearchKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowRules',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowRulesRequest $request
     *
     * @return ListFlowRulesResponse
     */
    public function listFlowRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListGatewayRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ListGatewayResponse
     */
    public function listGatewayWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGatewayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterParams)) {
            $request->filterParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterParams, 'FilterParams', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->descSort)) {
            $query['DescSort'] = $request->descSort;
        }
        if (!Utils::isUnset($request->filterParamsShrink)) {
            $query['FilterParams'] = $request->filterParamsShrink;
        }
        if (!Utils::isUnset($request->orderItem)) {
            $query['OrderItem'] = $request->orderItem;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGateway',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGatewayRequest $request
     *
     * @return ListGatewayResponse
     */
    public function listGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayWithOptions($request, $runtime);
    }

    /**
     * @param ListGatewayAuthConsumerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListGatewayAuthConsumerResponse
     */
    public function listGatewayAuthConsumerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerStatus)) {
            $query['ConsumerStatus'] = $request->consumerStatus;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayAuthConsumer',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayAuthConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGatewayAuthConsumerRequest $request
     *
     * @return ListGatewayAuthConsumerResponse
     */
    public function listGatewayAuthConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayAuthConsumerWithOptions($request, $runtime);
    }

    /**
     * @param ListGatewayAuthConsumerResourceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListGatewayAuthConsumerResourceResponse
     */
    public function listGatewayAuthConsumerResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceStatus)) {
            $query['ResourceStatus'] = $request->resourceStatus;
        }
        if (!Utils::isUnset($request->routeName)) {
            $query['RouteName'] = $request->routeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayAuthConsumerResource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayAuthConsumerResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGatewayAuthConsumerResourceRequest $request
     *
     * @return ListGatewayAuthConsumerResourceResponse
     */
    public function listGatewayAuthConsumerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayAuthConsumerResourceWithOptions($request, $runtime);
    }

    /**
     * @param ListGatewayDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListGatewayDomainResponse
     */
    public function listGatewayDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayDomain',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGatewayDomainRequest $request
     *
     * @return ListGatewayDomainResponse
     */
    public function listGatewayDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayDomainWithOptions($request, $runtime);
    }

    /**
     * @param ListGatewayRouteRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListGatewayRouteResponse
     */
    public function listGatewayRouteWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGatewayRouteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterParams)) {
            $request->filterParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterParams, 'FilterParams', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->descSort)) {
            $query['DescSort'] = $request->descSort;
        }
        if (!Utils::isUnset($request->filterParamsShrink)) {
            $query['FilterParams'] = $request->filterParamsShrink;
        }
        if (!Utils::isUnset($request->orderItem)) {
            $query['OrderItem'] = $request->orderItem;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGatewayRouteRequest $request
     *
     * @return ListGatewayRouteResponse
     */
    public function listGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * @param ListGatewayRouteOnAuthRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListGatewayRouteOnAuthResponse
     */
    public function listGatewayRouteOnAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayRouteOnAuth',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayRouteOnAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGatewayRouteOnAuthRequest $request
     *
     * @return ListGatewayRouteOnAuthResponse
     */
    public function listGatewayRouteOnAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayRouteOnAuthWithOptions($request, $runtime);
    }

    /**
     * @param ListGatewayServiceRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListGatewayServiceResponse
     */
    public function listGatewayServiceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGatewayServiceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterParams)) {
            $request->filterParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterParams, 'FilterParams', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->descSort)) {
            $query['DescSort'] = $request->descSort;
        }
        if (!Utils::isUnset($request->filterParamsShrink)) {
            $query['FilterParams'] = $request->filterParamsShrink;
        }
        if (!Utils::isUnset($request->orderItem)) {
            $query['OrderItem'] = $request->orderItem;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayService',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGatewayServiceRequest $request
     *
     * @return ListGatewayServiceResponse
     */
    public function listGatewayService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayServiceWithOptions($request, $runtime);
    }

    /**
     * @param ListGatewaySlbRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListGatewaySlbResponse
     */
    public function listGatewaySlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewaySlb',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGatewaySlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGatewaySlbRequest $request
     *
     * @return ListGatewaySlbResponse
     */
    public function listGatewaySlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewaySlbWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceCountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListInstanceCountResponse
     */
    public function listInstanceCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceCount',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstanceCountRequest $request
     *
     * @return ListInstanceCountResponse
     */
    public function listInstanceCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceCountWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListListenersByConfigRequest $request ListListenersByConfigRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListListenersByConfigResponse ListListenersByConfigResponse
     */
    public function listListenersByConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListListenersByConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListListenersByConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListListenersByConfigRequest $request ListListenersByConfigRequest
     *
     * @return ListListenersByConfigResponse ListListenersByConfigResponse
     */
    public function listListenersByConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersByConfigWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListListenersByIpRequest $request ListListenersByIpRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListListenersByIpResponse ListListenersByIpResponse
     */
    public function listListenersByIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListListenersByIp',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListListenersByIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListListenersByIpRequest $request ListListenersByIpRequest
     *
     * @return ListListenersByIpResponse ListListenersByIpResponse
     */
    public function listListenersByIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersByIpWithOptions($request, $runtime);
    }

    /**
     * @param ListMigrationTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListMigrationTaskResponse
     */
    public function listMigrationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMigrationTask',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMigrationTaskRequest $request
     *
     * @return ListMigrationTaskResponse
     */
    public function listMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListNacosConfigsRequest $request ListNacosConfigsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNacosConfigsResponse ListNacosConfigsResponse
     */
    public function listNacosConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNacosConfigs',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNacosConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListNacosConfigsRequest $request ListNacosConfigsRequest
     *
     * @return ListNacosConfigsResponse ListNacosConfigsResponse
     */
    public function listNacosConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNacosConfigsWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListNacosHistoryConfigsRequest $request ListNacosHistoryConfigsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNacosHistoryConfigsResponse ListNacosHistoryConfigsResponse
     */
    public function listNacosHistoryConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNacosHistoryConfigs',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNacosHistoryConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param ListNacosHistoryConfigsRequest $request ListNacosHistoryConfigsRequest
     *
     * @return ListNacosHistoryConfigsResponse ListNacosHistoryConfigsResponse
     */
    public function listNacosHistoryConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNacosHistoryConfigsWithOptions($request, $runtime);
    }

    /**
     * @param ListNamingTrackRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListNamingTrackResponse
     */
    public function listNamingTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNamingTrack',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNamingTrackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNamingTrackRequest $request
     *
     * @return ListNamingTrackResponse
     */
    public function listNamingTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamingTrackWithOptions($request, $runtime);
    }

    /**
     * @param ListSSLCertRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSSLCertResponse
     */
    public function listSSLCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSSLCert',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSSLCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSSLCertRequest $request
     *
     * @return ListSSLCertResponse
     */
    public function listSSLCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSSLCertWithOptions($request, $runtime);
    }

    /**
     * @param ListSecurityGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSecurityGroupResponse
     */
    public function listSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSecurityGroup',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSecurityGroupRequest $request
     *
     * @return ListSecurityGroupResponse
     */
    public function listSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListSecurityGroupRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListSecurityGroupRuleResponse
     */
    public function listSecurityGroupRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSecurityGroupRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSecurityGroupRuleRequest $request
     *
     * @return ListSecurityGroupRuleResponse
     */
    public function listSecurityGroupRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityGroupRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListServiceSourceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListServiceSourceResponse
     */
    public function listServiceSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceSource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceSourceRequest $request
     *
     * @return ListServiceSourceResponse
     */
    public function listServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceSourceWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListZkTrackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListZkTrackResponse
     */
    public function listZkTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListZkTrack',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListZkTrackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListZkTrackRequest $request
     *
     * @return ListZkTrackResponse
     */
    public function listZkTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listZkTrackWithOptions($request, $runtime);
    }

    /**
     * @param ListZnodeChildrenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListZnodeChildrenResponse
     */
    public function listZnodeChildrenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListZnodeChildren',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListZnodeChildrenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListZnodeChildrenRequest $request
     *
     * @return ListZnodeChildrenResponse
     */
    public function listZnodeChildren($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listZnodeChildrenWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGovernanceKubernetesClusterRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyGovernanceKubernetesClusterResponse
     */
    public function modifyGovernanceKubernetesClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyGovernanceKubernetesClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->namespaceInfos)) {
            $request->namespaceInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->namespaceInfos, 'NamespaceInfos', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->namespaceInfosShrink)) {
            $body['NamespaceInfos'] = $request->namespaceInfosShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyGovernanceKubernetesCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGovernanceKubernetesClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGovernanceKubernetesClusterRequest $request
     *
     * @return ModifyGovernanceKubernetesClusterResponse
     */
    public function modifyGovernanceKubernetesCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGovernanceKubernetesClusterWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLosslessRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyLosslessRuleResponse
     */
    public function modifyLosslessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->aligned)) {
            $query['Aligned'] = $request->aligned;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->delayTime)) {
            $query['DelayTime'] = $request->delayTime;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->funcType)) {
            $query['FuncType'] = $request->funcType;
        }
        if (!Utils::isUnset($request->lossLessDetail)) {
            $query['LossLessDetail'] = $request->lossLessDetail;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->notice)) {
            $query['Notice'] = $request->notice;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->related)) {
            $query['Related'] = $request->related;
        }
        if (!Utils::isUnset($request->warmupTime)) {
            $query['WarmupTime'] = $request->warmupTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLosslessRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLosslessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyLosslessRuleRequest $request
     *
     * @return ModifyLosslessRuleResponse
     */
    public function modifyLosslessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLosslessRuleWithOptions($request, $runtime);
    }

    /**
     * @param OfflineGatewayRouteRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return OfflineGatewayRouteResponse
     */
    public function offlineGatewayRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OfflineGatewayRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OfflineGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OfflineGatewayRouteRequest $request
     *
     * @return OfflineGatewayRouteResponse
     */
    public function offlineGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->offlineGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * @param OrderClusterHealthCheckRiskNoticeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return OrderClusterHealthCheckRiskNoticeResponse
     */
    public function orderClusterHealthCheckRiskNoticeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mute)) {
            $query['Mute'] = $request->mute;
        }
        if (!Utils::isUnset($request->noticeType)) {
            $query['NoticeType'] = $request->noticeType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->riskCode)) {
            $query['RiskCode'] = $request->riskCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderClusterHealthCheckRiskNotice',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderClusterHealthCheckRiskNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OrderClusterHealthCheckRiskNoticeRequest $request
     *
     * @return OrderClusterHealthCheckRiskNoticeResponse
     */
    public function orderClusterHealthCheckRiskNotice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderClusterHealthCheckRiskNoticeWithOptions($request, $runtime);
    }

    /**
     * @param PullServicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PullServicesResponse
     */
    public function pullServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PullServices',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PullServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PullServicesRequest $request
     *
     * @return PullServicesResponse
     */
    public function pullServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pullServicesWithOptions($request, $runtime);
    }

    /**
     * @param PutClusterHealthCheckTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PutClusterHealthCheckTaskResponse
     */
    public function putClusterHealthCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutClusterHealthCheckTask',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutClusterHealthCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutClusterHealthCheckTaskRequest $request
     *
     * @return PutClusterHealthCheckTaskResponse
     */
    public function putClusterHealthCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putClusterHealthCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @param QueryAllSwimmingLaneRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAllSwimmingLaneResponse
     */
    public function queryAllSwimmingLaneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAllSwimmingLane',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAllSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAllSwimmingLaneRequest $request
     *
     * @return QueryAllSwimmingLaneResponse
     */
    public function queryAllSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllSwimmingLaneWithOptions($request, $runtime);
    }

    /**
     * @param QueryAllSwimmingLaneGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryAllSwimmingLaneGroupResponse
     */
    public function queryAllSwimmingLaneGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAllSwimmingLaneGroup',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAllSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAllSwimmingLaneGroupRequest $request
     *
     * @return QueryAllSwimmingLaneGroupResponse
     */
    public function queryAllSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllSwimmingLaneGroupWithOptions($request, $runtime);
    }

    /**
     * @param QueryBusinessLocationsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryBusinessLocationsResponse
     */
    public function queryBusinessLocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBusinessLocations',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBusinessLocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBusinessLocationsRequest $request
     *
     * @return QueryBusinessLocationsResponse
     */
    public function queryBusinessLocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBusinessLocationsWithOptions($request, $runtime);
    }

    /**
     * @param QueryClusterDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryClusterDetailResponse
     */
    public function queryClusterDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->aclSwitch)) {
            $query['AclSwitch'] = $request->aclSwitch;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryClusterDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryClusterDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryClusterDetailRequest $request
     *
     * @return QueryClusterDetailResponse
     */
    public function queryClusterDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryClusterDiskSpecificationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryClusterDiskSpecificationResponse
     */
    public function queryClusterDiskSpecificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryClusterDiskSpecification',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryClusterDiskSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryClusterDiskSpecificationRequest $request
     *
     * @return QueryClusterDiskSpecificationResponse
     */
    public function queryClusterDiskSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterDiskSpecificationWithOptions($request, $runtime);
    }

    /**
     * @param QueryClusterInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryClusterInfoResponse
     */
    public function queryClusterInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->aclSwitch)) {
            $query['AclSwitch'] = $request->aclSwitch;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryClusterInfo',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryClusterInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryClusterInfoRequest $request
     *
     * @return QueryClusterInfoResponse
     */
    public function queryClusterInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryClusterSpecificationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryClusterSpecificationResponse
     */
    public function queryClusterSpecificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->connectType)) {
            $query['ConnectType'] = $request->connectType;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryClusterSpecification',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryClusterSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryClusterSpecificationRequest $request
     *
     * @return QueryClusterSpecificationResponse
     */
    public function queryClusterSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterSpecificationWithOptions($request, $runtime);
    }

    /**
     * @param QueryConfigRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryConfigResponse
     */
    public function queryConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->configType)) {
            $query['ConfigType'] = $request->configType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->needRunningConf)) {
            $query['NeedRunningConf'] = $request->needRunningConf;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryConfigRequest $request
     *
     * @return QueryConfigResponse
     */
    public function queryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConfigWithOptions($request, $runtime);
    }

    /**
     * @param QueryGatewayRegionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryGatewayRegionResponse
     */
    public function queryGatewayRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGatewayRegion',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGatewayRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGatewayRegionRequest $request
     *
     * @return QueryGatewayRegionResponse
     */
    public function queryGatewayRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGatewayRegionWithOptions($request, $runtime);
    }

    /**
     * @param QueryGatewayTypeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryGatewayTypeResponse
     */
    public function queryGatewayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGatewayType',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGatewayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGatewayTypeRequest $request
     *
     * @return QueryGatewayTypeResponse
     */
    public function queryGatewayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGatewayTypeWithOptions($request, $runtime);
    }

    /**
     * @param QueryGovernanceKubernetesClusterRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryGovernanceKubernetesClusterResponse
     */
    public function queryGovernanceKubernetesClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGovernanceKubernetesCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGovernanceKubernetesClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGovernanceKubernetesClusterRequest $request
     *
     * @return QueryGovernanceKubernetesClusterResponse
     */
    public function queryGovernanceKubernetesCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGovernanceKubernetesClusterWithOptions($request, $runtime);
    }

    /**
     * @param QueryInstancesInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryInstancesInfoResponse
     */
    public function queryInstancesInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryInstancesInfo',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInstancesInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryInstancesInfoRequest $request
     *
     * @return QueryInstancesInfoResponse
     */
    public function queryInstancesInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstancesInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryMonitorRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMonitorResponse
     */
    public function queryMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->monitorType)) {
            $query['MonitorType'] = $request->monitorType;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->step)) {
            $query['Step'] = $request->step;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMonitor',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMonitorRequest $request
     *
     * @return QueryMonitorResponse
     */
    public function queryMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonitorWithOptions($request, $runtime);
    }

    /**
     * @param QueryNamespaceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryNamespaceResponse
     */
    public function queryNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryNamespace',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryNamespaceRequest $request
     *
     * @return QueryNamespaceResponse
     */
    public function queryNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param QuerySlbSpecRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QuerySlbSpecResponse
     */
    public function querySlbSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySlbSpec',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySlbSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySlbSpecRequest $request
     *
     * @return QuerySlbSpecResponse
     */
    public function querySlbSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySlbSpecWithOptions($request, $runtime);
    }

    /**
     * @param QuerySwimmingLaneByIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySwimmingLaneByIdResponse
     */
    public function querySwimmingLaneByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->laneId)) {
            $query['LaneId'] = $request->laneId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySwimmingLaneById',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySwimmingLaneByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySwimmingLaneByIdRequest $request
     *
     * @return QuerySwimmingLaneByIdResponse
     */
    public function querySwimmingLaneById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySwimmingLaneByIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryZnodeDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryZnodeDetailResponse
     */
    public function queryZnodeDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryZnodeDetail',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryZnodeDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryZnodeDetailRequest $request
     *
     * @return QueryZnodeDetailResponse
     */
    public function queryZnodeDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryZnodeDetailWithOptions($request, $runtime);
    }

    /**
     * @param RemoveApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RemoveApplicationResponse
     */
    public function removeApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveApplication',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveApplicationRequest $request
     *
     * @return RemoveApplicationResponse
     */
    public function removeApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApplicationWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAuthPolicyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveAuthPolicyResponse
     */
    public function removeAuthPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAuthPolicy',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAuthPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveAuthPolicyRequest $request
     *
     * @return RemoveAuthPolicyResponse
     */
    public function removeAuthPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAuthPolicyWithOptions($request, $runtime);
    }

    /**
     * @param RestartClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RestartClusterResponse
     */
    public function restartClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->podNameList)) {
            $query['PodNameList'] = $request->podNameList;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartClusterRequest $request
     *
     * @return RestartClusterResponse
     */
    public function restartCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartClusterWithOptions($request, $runtime);
    }

    /**
     * @param RetryClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RetryClusterResponse
     */
    public function retryClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetryCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RetryClusterRequest $request
     *
     * @return RetryClusterResponse
     */
    public function retryCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryClusterWithOptions($request, $runtime);
    }

    /**
     * @param SelectGatewaySlbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SelectGatewaySlbResponse
     */
    public function selectGatewaySlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SelectGatewaySlb',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SelectGatewaySlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SelectGatewaySlbRequest $request
     *
     * @return SelectGatewaySlbResponse
     */
    public function selectGatewaySlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->selectGatewaySlbWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAclResponse
     */
    public function updateAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->aclEntryList)) {
            $query['AclEntryList'] = $request->aclEntryList;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAcl',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAclRequest $request
     *
     * @return UpdateAclResponse
     */
    public function updateAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAclWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAuthPolicyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAuthPolicyResponse
     */
    public function updateAuthPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->authRule)) {
            $query['AuthRule'] = $request->authRule;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->k8sNamespace)) {
            $query['K8sNamespace'] = $request->k8sNamespace;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuthPolicy',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuthPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAuthPolicyRequest $request
     *
     * @return UpdateAuthPolicyResponse
     */
    public function updateAuthPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthPolicyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBlackWhiteListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateBlackWhiteListResponse
     */
    public function updateBlackWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->isWhite)) {
            $query['IsWhite'] = $request->isWhite;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->resourceIdJsonList)) {
            $query['ResourceIdJsonList'] = $request->resourceIdJsonList;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBlackWhiteList',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBlackWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBlackWhiteListRequest $request
     *
     * @return UpdateBlackWhiteListResponse
     */
    public function updateBlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCircuitBreakerRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateCircuitBreakerRuleResponse
     */
    public function updateCircuitBreakerRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->halfOpenBaseAmountPerStep)) {
            $query['HalfOpenBaseAmountPerStep'] = $request->halfOpenBaseAmountPerStep;
        }
        if (!Utils::isUnset($request->halfOpenRecoveryStepNum)) {
            $query['HalfOpenRecoveryStepNum'] = $request->halfOpenRecoveryStepNum;
        }
        if (!Utils::isUnset($request->maxAllowedRtMs)) {
            $query['MaxAllowedRtMs'] = $request->maxAllowedRtMs;
        }
        if (!Utils::isUnset($request->minRequestAmount)) {
            $query['MinRequestAmount'] = $request->minRequestAmount;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->retryTimeoutMs)) {
            $query['RetryTimeoutMs'] = $request->retryTimeoutMs;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->statIntervalMs)) {
            $query['StatIntervalMs'] = $request->statIntervalMs;
        }
        if (!Utils::isUnset($request->strategy)) {
            $query['Strategy'] = $request->strategy;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCircuitBreakerRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCircuitBreakerRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCircuitBreakerRuleRequest $request
     *
     * @return UpdateCircuitBreakerRuleResponse
     */
    public function updateCircuitBreakerRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCircuitBreakerRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateClusterResponse
     */
    public function updateClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterAliasName)) {
            $query['ClusterAliasName'] = $request->clusterAliasName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maintenanceEndTime)) {
            $query['MaintenanceEndTime'] = $request->maintenanceEndTime;
        }
        if (!Utils::isUnset($request->maintenanceStartTime)) {
            $query['MaintenanceStartTime'] = $request->maintenanceStartTime;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateClusterRequest $request
     *
     * @return UpdateClusterResponse
     */
    public function updateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to update the number or specifications of nodes in a pay-as-you-go or subscription MSE instance. You are charged when you add nodes or upgrade node specifications. For more information, see "Pricing" (`~~1806469~~`).
     *   *
     * @param UpdateClusterSpecRequest $request UpdateClusterSpecRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateClusterSpecResponse UpdateClusterSpecResponse
     */
    public function updateClusterSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterSpecification)) {
            $query['ClusterSpecification'] = $request->clusterSpecification;
        }
        if (!Utils::isUnset($request->instanceCount)) {
            $query['InstanceCount'] = $request->instanceCount;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mseVersion)) {
            $query['MseVersion'] = $request->mseVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateClusterSpec',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateClusterSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to update the number or specifications of nodes in a pay-as-you-go or subscription MSE instance. You are charged when you add nodes or upgrade node specifications. For more information, see "Pricing" (`~~1806469~~`).
     *   *
     * @param UpdateClusterSpecRequest $request UpdateClusterSpecRequest
     *
     * @return UpdateClusterSpecResponse UpdateClusterSpecResponse
     */
    public function updateClusterSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterSpecWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateConfigResponse
     */
    public function updateConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->autopurgePurgeInterval)) {
            $query['AutopurgePurgeInterval'] = $request->autopurgePurgeInterval;
        }
        if (!Utils::isUnset($request->autopurgeSnapRetainCount)) {
            $query['AutopurgeSnapRetainCount'] = $request->autopurgeSnapRetainCount;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->configAuthEnabled)) {
            $query['ConfigAuthEnabled'] = $request->configAuthEnabled;
        }
        if (!Utils::isUnset($request->configSecretEnabled)) {
            $query['ConfigSecretEnabled'] = $request->configSecretEnabled;
        }
        if (!Utils::isUnset($request->configType)) {
            $query['ConfigType'] = $request->configType;
        }
        if (!Utils::isUnset($request->consoleUIEnabled)) {
            $query['ConsoleUIEnabled'] = $request->consoleUIEnabled;
        }
        if (!Utils::isUnset($request->eurekaSupported)) {
            $query['EurekaSupported'] = $request->eurekaSupported;
        }
        if (!Utils::isUnset($request->extendedTypesEnable)) {
            $query['ExtendedTypesEnable'] = $request->extendedTypesEnable;
        }
        if (!Utils::isUnset($request->initLimit)) {
            $query['InitLimit'] = $request->initLimit;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->juteMaxbuffer)) {
            $query['JuteMaxbuffer'] = $request->juteMaxbuffer;
        }
        if (!Utils::isUnset($request->MCPEnabled)) {
            $query['MCPEnabled'] = $request->MCPEnabled;
        }
        if (!Utils::isUnset($request->maxClientCnxns)) {
            $query['MaxClientCnxns'] = $request->maxClientCnxns;
        }
        if (!Utils::isUnset($request->maxSessionTimeout)) {
            $query['MaxSessionTimeout'] = $request->maxSessionTimeout;
        }
        if (!Utils::isUnset($request->minSessionTimeout)) {
            $query['MinSessionTimeout'] = $request->minSessionTimeout;
        }
        if (!Utils::isUnset($request->namingAuthEnabled)) {
            $query['NamingAuthEnabled'] = $request->namingAuthEnabled;
        }
        if (!Utils::isUnset($request->passWord)) {
            $query['PassWord'] = $request->passWord;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->snapshotCount)) {
            $query['SnapshotCount'] = $request->snapshotCount;
        }
        if (!Utils::isUnset($request->syncLimit)) {
            $query['SyncLimit'] = $request->syncLimit;
        }
        if (!Utils::isUnset($request->TLSEnabled)) {
            $query['TLSEnabled'] = $request->TLSEnabled;
        }
        if (!Utils::isUnset($request->tickTime)) {
            $query['TickTime'] = $request->tickTime;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $body = [];
        if (!Utils::isUnset($request->openSuperAcl)) {
            $body['OpenSuperAcl'] = $request->openSuperAcl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateConfigRequest $request
     *
     * @return UpdateConfigResponse
     */
    public function updateConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEngineNamespaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateEngineNamespaceResponse
     */
    public function updateEngineNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceCount)) {
            $query['ServiceCount'] = $request->serviceCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEngineNamespace',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEngineNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEngineNamespaceRequest $request
     *
     * @return UpdateEngineNamespaceResponse
     */
    public function updateEngineNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEngineNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlowRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFlowRuleResponse
     */
    public function updateFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->controlBehavior)) {
            $query['ControlBehavior'] = $request->controlBehavior;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->maxQueueingTimeMs)) {
            $query['MaxQueueingTimeMs'] = $request->maxQueueingTimeMs;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFlowRule',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFlowRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateFlowRuleRequest $request
     *
     * @return UpdateFlowRuleResponse
     */
    public function updateFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayAuthConsumerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateGatewayAuthConsumerResponse
     */
    public function updateGatewayAuthConsumerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $query['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->jwks)) {
            $query['Jwks'] = $request->jwks;
        }
        if (!Utils::isUnset($request->keyName)) {
            $query['KeyName'] = $request->keyName;
        }
        if (!Utils::isUnset($request->keyValue)) {
            $query['KeyValue'] = $request->keyValue;
        }
        if (!Utils::isUnset($request->tokenName)) {
            $query['TokenName'] = $request->tokenName;
        }
        if (!Utils::isUnset($request->tokenPass)) {
            $query['TokenPass'] = $request->tokenPass;
        }
        if (!Utils::isUnset($request->tokenPosition)) {
            $query['TokenPosition'] = $request->tokenPosition;
        }
        if (!Utils::isUnset($request->tokenPrefix)) {
            $query['TokenPrefix'] = $request->tokenPrefix;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayAuthConsumer',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayAuthConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayAuthConsumerRequest $request
     *
     * @return UpdateGatewayAuthConsumerResponse
     */
    public function updateGatewayAuthConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayAuthConsumerWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayAuthConsumerResourceRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateGatewayAuthConsumerResourceResponse
     */
    public function updateGatewayAuthConsumerResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayAuthConsumerResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceList)) {
            $request->resourceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceList, 'ResourceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->resourceListShrink)) {
            $query['ResourceList'] = $request->resourceListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayAuthConsumerResource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayAuthConsumerResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayAuthConsumerResourceRequest $request
     *
     * @return UpdateGatewayAuthConsumerResourceResponse
     */
    public function updateGatewayAuthConsumerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayAuthConsumerResourceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayAuthConsumerResourceStatusRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return UpdateGatewayAuthConsumerResourceStatusResponse
     */
    public function updateGatewayAuthConsumerResourceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerId)) {
            $query['ConsumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->idList)) {
            $query['IdList'] = $request->idList;
        }
        if (!Utils::isUnset($request->resourceStatus)) {
            $query['ResourceStatus'] = $request->resourceStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayAuthConsumerResourceStatus',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayAuthConsumerResourceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayAuthConsumerResourceStatusRequest $request
     *
     * @return UpdateGatewayAuthConsumerResourceStatusResponse
     */
    public function updateGatewayAuthConsumerResourceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayAuthConsumerResourceStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayAuthConsumerStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateGatewayAuthConsumerStatusResponse
     */
    public function updateGatewayAuthConsumerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->consumerStatus)) {
            $query['ConsumerStatus'] = $request->consumerStatus;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayAuthConsumerStatus',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayAuthConsumerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayAuthConsumerStatusRequest $request
     *
     * @return UpdateGatewayAuthConsumerStatusResponse
     */
    public function updateGatewayAuthConsumerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayAuthConsumerStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateGatewayDomainResponse
     */
    public function updateGatewayDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->http2)) {
            $query['Http2'] = $request->http2;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->mustHttps)) {
            $query['MustHttps'] = $request->mustHttps;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->tlsMax)) {
            $query['TlsMax'] = $request->tlsMax;
        }
        if (!Utils::isUnset($request->tlsMin)) {
            $query['TlsMin'] = $request->tlsMin;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayDomain',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayDomainRequest $request
     *
     * @return UpdateGatewayDomainResponse
     */
    public function updateGatewayDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayDomainWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateGatewayNameResponse
     */
    public function updateGatewayNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayName',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayNameRequest $request
     *
     * @return UpdateGatewayNameResponse
     */
    public function updateGatewayName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayOptionRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateGatewayOptionResponse
     */
    public function updateGatewayOptionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayOptionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->gatewayOption)) {
            $request->gatewayOptionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->gatewayOption, 'GatewayOption', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayOptionShrink)) {
            $query['GatewayOption'] = $request->gatewayOptionShrink;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayOption',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayOptionRequest $request
     *
     * @return UpdateGatewayOptionResponse
     */
    public function updateGatewayOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayOptionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayRouteRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateGatewayRouteResponse
     */
    public function updateGatewayRouteWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayRouteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->directResponseJSON)) {
            $request->directResponseJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->directResponseJSON, 'DirectResponseJSON', 'json');
        }
        if (!Utils::isUnset($tmpReq->fallbackServices)) {
            $request->fallbackServicesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fallbackServices, 'FallbackServices', 'json');
        }
        if (!Utils::isUnset($tmpReq->predicates)) {
            $request->predicatesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->predicates, 'Predicates', 'json');
        }
        if (!Utils::isUnset($tmpReq->redirectJSON)) {
            $request->redirectJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->redirectJSON, 'RedirectJSON', 'json');
        }
        if (!Utils::isUnset($tmpReq->services)) {
            $request->servicesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->services, 'Services', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->directResponseJSONShrink)) {
            $query['DirectResponseJSON'] = $request->directResponseJSONShrink;
        }
        if (!Utils::isUnset($request->domainIdListJSON)) {
            $query['DomainIdListJSON'] = $request->domainIdListJSON;
        }
        if (!Utils::isUnset($request->enableWaf)) {
            $query['EnableWaf'] = $request->enableWaf;
        }
        if (!Utils::isUnset($request->fallback)) {
            $query['Fallback'] = $request->fallback;
        }
        if (!Utils::isUnset($request->fallbackServicesShrink)) {
            $query['FallbackServices'] = $request->fallbackServicesShrink;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->predicatesShrink)) {
            $query['Predicates'] = $request->predicatesShrink;
        }
        if (!Utils::isUnset($request->redirectJSONShrink)) {
            $query['RedirectJSON'] = $request->redirectJSONShrink;
        }
        if (!Utils::isUnset($request->routeOrder)) {
            $query['RouteOrder'] = $request->routeOrder;
        }
        if (!Utils::isUnset($request->servicesShrink)) {
            $query['Services'] = $request->servicesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayRouteRequest $request
     *
     * @return UpdateGatewayRouteResponse
     */
    public function updateGatewayRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayRouteAuthRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGatewayRouteAuthResponse
     */
    public function updateGatewayRouteAuthWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayRouteAuthShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->authJSON)) {
            $request->authJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->authJSON, 'AuthJSON', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->authJSONShrink)) {
            $query['AuthJSON'] = $request->authJSONShrink;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteAuth',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayRouteAuthRequest $request
     *
     * @return UpdateGatewayRouteAuthResponse
     */
    public function updateGatewayRouteAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteAuthWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayRouteCORSRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGatewayRouteCORSResponse
     */
    public function updateGatewayRouteCORSWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayRouteCORSShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->corsJSON)) {
            $request->corsJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->corsJSON, 'CorsJSON', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->corsJSONShrink)) {
            $query['CorsJSON'] = $request->corsJSONShrink;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteCORS',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteCORSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayRouteCORSRequest $request
     *
     * @return UpdateGatewayRouteCORSResponse
     */
    public function updateGatewayRouteCORS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteCORSWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayRouteHTTPRewriteRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateGatewayRouteHTTPRewriteResponse
     */
    public function updateGatewayRouteHTTPRewriteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->httpRewriteJSON)) {
            $query['HttpRewriteJSON'] = $request->httpRewriteJSON;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteHTTPRewrite',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteHTTPRewriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayRouteHTTPRewriteRequest $request
     *
     * @return UpdateGatewayRouteHTTPRewriteResponse
     */
    public function updateGatewayRouteHTTPRewrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteHTTPRewriteWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayRouteHeaderOpRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateGatewayRouteHeaderOpResponse
     */
    public function updateGatewayRouteHeaderOpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->headerOpJSON)) {
            $query['HeaderOpJSON'] = $request->headerOpJSON;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteHeaderOp',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteHeaderOpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayRouteHeaderOpRequest $request
     *
     * @return UpdateGatewayRouteHeaderOpResponse
     */
    public function updateGatewayRouteHeaderOp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteHeaderOpWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayRouteRetryRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateGatewayRouteRetryResponse
     */
    public function updateGatewayRouteRetryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayRouteRetryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->retryJSON)) {
            $request->retryJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->retryJSON, 'RetryJSON', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->retryJSONShrink)) {
            $query['RetryJSON'] = $request->retryJSONShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteRetry',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteRetryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayRouteRetryRequest $request
     *
     * @return UpdateGatewayRouteRetryResponse
     */
    public function updateGatewayRouteRetry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteRetryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayRouteTimeoutRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateGatewayRouteTimeoutResponse
     */
    public function updateGatewayRouteTimeoutWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayRouteTimeoutShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->timeoutJSON)) {
            $request->timeoutJSONShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->timeoutJSON, 'TimeoutJSON', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->timeoutJSONShrink)) {
            $query['TimeoutJSON'] = $request->timeoutJSONShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteTimeout',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteTimeoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayRouteTimeoutRequest $request
     *
     * @return UpdateGatewayRouteTimeoutResponse
     */
    public function updateGatewayRouteTimeout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteTimeoutWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayRouteWafStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateGatewayRouteWafStatusResponse
     */
    public function updateGatewayRouteWafStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->enableWaf)) {
            $query['EnableWaf'] = $request->enableWaf;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRouteWafStatus',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteWafStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayRouteWafStatusRequest $request
     *
     * @return UpdateGatewayRouteWafStatusResponse
     */
    public function updateGatewayRouteWafStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteWafStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayServiceCheckRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateGatewayServiceCheckResponse
     */
    public function updateGatewayServiceCheckWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayServiceCheckShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->expectedStatuses)) {
            $request->expectedStatusesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->expectedStatuses, 'ExpectedStatuses', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->check)) {
            $query['Check'] = $request->check;
        }
        if (!Utils::isUnset($request->expectedStatusesShrink)) {
            $query['ExpectedStatuses'] = $request->expectedStatusesShrink;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->httpHost)) {
            $query['HttpHost'] = $request->httpHost;
        }
        if (!Utils::isUnset($request->httpPath)) {
            $query['HttpPath'] = $request->httpPath;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayServiceCheck',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayServiceCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayServiceCheckRequest $request
     *
     * @return UpdateGatewayServiceCheckResponse
     */
    public function updateGatewayServiceCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayServiceCheckWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayServiceTrafficPolicyRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateGatewayServiceTrafficPolicyResponse
     */
    public function updateGatewayServiceTrafficPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayServiceTrafficPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->gatewayTrafficPolicy)) {
            $request->gatewayTrafficPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->gatewayTrafficPolicy, 'GatewayTrafficPolicy', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayTrafficPolicyShrink)) {
            $query['GatewayTrafficPolicy'] = $request->gatewayTrafficPolicyShrink;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayServiceTrafficPolicy',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayServiceTrafficPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayServiceTrafficPolicyRequest $request
     *
     * @return UpdateGatewayServiceTrafficPolicyResponse
     */
    public function updateGatewayServiceTrafficPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayServiceTrafficPolicyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayServiceVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateGatewayServiceVersionResponse
     */
    public function updateGatewayServiceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayServiceVersion',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayServiceVersionRequest $request
     *
     * @return UpdateGatewayServiceVersionResponse
     */
    public function updateGatewayServiceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayServiceVersionWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to update the number of nodes or the specifications of nodes in a pay-as-you-go or subscription cloud-native gateway. If you add nodes or increase the specifications, you will incur fees. For more information, see [Pricing](~~250950~~).
     *   *
     * @param UpdateGatewaySpecRequest $request UpdateGatewaySpecRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewaySpecResponse UpdateGatewaySpecResponse
     */
    public function updateGatewaySpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->replica)) {
            $query['Replica'] = $request->replica;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewaySpec',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewaySpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to update the number of nodes or the specifications of nodes in a pay-as-you-go or subscription cloud-native gateway. If you add nodes or increase the specifications, you will incur fees. For more information, see [Pricing](~~250950~~).
     *   *
     * @param UpdateGatewaySpecRequest $request UpdateGatewaySpecRequest
     *
     * @return UpdateGatewaySpecResponse UpdateGatewaySpecResponse
     */
    public function updateGatewaySpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewaySpecWithOptions($request, $runtime);
    }

    /**
     * @param UpdateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateImageResponse
     */
    public function updateImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->versionCode)) {
            $query['VersionCode'] = $request->versionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateImage',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateImageRequest $request
     *
     * @return UpdateImageResponse
     */
    public function updateImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMessageQueueRouteRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMessageQueueRouteResponse
     */
    public function updateMessageQueueRouteWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMessageQueueRouteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->filterSide)) {
            $query['FilterSide'] = $request->filterSide;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMessageQueueRoute',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMessageQueueRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMessageQueueRouteRequest $request
     *
     * @return UpdateMessageQueueRouteResponse
     */
    public function updateMessageQueueRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMessageQueueRouteWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMigrationTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateMigrationTaskResponse
     */
    public function updateMigrationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->originInstanceAddress)) {
            $query['OriginInstanceAddress'] = $request->originInstanceAddress;
        }
        if (!Utils::isUnset($request->originInstanceName)) {
            $query['OriginInstanceName'] = $request->originInstanceName;
        }
        if (!Utils::isUnset($request->originInstanceNamespace)) {
            $query['OriginInstanceNamespace'] = $request->originInstanceNamespace;
        }
        if (!Utils::isUnset($request->projectDesc)) {
            $query['ProjectDesc'] = $request->projectDesc;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->targetClusterName)) {
            $query['TargetClusterName'] = $request->targetClusterName;
        }
        if (!Utils::isUnset($request->targetClusterUrl)) {
            $query['TargetClusterUrl'] = $request->targetClusterUrl;
        }
        if (!Utils::isUnset($request->targetInstanceId)) {
            $query['TargetInstanceId'] = $request->targetInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMigrationTask',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMigrationTaskRequest $request
     *
     * @return UpdateMigrationTaskResponse
     */
    public function updateMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNacosClusterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateNacosClusterResponse
     */
    public function updateNacosClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->checkPort)) {
            $query['CheckPort'] = $request->checkPort;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->healthChecker)) {
            $query['HealthChecker'] = $request->healthChecker;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->useInstancePortForCheck)) {
            $query['UseInstancePortForCheck'] = $request->useInstancePortForCheck;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNacosCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNacosClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNacosClusterRequest $request
     *
     * @return UpdateNacosClusterResponse
     */
    public function updateNacosCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosClusterWithOptions($request, $runtime);
    }

    /**
     * >  The current API operation is not provided in Nacos SDK. For more information about Nacos SDK, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param UpdateNacosConfigRequest $request UpdateNacosConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNacosConfigResponse UpdateNacosConfigResponse
     */
    public function updateNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->betaIps)) {
            $query['BetaIps'] = $request->betaIps;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->encryptedDataKey)) {
            $query['EncryptedDataKey'] = $request->encryptedDataKey;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->md5)) {
            $query['Md5'] = $request->md5;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNacosConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNacosConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The current API operation is not provided in Nacos SDK. For more information about Nacos SDK, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param UpdateNacosConfigRequest $request UpdateNacosConfigRequest
     *
     * @return UpdateNacosConfigResponse UpdateNacosConfigResponse
     */
    public function updateNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosConfigWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param UpdateNacosInstanceRequest $request UpdateNacosInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNacosInstanceResponse UpdateNacosInstanceResponse
     */
    public function updateNacosInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->ephemeral)) {
            $query['Ephemeral'] = $request->ephemeral;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $body = [];
        if (!Utils::isUnset($request->metadata)) {
            $body['Metadata'] = $request->metadata;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateNacosInstance',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNacosInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param UpdateNacosInstanceRequest $request UpdateNacosInstanceRequest
     *
     * @return UpdateNacosInstanceResponse UpdateNacosInstanceResponse
     */
    public function updateNacosInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosInstanceWithOptions($request, $runtime);
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param UpdateNacosServiceRequest $request UpdateNacosServiceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNacosServiceResponse UpdateNacosServiceResponse
     */
    public function updateNacosServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->protectThreshold)) {
            $query['ProtectThreshold'] = $request->protectThreshold;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNacosService',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNacosServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The operation is not provided in Nacos SDKs. For information about Nacos SDKs, see the [official documentation](https://nacos.io/zh-cn/docs/sdk.html).
     *   *
     * @param UpdateNacosServiceRequest $request UpdateNacosServiceRequest
     *
     * @return UpdateNacosServiceResponse UpdateNacosServiceResponse
     */
    public function updateNacosService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosServiceWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePluginConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdatePluginConfigResponse
     */
    public function updatePluginConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->configLevel)) {
            $query['ConfigLevel'] = $request->configLevel;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->gmtCreate)) {
            $query['GmtCreate'] = $request->gmtCreate;
        }
        if (!Utils::isUnset($request->gmtModified)) {
            $query['GmtModified'] = $request->gmtModified;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['PluginId'] = $request->pluginId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePluginConfig',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePluginConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePluginConfigRequest $request
     *
     * @return UpdatePluginConfigResponse
     */
    public function updatePluginConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePluginConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSSLCertRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateSSLCertResponse
     */
    public function updateSSLCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSSLCert',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSSLCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSSLCertRequest $request
     *
     * @return UpdateSSLCertResponse
     */
    public function updateSSLCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSSLCertWithOptions($request, $runtime);
    }

    /**
     * @param UpdateServiceSourceRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateServiceSourceResponse
     */
    public function updateServiceSourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateServiceSourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ingressOptionsRequest)) {
            $request->ingressOptionsRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ingressOptionsRequest, 'IngressOptionsRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->pathList)) {
            $request->pathListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->pathList, 'PathList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayUniqueId)) {
            $query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ingressOptionsRequestShrink)) {
            $query['IngressOptionsRequest'] = $request->ingressOptionsRequestShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pathListShrink)) {
            $query['PathList'] = $request->pathListShrink;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceSource',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceSourceRequest $request
     *
     * @return UpdateServiceSourceResponse
     */
    public function updateServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceSourceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateZnodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateZnodeResponse
     */
    public function updateZnodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateZnode',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateZnodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateZnodeRequest $request
     *
     * @return UpdateZnodeResponse
     */
    public function updateZnode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateZnodeWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->requestPars)) {
            $query['RequestPars'] = $request->requestPars;
        }
        if (!Utils::isUnset($request->upgradeVersion)) {
            $query['UpgradeVersion'] = $request->upgradeVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeCluster',
            'version'     => '2019-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeClusterRequest $request
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClusterWithOptions($request, $runtime);
    }
}
