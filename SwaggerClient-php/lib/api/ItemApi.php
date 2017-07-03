<?php
/**
 * ItemApi
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
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

namespace ultracart\v2\api;

use \ultracart\v2\Configuration;
use \ultracart\v2\ApiClient;
use \ultracart\v2\ApiException;
use \ultracart\v2\ObjectSerializer;

/**
 * ItemApi Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemApi
{

    /**
     * API Client
     *
     * @var \ultracart\v2\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ultracart\v2\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ultracart\v2\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://secure.ultracart.com/rest/v2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ultracart\v2\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ultracart\v2\ApiClient $apiClient set the API client
     *
     * @return ItemApi
     */
    public function setApiClient(\ultracart\v2\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteItem
     *
     * Delete an item
     *
     * @param int $merchant_item_oid The item oid to delete. (required)
     * @return void
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function deleteItem($merchant_item_oid)
    {
        list($response) = $this->deleteItemWithHttpInfo($merchant_item_oid);
        return $response;
    }

    /**
     * Operation deleteItemWithHttpInfo
     *
     * Delete an item
     *
     * @param int $merchant_item_oid The item oid to delete. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function deleteItemWithHttpInfo($merchant_item_oid)
    {
        // verify the required parameter 'merchant_item_oid' is set
        if ($merchant_item_oid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchant_item_oid when calling deleteItem');
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
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getItem
     *
     * Retrieve an item
     *
     * @param int $merchant_item_oid The item oid to retrieve. (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @param bool $_placeholders Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. (optional)
     * @return \ultracart\v2\models\ItemResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function getItem($merchant_item_oid, $_expand = null, $_placeholders = null)
    {
        list($response) = $this->getItemWithHttpInfo($merchant_item_oid, $_expand, $_placeholders);
        return $response;
    }

    /**
     * Operation getItemWithHttpInfo
     *
     * Retrieve an item
     *
     * @param int $merchant_item_oid The item oid to retrieve. (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @param bool $_placeholders Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. (optional)
     * @return Array of \ultracart\v2\models\ItemResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function getItemWithHttpInfo($merchant_item_oid, $_expand = null, $_placeholders = null)
    {
        // verify the required parameter 'merchant_item_oid' is set
        if ($merchant_item_oid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchant_item_oid when calling getItem');
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
                '\ultracart\v2\models\ItemResponse',
                '/item/items/{merchant_item_oid}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\ItemResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getItems
     *
     * Retrieve items
     *
     * @param int $parent_category_id The parent category object id to retrieve items for.  Unspecified means all items on the account.  0 &#x3D; root (optional)
     * @param string $parent_category_path The parent category path to retrieve items for.  Unspecified means all items on the account.  / &#x3D; root (optional)
     * @param int $_limit The maximum number of records to return on this one API call. (Default 100, Max 2000) (optional, default to 100)
     * @param int $_offset Pagination of the record set.  Offset is a zero based index. (optional, default to 0)
     * @param string $_since Fetch items that have been created/modified since this date/time. (optional)
     * @param string $_sort The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. (optional)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @param bool $_placeholders Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. (optional)
     * @return \ultracart\v2\models\ItemsResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function getItems($parent_category_id = null, $parent_category_path = null, $_limit = null, $_offset = null, $_since = null, $_sort = null, $_expand = null, $_placeholders = null)
    {
        list($response) = $this->getItemsWithHttpInfo($parent_category_id, $parent_category_path, $_limit, $_offset, $_since, $_sort, $_expand, $_placeholders);
        return $response;
    }

    /**
     * Operation getItemsWithHttpInfo
     *
     * Retrieve items
     *
     * @param int $parent_category_id The parent category object id to retrieve items for.  Unspecified means all items on the account.  0 &#x3D; root (optional)
     * @param string $parent_category_path The parent category path to retrieve items for.  Unspecified means all items on the account.  / &#x3D; root (optional)
     * @param int $_limit The maximum number of records to return on this one API call. (Default 100, Max 2000) (optional, default to 100)
     * @param int $_offset Pagination of the record set.  Offset is a zero based index. (optional, default to 0)
     * @param string $_since Fetch items that have been created/modified since this date/time. (optional)
     * @param string $_sort The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. (optional)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @param bool $_placeholders Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. (optional)
     * @return Array of \ultracart\v2\models\ItemsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function getItemsWithHttpInfo($parent_category_id = null, $parent_category_path = null, $_limit = null, $_offset = null, $_since = null, $_sort = null, $_expand = null, $_placeholders = null)
    {
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
        if ($parent_category_path !== null) {
            $queryParams['parent_category_path'] = $this->apiClient->getSerializer()->toQueryValue($parent_category_path);
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
                '\ultracart\v2\models\ItemsResponse',
                '/item/items'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\ItemsResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation insertItem
     *
     * Create an item
     *
     * @param \ultracart\v2\models\Item $item Item to create (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @param bool $_placeholders Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. (optional)
     * @return \ultracart\v2\models\ItemResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function insertItem($item, $_expand = null, $_placeholders = null)
    {
        list($response) = $this->insertItemWithHttpInfo($item, $_expand, $_placeholders);
        return $response;
    }

    /**
     * Operation insertItemWithHttpInfo
     *
     * Create an item
     *
     * @param \ultracart\v2\models\Item $item Item to create (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @param bool $_placeholders Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. (optional)
     * @return Array of \ultracart\v2\models\ItemResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function insertItemWithHttpInfo($item, $_expand = null, $_placeholders = null)
    {
        // verify the required parameter 'item' is set
        if ($item === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item when calling insertItem');
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
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json; charset=UTF-8'));

        // query params
        if ($_expand !== null) {
            $queryParams['_expand'] = $this->apiClient->getSerializer()->toQueryValue($_expand);
        }
        // query params
        if ($_placeholders !== null) {
            $queryParams['_placeholders'] = $this->apiClient->getSerializer()->toQueryValue($_placeholders);
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ultracart\v2\models\ItemResponse',
                '/item/items'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\ItemResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateItem
     *
     * Update an item
     *
     * @param \ultracart\v2\models\Item $item Item to update (required)
     * @param int $merchant_item_oid The item oid to update. (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @param bool $_placeholders Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. (optional)
     * @return \ultracart\v2\models\ItemResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function updateItem($item, $merchant_item_oid, $_expand = null, $_placeholders = null)
    {
        list($response) = $this->updateItemWithHttpInfo($item, $merchant_item_oid, $_expand, $_placeholders);
        return $response;
    }

    /**
     * Operation updateItemWithHttpInfo
     *
     * Update an item
     *
     * @param \ultracart\v2\models\Item $item Item to update (required)
     * @param int $merchant_item_oid The item oid to update. (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @param bool $_placeholders Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. (optional)
     * @return Array of \ultracart\v2\models\ItemResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function updateItemWithHttpInfo($item, $merchant_item_oid, $_expand = null, $_placeholders = null)
    {
        // verify the required parameter 'item' is set
        if ($item === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item when calling updateItem');
        }
        // verify the required parameter 'merchant_item_oid' is set
        if ($merchant_item_oid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchant_item_oid when calling updateItem');
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
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json; charset=UTF-8'));

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
                '\ultracart\v2\models\ItemResponse',
                '/item/items/{merchant_item_oid}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\ItemResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation uploadTemporaryMultimedia
     *
     * Upload an image to the temporary multimedia.
     *
     * @param \SplFileObject $file File to upload (required)
     * @return \ultracart\v2\models\TempMultimediaResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function uploadTemporaryMultimedia($file)
    {
        list($response) = $this->uploadTemporaryMultimediaWithHttpInfo($file);
        return $response;
    }

    /**
     * Operation uploadTemporaryMultimediaWithHttpInfo
     *
     * Upload an image to the temporary multimedia.
     *
     * @param \SplFileObject $file File to upload (required)
     * @return Array of \ultracart\v2\models\TempMultimediaResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function uploadTemporaryMultimediaWithHttpInfo($file)
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling uploadTemporaryMultimedia');
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
                '\ultracart\v2\models\TempMultimediaResponse',
                '/item/temp_multimedia'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\TempMultimediaResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\TempMultimediaResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
