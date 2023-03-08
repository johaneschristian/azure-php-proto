<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailClusterEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* MailClusterEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailClusterEvidence extends AlertEvidence
{
    /**
    * Gets the clusterBy
    * The clustering logic of the emails inside the cluster.
    *
    * @return string|null The clusterBy
    */
    public function getClusterBy()
    {
        if (array_key_exists("clusterBy", $this->_propDict)) {
            return $this->_propDict["clusterBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clusterBy
    * The clustering logic of the emails inside the cluster.
    *
    * @param string $val The value of the clusterBy
    *
    * @return MailClusterEvidence
    */
    public function setClusterBy($val)
    {
        $this->_propDict["clusterBy"] = $val;
        return $this;
    }
    /**
    * Gets the clusterByValue
    * The value utilized to cluster the similar emails.
    *
    * @return string|null The clusterByValue
    */
    public function getClusterByValue()
    {
        if (array_key_exists("clusterByValue", $this->_propDict)) {
            return $this->_propDict["clusterByValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clusterByValue
    * The value utilized to cluster the similar emails.
    *
    * @param string $val The value of the clusterByValue
    *
    * @return MailClusterEvidence
    */
    public function setClusterByValue($val)
    {
        $this->_propDict["clusterByValue"] = $val;
        return $this;
    }
    /**
    * Gets the emailCount
    * Count of emails in the email cluster.
    *
    * @return int|null The emailCount
    */
    public function getEmailCount()
    {
        if (array_key_exists("emailCount", $this->_propDict)) {
            return $this->_propDict["emailCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailCount
    * Count of emails in the email cluster.
    *
    * @param int $val The value of the emailCount
    *
    * @return MailClusterEvidence
    */
    public function setEmailCount($val)
    {
        $this->_propDict["emailCount"] = $val;
        return $this;
    }
    /**
    * Gets the networkMessageIds
    * Unique identifiers for the emails in the cluster, generated by Microsoft 365.
    *
    * @return string|null The networkMessageIds
    */
    public function getNetworkMessageIds()
    {
        if (array_key_exists("networkMessageIds", $this->_propDict)) {
            return $this->_propDict["networkMessageIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the networkMessageIds
    * Unique identifiers for the emails in the cluster, generated by Microsoft 365.
    *
    * @param string $val The value of the networkMessageIds
    *
    * @return MailClusterEvidence
    */
    public function setNetworkMessageIds($val)
    {
        $this->_propDict["networkMessageIds"] = $val;
        return $this;
    }
    /**
    * Gets the query
    * The query used to identify the email cluster.
    *
    * @return string|null The query
    */
    public function getQuery()
    {
        if (array_key_exists("query", $this->_propDict)) {
            return $this->_propDict["query"];
        } else {
            return null;
        }
    }

    /**
    * Sets the query
    * The query used to identify the email cluster.
    *
    * @param string $val The value of the query
    *
    * @return MailClusterEvidence
    */
    public function setQuery($val)
    {
        $this->_propDict["query"] = $val;
        return $this;
    }
    /**
    * Gets the urn
    * Uniform resource name (URN) of the automated investigation where the cluster was identified.
    *
    * @return string|null The urn
    */
    public function getUrn()
    {
        if (array_key_exists("urn", $this->_propDict)) {
            return $this->_propDict["urn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urn
    * Uniform resource name (URN) of the automated investigation where the cluster was identified.
    *
    * @param string $val The value of the urn
    *
    * @return MailClusterEvidence
    */
    public function setUrn($val)
    {
        $this->_propDict["urn"] = $val;
        return $this;
    }
}
