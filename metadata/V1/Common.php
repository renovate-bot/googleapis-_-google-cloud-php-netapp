<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/common.proto

namespace GPBMetadata\Google\Cloud\Netapp\V1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#google/cloud/netapp/v1/common.protogoogle.cloud.netapp.v1"_
LocationMetadataK
supported_service_levels (2$.google.cloud.netapp.v1.ServiceLevelB�A*_
ServiceLevel
SERVICE_LEVEL_UNSPECIFIED 
PREMIUM
EXTREME
STANDARD
FLEX*U
EncryptionType
ENCRYPTION_TYPE_UNSPECIFIED 
SERVICE_MANAGED
	CLOUD_KMS*T
DirectoryServiceType&
"DIRECTORY_SERVICE_TYPE_UNSPECIFIED 
ACTIVE_DIRECTORYB�
com.google.cloud.netapp.v1BCommonProtoPZ2cloud.google.com/go/netapp/apiv1/netapppb;netapppb�Google.Cloud.NetApp.V1�Google\\Cloud\\NetApp\\V1�Google::Cloud::NetApp::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

