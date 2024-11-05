<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START netapp_v1_generated_NetApp_SwitchActiveReplicaZone_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\NetApp\V1\Client\NetAppClient;
use Google\Cloud\NetApp\V1\StoragePool;
use Google\Cloud\NetApp\V1\SwitchActiveReplicaZoneRequest;
use Google\Rpc\Status;

/**
 * This operation will switch the active/replica zone for a regional
 * storagePool.
 *
 * @param string $formattedName Name of the storage pool
 *                              Please see {@see NetAppClient::storagePoolName()} for help formatting this field.
 */
function switch_active_replica_zone_sample(string $formattedName): void
{
    // Create a client.
    $netAppClient = new NetAppClient();

    // Prepare the request message.
    $request = (new SwitchActiveReplicaZoneRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $netAppClient->switchActiveReplicaZone($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var StoragePool $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = NetAppClient::storagePoolName('[PROJECT]', '[LOCATION]', '[STORAGE_POOL]');

    switch_active_replica_zone_sample($formattedName);
}
// [END netapp_v1_generated_NetApp_SwitchActiveReplicaZone_sync]