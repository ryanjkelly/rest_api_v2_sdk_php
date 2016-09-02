<?php
/**
 * ItemApi
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\admin\v2
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * This is the next generation UltraCart REST API...
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\admin\v2\api;

use \ultracart\admin\v2\Configuration;
use \ultracart\admin\v2\ApiClient;
use \ultracart\admin\v2\ApiException;
use \ultracart\admin\v2\ObjectSerializer;

/**
 * ItemApi Class Doc Comment
 *
 * @category Class
 * @package  ultracart\admin\v2
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemApi
{

    /**
     * API Client
     *
     * @var \ultracart\admin\v2\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ultracart\admin\v2\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ultracart\admin\v2\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://secure.ultracart.com/rest/admin/v2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ultracart\admin\v2\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ultracart\admin\v2\ApiClient $apiClient set the API client
     *
     * @return ItemApi
     */
    public function setApiClient(\ultracart\admin\v2\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation itemItemsGet
     *
     * Retrieve items
     *
     * @param string $x_ultracart_api_version API version (required)
     * @param int $parent_category_id The parent category to retrieve items for.  Unspecified means all items on the account.  0 &#x3D; root (optional)
     * @param int $_limit The maximum number of records to return on this one API call. (optional, default to 100)
     * @param int $_offset Pagination of the record set.  Offset is a zero based index. (optional, default to 0)
     * @param string $_since Fetch items that have been created/modified since this date/time. (optional)
     * @param string $_sort The sort order of the items.  See documentation for examples (optional)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @param bool $_placeholders Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. (optional)
     * @return \ultracart\admin\v2\models\ItemsResponse
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function itemItemsGet($x_ultracart_api_version, $parent_category_id = null, $_limit = null, $_offset = null, $_since = null, $_sort = null, $_expand = null, $_placeholders = null)
    {
        list($response) = $this->itemItemsGetWithHttpInfo($x_ultracart_api_version, $parent_category_id, $_limit, $_offset, $_since, $_sort, $_expand, $_placeholders);
        return $response;
    }

    /**
     * Operation itemItemsGetWithHttpInfo
     *
     * Retrieve items
     *
     * @param string $x_ultracart_api_version API version (required)
     * @param int $parent_category_id The parent category to retrieve items for.  Unspecified means all items on the account.  0 &#x3D; root (optional)
     * @param int $_limit The maximum number of records to return on this one API call. (optional, default to 100)
     * @param int $_offset Pagination of the record set.  Offset is a zero based index. (optional, default to 0)
     * @param string $_since Fetch items that have been created/modified since this date/time. (optional)
     * @param string $_sort The sort order of the items.  See documentation for examples (optional)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @param bool $_placeholders Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. (optional)
     * @return Array of \ultracart\admin\v2\models\ItemsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function itemItemsGetWithHttpInfo($x_ultracart_api_version, $parent_category_id = null, $_limit = null, $_offset = null, $_since = null, $_sort = null, $_expand = null, $_placeholders = null)
    {
        // verify the required parameter 'x_ultracart_api_version' is set
        if ($x_ultracart_api_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_ultracart_api_version when calling itemItemsGet');
        }
        // parse inputs
        $resourcePath = "/item/items";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($parent_category_id !== null) {
            $queryParams['parent_category_id'] = $this->apiClient->getSerializer()->toQueryValue($parent_category_id);
        }
        // query params
        if ($_limit !== null) {
            $queryParams['_limit'] = $this->apiClient->getSerializer()->toQueryValue($_limit);
        }
        // query params
        if ($_offset !== null) {
            $queryParams['_offset'] = $this->apiClient->getSerializer()->toQueryValue($_offset);
        }
        // query params
        if ($_since !== null) {
            $queryParams['_since'] = $this->apiClient->getSerializer()->toQueryValue($_since);
        }
        // query params
        if ($_sort !== null) {
            $queryParams['_sort'] = $this->apiClient->getSerializer()->toQueryValue($_sort);
        }
        // query params
        if ($_expand !== null) {
            $queryParams['_expand'] = $this->apiClient->getSerializer()->toQueryValue($_expand);
        }
        // query params
        if ($_placeholders !== null) {
            $queryParams['_placeholders'] = $this->apiClient->getSerializer()->toQueryValue($_placeholders);
        }
        // header params
        if ($x_ultracart_api_version !== null) {
            $headerParams['x-ultracart-api-version'] = $this->apiClient->getSerializer()->toHeaderValue($x_ultracart_api_version);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-ultracart-simple-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-ultracart-simple-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ultracart\admin\v2\models\ItemsResponse',
                '/item/items'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\admin\v2\models\ItemsResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation itemItemsMerchantItemOidDelete
     *
     * Delete an item
     *
     * @param int $merchant_item_oid The item oid to delete. (required)
     * @return void
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function itemItemsMerchantItemOidDelete($merchant_item_oid)
    {
        list($response) = $this->itemItemsMerchantItemOidDeleteWithHttpInfo($merchant_item_oid);
        return $response;
    }

    /**
     * Operation itemItemsMerchantItemOidDeleteWithHttpInfo
     *
     * Delete an item
     *
     * @param int $merchant_item_oid The item oid to delete. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function itemItemsMerchantItemOidDeleteWithHttpInfo($merchant_item_oid)
    {
        // verify the required parameter 'merchant_item_oid' is set
        if ($merchant_item_oid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchant_item_oid when calling itemItemsMerchantItemOidDelete');
        }
        // parse inputs
        $resourcePath = "/item/items/{merchant_item_oid}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($merchant_item_oid !== null) {
            $resourcePath = str_replace(
                "{" . "merchant_item_oid" . "}",
                $this->apiClient->getSerializer()->toPathValue($merchant_item_oid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-ultracart-simple-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-ultracart-simple-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/item/items/{merchant_item_oid}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation itemItemsMerchantItemOidGet
     *
     * Retrieve an item
     *
     * @param int $merchant_item_oid The item oid to retrieve. (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @param bool $_placeholders Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. (optional)
     * @return \ultracart\admin\v2\models\ItemResponse
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function itemItemsMerchantItemOidGet($merchant_item_oid, $_expand = null, $_placeholders = null)
    {
        list($response) = $this->itemItemsMerchantItemOidGetWithHttpInfo($merchant_item_oid, $_expand, $_placeholders);
        return $response;
    }

    /**
     * Operation itemItemsMerchantItemOidGetWithHttpInfo
     *
     * Retrieve an item
     *
     * @param int $merchant_item_oid The item oid to retrieve. (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @param bool $_placeholders Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. (optional)
     * @return Array of \ultracart\admin\v2\models\ItemResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function itemItemsMerchantItemOidGetWithHttpInfo($merchant_item_oid, $_expand = null, $_placeholders = null)
    {
        // verify the required parameter 'merchant_item_oid' is set
        if ($merchant_item_oid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchant_item_oid when calling itemItemsMerchantItemOidGet');
        }
        // parse inputs
        $resourcePath = "/item/items/{merchant_item_oid}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($_expand !== null) {
            $queryParams['_expand'] = $this->apiClient->getSerializer()->toQueryValue($_expand);
        }
        // query params
        if ($_placeholders !== null) {
            $queryParams['_placeholders'] = $this->apiClient->getSerializer()->toQueryValue($_placeholders);
        }
        // path params
        if ($merchant_item_oid !== null) {
            $resourcePath = str_replace(
                "{" . "merchant_item_oid" . "}",
                $this->apiClient->getSerializer()->toPathValue($merchant_item_oid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-ultracart-simple-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-ultracart-simple-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ultracart\admin\v2\models\ItemResponse',
                '/item/items/{merchant_item_oid}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\admin\v2\models\ItemResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation itemItemsMerchantItemOidPut
     *
     * Update an item
     *
     * @param \ultracart\admin\v2\models\Item $item Item to create (required)
     * @param int $merchant_item_oid The item oid to update. (required)
     * @return \ultracart\admin\v2\models\ItemResponse
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function itemItemsMerchantItemOidPut($item, $merchant_item_oid)
    {
        list($response) = $this->itemItemsMerchantItemOidPutWithHttpInfo($item, $merchant_item_oid);
        return $response;
    }

    /**
     * Operation itemItemsMerchantItemOidPutWithHttpInfo
     *
     * Update an item
     *
     * @param \ultracart\admin\v2\models\Item $item Item to create (required)
     * @param int $merchant_item_oid The item oid to update. (required)
     * @return Array of \ultracart\admin\v2\models\ItemResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function itemItemsMerchantItemOidPutWithHttpInfo($item, $merchant_item_oid)
    {
        // verify the required parameter 'item' is set
        if ($item === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item when calling itemItemsMerchantItemOidPut');
        }
        // verify the required parameter 'merchant_item_oid' is set
        if ($merchant_item_oid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchant_item_oid when calling itemItemsMerchantItemOidPut');
        }
        // parse inputs
        $resourcePath = "/item/items/{merchant_item_oid}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($merchant_item_oid !== null) {
            $resourcePath = str_replace(
                "{" . "merchant_item_oid" . "}",
                $this->apiClient->getSerializer()->toPathValue($merchant_item_oid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($item)) {
            $_tempBody = $item;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-ultracart-simple-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-ultracart-simple-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ultracart\admin\v2\models\ItemResponse',
                '/item/items/{merchant_item_oid}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\admin\v2\models\ItemResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation itemItemsPost
     *
     * Create an item
     *
     * @param \ultracart\admin\v2\models\Item $item Item to create (required)
     * @return \ultracart\admin\v2\models\ItemResponse
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function itemItemsPost($item)
    {
        list($response) = $this->itemItemsPostWithHttpInfo($item);
        return $response;
    }

    /**
     * Operation itemItemsPostWithHttpInfo
     *
     * Create an item
     *
     * @param \ultracart\admin\v2\models\Item $item Item to create (required)
     * @return Array of \ultracart\admin\v2\models\ItemResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function itemItemsPostWithHttpInfo($item)
    {
        // verify the required parameter 'item' is set
        if ($item === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item when calling itemItemsPost');
        }
        // parse inputs
        $resourcePath = "/item/items";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($item)) {
            $_tempBody = $item;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-ultracart-simple-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-ultracart-simple-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ultracart\admin\v2\models\ItemResponse',
                '/item/items'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\admin\v2\models\ItemResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation itemTempMultimediaPost
     *
     * Upload an image to the temporary multimedia.
     *
     * @param \SplFileObject $file File to upload (required)
     * @return \ultracart\admin\v2\models\TempMultimediaResponse
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function itemTempMultimediaPost($file)
    {
        list($response) = $this->itemTempMultimediaPostWithHttpInfo($file);
        return $response;
    }

    /**
     * Operation itemTempMultimediaPostWithHttpInfo
     *
     * Upload an image to the temporary multimedia.
     *
     * @param \SplFileObject $file File to upload (required)
     * @return Array of \ultracart\admin\v2\models\TempMultimediaResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function itemTempMultimediaPostWithHttpInfo($file)
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling itemTempMultimediaPost');
        }
        // parse inputs
        $resourcePath = "/item/temp_multimedia";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('multipart/form-data'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($file !== null) {
            // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
            // See: https://wiki.php.net/rfc/curl-file-upload
            if (function_exists('curl_file_create')) {
                $formParams['file'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($file));
            } else {
                $formParams['file'] = '@' . $this->apiClient->getSerializer()->toFormValue($file);
            }
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-ultracart-simple-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-ultracart-simple-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ultracart\admin\v2\models\TempMultimediaResponse',
                '/item/temp_multimedia'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\admin\v2\models\TempMultimediaResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\TempMultimediaResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
