<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$dictionary['DIGIT_TASK'] = array(
    'table' => 'digit_task',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
        'status' =>
            array (
                'name' => 'status',
                'vname' => 'LBL_STATUS',
                'type' => 'enum',
                'len' => 100,
                'options' => 'digit_task_status_list',
                'comment' => '',
                'required' => false,
                'importable' => 'required',
                
            ),
        'date_plan' =>
            array (
                'name' => 'date_plan',
                'vname' => 'LBL_DATE_PLAN',
                'type' => 'datetimecombo',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'inline_edit' => true,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'size' => '20',
                'enable_range_search' => false,
                'dbType' => 'datetime',
            ),
        'date_fact' =>
            array (
                'name' => 'date_fact',
                'vname' => 'LBL_DATE_FACT',
                'type' => 'datetimecombo',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'inline_edit' => true,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'size' => '20',
                'enable_range_search' => false,
                'dbType' => 'datetime',

            ),
        'priority' =>
            array (
                'name' => 'priority',
                'vname' => 'LBL_PRIORITY',
                'type' => 'enum',
                'len' => 100,
                'options' => 'digit_task_priority_list',
                'comment' => '',
                'required' => false,
                'importable' => 'required',
                
            ),
        'digit_project_id' => array (
            'required' => false,
            'name' => 'digit_project_id',
            'vname' => 'LBL_DIGIT_PROJECT_ID',
            'type' => 'id',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => false,
            'inline_edit' => true,
            'reportable' => false,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => 36,
            'size' => '20',
        ),
        'digit_project_name' => array (
            'required' => false,
            'source' => 'non-db',
            'name' => 'digit_project_name',
            'vname' => 'LBL_DIGIT_PROJECT_NAME',
            'type' => 'relate',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => '255',
            'size' => '20',
            'id_name' => 'digit_project_id',
            'ext2' => 'DIGIT_PROJECT',
            'module' => 'DIGIT_PROJECT',
            'rname' => 'name',
            'quicksearch' => 'enabled',
            'studio' => 'visible',
        ),
        'complexity' =>
            array (
                'name' => 'complexity',
                'vname' => 'LBL_COMPLEXITY',
                'type' => 'enum',
                'len' => 100,
                'options' => 'digit_task_complexity_list',
                'comment' => '',
                'required' => false,
                'importable' => 'required',
            ),
        'type' =>
            array (
                'name' => 'type',
                'vname' => 'LBL_TYPE',
                'type' => 'enum',
                'len' => 100,
                'options' => 'digit_task_type_list',
                'comment' => '',
                'required' => false,
                'importable' => 'false',
            ),
        'spectators_ids' => array (
            'name' => 'spectators_ids',
            'vname' => 'LBL_SPECTATORS_IDS',
            'type' => 'relate',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'source' => 'non-db',
            'rel_link' => 'digit_task_users_spectator',
            'table' => 'users',
            'fields_in_table' => array(
                'id',
                'first_name',
                'last_name',
            ),
            'detail_format'=> array('last_name','first_name',),
            'acl_field' => array(
                'DetailView'
            ),
        ),
        "digit_task_users_spectator" => array (
            'name' => 'digit_task_users_spectator',
            'type' => 'link',
            'relationship' => 'digit_task_users_spectator',
            'source' => 'non-db',
            'module' => 'Users',
            'bean_name' => 'User',
            'vname' => 'LBL_DIGIT_TASK_USERS_SPECTATOR',
        ),
        'source' =>
            array (
                'name' => 'source',
                'vname' => 'LBL_SOURCE',
                'type' => 'enum',
                'len' => 100,
                'options' => 'digit_task_source_list',
                'comment' => '',
                'required' => false,
                'importable' => 'required',
            ),
        'user_id_c' => array (
            'required' => false,
            'name' => 'user_id_c',
            'vname' => 'LBL_TASK_MANAGER_ID',
            'type' => 'id',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => false,
            'inline_edit' => true,
            'reportable' => false,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => 36,
            'size' => '20',
            'acl_field' => array(
                'DetailView',
                'EditView',
                'Delete',
            ),
        ),
        'task_manager_name' => array (
            'required' => false,
            'source' => 'non-db',
            'name' => 'task_manager_name',
            'vname' => 'LBL_TASK_MANAGER_NAME',
            'type' => 'relate',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => '255',
            'size' => '20',
            'id_name' => 'user_id_c',
            'ext2' => 'Users',
            'module' => 'Users',
            'rname' => 'name',
            'quicksearch' => 'enabled',
            'studio' => 'visible',
            'table' => 'users',
            'fields_in_table' => array(
                'id',
                'first_name',
                'last_name',
            ),
        ),
        'assigned_user_name' =>
            array (
                'name' => 'assigned_user_name',
                'link' => 'assigned_user_link',
                'vname' => 'LBL_ASSIGNED_TO_NAME',
                'rname' => 'user_name',
                'type' => 'relate',
                'reportable' => false,
                'source' => 'non-db',
                'table' => 'users',
                'id_name' => 'assigned_user_id',
                'module' => 'Users',
                'duplicate_merge' => 'disabled',
                'table' => 'users',
                'fields_in_table' => array(
                    'id',
                    'first_name',
                    'last_name',
                ),
            ),
        'capacity' => array(
            'required' => false,
            'name' => 'capacity',
            'vname' => 'LBL_CAPACITY',
            'type' => 'int',
            'massupdate' => 0,
            'no_default' => false,
            'default' => '1',
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => 0,
            'max' => false,
            'validation' => array(
                'type' => 'range',
                'min' => 0,
                'max' => false,
            ),
        ),
        'spectators' =>
            array (
                'name' => 'spectators',
                'type' => 'link',
                'relationship' => 'spectators',
                'source' => 'non-db',
                'link_type' => 'one',
                'vname' => 'LBL_SPECTATORS',
            ),
        'comments' =>
            array (
                'name' => 'comments',
                'type' => 'link',
                'relationship' => 'comments',
                'source' => 'non-db',
                'link_type' => 'one',
                'vname' => 'LBL_COMMENTS_LINK',
            ),
        'assigned_task_assigned' =>
            array (
                'name' => 'assigned_task_assigned',
                'type' => 'link',
                'relationship' => 'assigned_task_assigned',
                'source' => 'non-db',
                'link_type' => 'one',
                'vname' => 'LBL_TASK_LINK',
            ),
        'assigned_task_info' =>
            array (
                'name' => 'assigned_task_info',
                'type' => 'link',
                'relationship' => 'assigned_task_info',
                'source' => 'non-db',
                'link_type' => 'one',
                'vname' => 'LBL_TASK_INFO',
            ),
        'assigned_task_free_form' =>
            array (
                'name' => 'assigned_task_free_form',
                'type' => 'link',
                'relationship' => 'assigned_task_free_form',
                'source' => 'non-db',
                'link_type' => 'one',
                'vname' => 'LBL_TASK_FREE_FORM_LINK',
            ),
        'control' =>
            array(
                'required' => false,
                'name' => 'control',
                'vname' => 'LBL_CONTROL',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '0',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'inline_edit' => true,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'size' => '20',
                'width' => 2,
            ),
        'tags_ids' => array (
            'name' => 'tags_ids',
            'vname' => 'LBL_HRPAC_TAGS',
            'type' => 'relate',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'source' => 'non-db',
            'rel_link' => 'digit_task_hrpac_tags_1',
            'table' => 'hrpac_tags',
            'fields_in_table' => array(
                'id',
                'name',
                'my_tag',
            ),
            'detail_format'=> array('name'),
        ),
        //Цех
        'digit_workshop_id' => array (
            'required' => false,
            'name' => 'digit_workshop_id',
            'vname' => 'LBL_DIGIT_WORKSHOP_ID',
            'type' => 'id',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => false,
            'inline_edit' => true,
            'reportable' => false,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => 36,
            'size' => '20',
            'acl_field' => array(
                'DetailView',
                'EditView',
                'Delete',
            ),
        ),
        'digit_workshop_name' => array (
            'required' => false,
            'source' => 'non-db',
            'name' => 'digit_workshop_name',
            'vname' => 'LBL_DIGIT_WORKSHOP_NAME',
            'type' => 'relate',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => '255',
            'size' => '20',
            'id_name' => 'digit_workshop_id',
            'ext2' => 'DIGIT_WORKSHOP',
            'module' => 'DIGIT_WORKSHOP',
            'rname' => 'name',
            'quicksearch' => 'enabled',
            'studio' => 'visible',
            'table' => 'digit_workshop',
            'fields_in_table' => array(
                'id',
                'name',
            ),
        ),

        //Участок
        'digit_section_id' => array (
            'required' => false,
            'name' => 'digit_section_id',
            'vname' => 'LBL_DIGIT_SECTION_ID',
            'type' => 'id',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => false,
            'inline_edit' => true,
            'reportable' => false,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => 36,
            'size' => '20',
            'acl_field' => array(
                'DetailView',
                'EditView',
                'Delete',
            ),
        ),
        'digit_section_name' => array (
            'required' => false,
            'source' => 'non-db',
            'name' => 'digit_section_name',
            'vname' => 'LBL_DIGIT_SECTION_NAME',
            'type' => 'relate',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => '255',
            'size' => '20',
            'id_name' => 'digit_section_id',
            'ext2' => 'DIGIT_SECTION',
            'module' => 'DIGIT_SECTION',
            'rname' => 'name',
            'quicksearch' => 'enabled',
            'studio' => 'visible',
            'table' => 'digit_section',
            'fields_in_table' => array(
                'id',
                'name',
            ),
        ),

        //Корпус
        'digit_block_id' => array (
            'required' => false,
            'name' => 'digit_block_id',
            'vname' => 'LBL_DIGIT_BLOCK_ID',
            'type' => 'id',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => false,
            'inline_edit' => true,
            'reportable' => false,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => 36,
            'size' => '20',
            'acl_field' => array(
                'DetailView',
                'EditView',
                'Delete',
            ),
        ),
        'digit_block_name' => array (
            'required' => false,
            'source' => 'non-db',
            'name' => 'digit_block_name',
            'vname' => 'LBL_DIGIT_BLOCK_NAME',
            'type' => 'relate',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => '255',
            'size' => '20',
            'id_name' => 'digit_block_id',
            'ext2' => 'DIGIT_BLOCK',
            'module' => 'DIGIT_BLOCK',
            'rname' => 'name',
            'quicksearch' => 'enabled',
            'studio' => 'visible',
            'table' => 'digit_block',
            'fields_in_table' => array(
                'id',
                'name',
            ),
        ),

        'parent_id' => array(
            'name' => 'parent_id',
            'vname' => 'LBL_PARENT_DIGITAL_TASK_ID',
            'type' => 'id',
            'required' => false,
            'reportable' => false,
            'audited' => true,
            'comment' => '',
        ),

        'parent_name' => array(
            'name' => 'parent_name',
            'rname' => 'name',
            'id_name' => 'parent_id',
            'vname' => 'LBL_PARENT_DIGITAL_TASK_NAME',
            'type' => 'relate',
            'isnull' => 'true',
            'module' => 'DIGIT_TASK',
            'table' => 'digit_task',
            'massupdate' => false,
            'source' => 'non-db',
            'len' => 36,
            'link' => 'members',
            'unified_search' => true,
            'importable' => 'true', 
            'table' => 'digit_task',
            'fields_in_table' => array(
                'id',
                'name',
            ),
        ),

        'members' => array(
            'name' => 'members',
            'type' => 'link',
            'relationship' => 'member_digit_task',
            'module' => 'DIGIT_TASK',
            'bean_name' => 'DIGIT_TASK',
            'source' => 'non-db',
            'vname' => 'LBL_MEMBERS',
        ),

        //Реакция
        'response' => array(
            'required' => false,
            'name' => 'response',
            'vname' => 'LBL_RESPONSE',
            'type' => 'varchar',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => true,
            'reportable' => true,
            'unified_search' => true,
            'merge_filter' => 'disabled',
            'query_type' => '',
            'len' => '100',
            'size' => '20',
        ),
    ),
    'relationships' => array (
        'digit_task_users_spectator' =>
            array(
                'lhs_module' => 'DIGIT_TASK',
                'lhs_table' => 'digit_task',
                'lhs_key' => 'id',
                'rhs_module' => 'Users',
                'rhs_table' => 'users',
                'rhs_key' => 'id',
                'relationship_type' => 'many-to-many',
                'join_table' => 'user_ram',
                'join_key_lhs' => 'parent_id',
                'join_key_rhs' => 'user_id_c',
                'relationship_role_column' => 'parent_type',
                'relationship_role_column_value' => 'spectators',
            ),
        'spectators' =>
            array (
                'lhs_module' => 'DIGIT_TASK',
                'lhs_table' => 'digit_task',
                'lhs_key' => 'id',
                'rhs_module' => 'User_RAM',
                'rhs_table' => 'user_ram',
                'rhs_key' => 'parent_id',
                'relationship_type' => 'one-to-many',
                'relationship_role_column' => 'parent_type',
                'relationship_role_column_value' => 'spectators',
            ),
        'comments' =>
            array (
                'lhs_module' => 'DIGIT_TASK',
                'lhs_table' => 'digit_task',
                'lhs_key' => 'id',
                'rhs_module' => 'HRPAC_COMMENTS',
                'rhs_table' => 'hrpac_comments',
                'rhs_key' => 'parent_id',
                'relationship_type' => 'one-to-many',
                'relationship_role_column' => 'parent_type',
                'relationship_role_column_value' => 'DIGIT_TASK',
            ),
'assigned_task_assigned' =>
            array(
                'lhs_module' => 'DIGIT_TASK',
                'lhs_table' => 'digit_task',
                'lhs_key' => 'id',
                'rhs_module' => 'DIGIT_ASSIGNED_USER',
                'rhs_table' => 'digit_assigned_user',
                'rhs_key' => 'digit_task_id',
                'relationship_type' => 'one-to-many',
                'relationship_role_column' => 'type',
                'relationship_role_column_value' => 'assigned',
            ),
   'member_digit_task' =>
            array(
                'lhs_module' => 'DIGIT_TASK',
                'lhs_table' => 'digit_task',
                'lhs_key' => 'id',
                'rhs_module' => 'DIGIT_TASK',
                'rhs_table' => 'digit_task',
                'rhs_key' => 'parent_id',
                'relationship_type' => 'one-to-many'
            ),
        'assigned_task_info' =>
            array(
                'lhs_module' => 'DIGIT_TASK',
                'lhs_table' => 'digit_task',
                'lhs_key' => 'id',
                'rhs_module' => 'DIGIT_ASSIGNED_USER',
                'rhs_table' => 'digit_assigned_user',
                'rhs_key' => 'digit_task_id',
                'relationship_type' => 'one-to-many',
                'relationship_role_column' => 'type',
                'relationship_role_column_value' => 'info',
            ),
        'assigned_task_free_form' =>
            array(
                'lhs_module' => 'DIGIT_TASK',
                'lhs_table' => 'digit_task',
                'lhs_key' => 'id',
                'rhs_module' => 'DIGIT_ASSIGNED_USER',
                'rhs_table' => 'digit_assigned_user',
                'rhs_key' => 'digit_task_id',
                'relationship_type' => 'one-to-many',
                'relationship_role_column' => 'type',
                'relationship_role_column_value' => 'free_form',
            ),
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('DIGIT_TASK', 'DIGIT_TASK', array('basic','assignable','security_groups'));