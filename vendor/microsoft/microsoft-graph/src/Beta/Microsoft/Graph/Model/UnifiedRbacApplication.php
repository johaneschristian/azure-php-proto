<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRbacApplication File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* UnifiedRbacApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRbacApplication extends Entity
{

     /**
     * Gets the resourceNamespaces
     *
     * @return array|null The resourceNamespaces
     */
    public function getResourceNamespaces()
    {
        if (array_key_exists("resourceNamespaces", $this->_propDict)) {
           return $this->_propDict["resourceNamespaces"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceNamespaces
    *
    * @param UnifiedRbacResourceNamespace[] $val The resourceNamespaces
    *
    * @return UnifiedRbacApplication
    */
    public function setResourceNamespaces($val)
    {
        $this->_propDict["resourceNamespaces"] = $val;
        return $this;
    }


     /**
     * Gets the roleAssignments
     *
     * @return array|null The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists("roleAssignments", $this->_propDict)) {
           return $this->_propDict["roleAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleAssignments
    *
    * @param UnifiedRoleAssignment[] $val The roleAssignments
    *
    * @return UnifiedRbacApplication
    */
    public function setRoleAssignments($val)
    {
        $this->_propDict["roleAssignments"] = $val;
        return $this;
    }


     /**
     * Gets the roleDefinitions
     *
     * @return array|null The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists("roleDefinitions", $this->_propDict)) {
           return $this->_propDict["roleDefinitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleDefinitions
    *
    * @param UnifiedRoleDefinition[] $val The roleDefinitions
    *
    * @return UnifiedRbacApplication
    */
    public function setRoleDefinitions($val)
    {
        $this->_propDict["roleDefinitions"] = $val;
        return $this;
    }


     /**
     * Gets the transitiveRoleAssignments
     *
     * @return array|null The transitiveRoleAssignments
     */
    public function getTransitiveRoleAssignments()
    {
        if (array_key_exists("transitiveRoleAssignments", $this->_propDict)) {
           return $this->_propDict["transitiveRoleAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the transitiveRoleAssignments
    *
    * @param UnifiedRoleAssignment[] $val The transitiveRoleAssignments
    *
    * @return UnifiedRbacApplication
    */
    public function setTransitiveRoleAssignments($val)
    {
        $this->_propDict["transitiveRoleAssignments"] = $val;
        return $this;
    }

}
