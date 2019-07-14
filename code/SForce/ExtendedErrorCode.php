<?php

namespace SForce\Wsdl;

class ExtendedErrorCode
{
    const __default = 'ACTIONCALL_DUPLICATE_INPUT_PARAM';

    const ACTIONCALL_DUPLICATE_INPUT_PARAM = 'ACTIONCALL_DUPLICATE_INPUT_PARAM';

    const ACTIONCALL_DUPLICATE_OUTPUT_PARAM = 'ACTIONCALL_DUPLICATE_OUTPUT_PARAM';

    const ACTIONCALL_MISSING_NAME = 'ACTIONCALL_MISSING_NAME';

    const ACTIONCALL_MISSING_REQUIRED_PARAM = 'ACTIONCALL_MISSING_REQUIRED_PARAM';

    const ACTIONCALL_MISSING_REQUIRED_TYPE = 'ACTIONCALL_MISSING_REQUIRED_TYPE';

    const ACTIONCALL_NOT_FOUND_WITH_NAME_AND_TYPE = 'ACTIONCALL_NOT_FOUND_WITH_NAME_AND_TYPE';

    const ACTIONCALL_NOT_SUPPORTED_FOR_PROCESSTYPE = 'ACTIONCALL_NOT_SUPPORTED_FOR_PROCESSTYPE';

    const APEXCALLOUT_INPUT_DUPLICATE = 'APEXCALLOUT_INPUT_DUPLICATE';

    const APEXCALLOUT_INPUT_INCOMPATIBLE_DATATYPE = 'APEXCALLOUT_INPUT_INCOMPATIBLE_DATATYPE';

    const APEXCALLOUT_INVALID = 'APEXCALLOUT_INVALID';

    const APEXCALLOUT_MISSING_CLASSNAME = 'APEXCALLOUT_MISSING_CLASSNAME';

    const APEXCALLOUT_NOT_FOUND = 'APEXCALLOUT_NOT_FOUND';

    const APEXCALLOUT_OUTPUT_INCOMPATIBLE_DATATYPE = 'APEXCALLOUT_OUTPUT_INCOMPATIBLE_DATATYPE';

    const APEXCALLOUT_OUTPUT_NOT_FOUND = 'APEXCALLOUT_OUTPUT_NOT_FOUND';

    const APEXCALLOUT_REQUIRED_INPUT_MISSING = 'APEXCALLOUT_REQUIRED_INPUT_MISSING';

    const APEXCLASS_MISSING_INTERFACE = 'APEXCLASS_MISSING_INTERFACE';

    const APEX_CLASS_VARIABLE_NOT_FOUND = 'APEX_CLASS_VARIABLE_NOT_FOUND';

    const ASSIGNMENTITEM_ELEMENT_MISSING_DATATYPE = 'ASSIGNMENTITEM_ELEMENT_MISSING_DATATYPE';

    const ASSIGNMENTITEM_ELEMENT_NOT_SUPPORTED = 'ASSIGNMENTITEM_ELEMENT_NOT_SUPPORTED';

    const ASSIGNMENTITEM_FIELD_INVALID_DATATYPE = 'ASSIGNMENTITEM_FIELD_INVALID_DATATYPE';

    const ASSIGNMENTITEM_FIELD_INVALID_DATATYPE_WITH_ELEMENT = 'ASSIGNMENTITEM_FIELD_INVALID_DATATYPE_WITH_ELEMENT';

    const ASSIGNMENTITEM_INCOMPATIBLE_DATATYPES = 'ASSIGNMENTITEM_INCOMPATIBLE_DATATYPES';

    const ASSIGNMENTITEM_INVALID_ASSIGNTOREFERENCE = 'ASSIGNMENTITEM_INVALID_ASSIGNTOREFERENCE';

    const ASSIGNMENTITEM_INVALID_COLLECTION = 'ASSIGNMENTITEM_INVALID_COLLECTION';

    const ASSIGNMENTITEM_INVALID_DATATYPE_IN_ELEMENT = 'ASSIGNMENTITEM_INVALID_DATATYPE_IN_ELEMENT';

    const ASSIGNMENTITEM_INVALID_ELEMENTREFERENCE = 'ASSIGNMENTITEM_INVALID_ELEMENTREFERENCE';

    const ASSIGNMENTITEM_INVALID_MERGE_FIELD = 'ASSIGNMENTITEM_INVALID_MERGE_FIELD';

    const ASSIGNMENTITEM_INVALID_OPERATOR = 'ASSIGNMENTITEM_INVALID_OPERATOR';

    const ASSIGNMENTITEM_INVALID_REFERENCE = 'ASSIGNMENTITEM_INVALID_REFERENCE';

    const ASSIGNMENTITEM_INVALID_VALUE = 'ASSIGNMENTITEM_INVALID_VALUE';

    const ASSIGNMENTITEM_LEFT_DATATYPE_INVALID_FOR_OPERATOR = 'ASSIGNMENTITEM_LEFT_DATATYPE_INVALID_FOR_OPERATOR';

    const ASSIGNMENTITEM_MODIFIES_NONVARIABLE = 'ASSIGNMENTITEM_MODIFIES_NONVARIABLE';

    const ASSIGNMENTITEM_NONEXISTENT_REFERENCE = 'ASSIGNMENTITEM_NONEXISTENT_REFERENCE';

    const ASSIGNMENTITEM_REQUIRED = 'ASSIGNMENTITEM_REQUIRED';

    const ASSIGNMENTITEM_RIGHT_DATATYPE_INVALID_FOR_OPERATOR = 'ASSIGNMENTITEM_RIGHT_DATATYPE_INVALID_FOR_OPERATOR';

    const AUTOLAUNCHED_CHOICELOOKUP_NOT_SUPPORTED = 'AUTOLAUNCHED_CHOICELOOKUP_NOT_SUPPORTED';

    const AUTOLAUNCHED_CHOICE_NOT_SUPPORTED = 'AUTOLAUNCHED_CHOICE_NOT_SUPPORTED';

    const AUTOLAUNCHED_SCREEN_NOT_SUPPORTED = 'AUTOLAUNCHED_SCREEN_NOT_SUPPORTED';

    const AUTOLAUNCHED_STEP_NOT_SUPPORTED = 'AUTOLAUNCHED_STEP_NOT_SUPPORTED';

    const AUTOLAUNCHED_SUBFLOW_INCOMPATIBLE_FLOWTYPE = 'AUTOLAUNCHED_SUBFLOW_INCOMPATIBLE_FLOWTYPE';

    const AUTOLAUNCHED_WAIT_NOT_SUPPORTED = 'AUTOLAUNCHED_WAIT_NOT_SUPPORTED';

    const CHOICEFIELD_DEFAULT_CHOICE_NOT_FOUND = 'CHOICEFIELD_DEFAULT_CHOICE_NOT_FOUND';

    const CHOICEFIELD_MISSING_CHOICE = 'CHOICEFIELD_MISSING_CHOICE';

    const CHOICELOOKUP_DATATYPE_INCOMPATIBLE_WITH_CHOICEFIELD = 'CHOICELOOKUP_DATATYPE_INCOMPATIBLE_WITH_CHOICEFIELD';

    const CHOICE_DATATYPE_INCOMPATIBLE_WITH_CHOICEFIELD = 'CHOICE_DATATYPE_INCOMPATIBLE_WITH_CHOICEFIELD';

    const CHOICE_NOT_SUPPORTED_FOR_SCREENFIELDTYPE = 'CHOICE_NOT_SUPPORTED_FOR_SCREENFIELDTYPE';

    const CHOICE_USED_MULTIPLE_TIMES_IN_SAME_FIELD = 'CHOICE_USED_MULTIPLE_TIMES_IN_SAME_FIELD';

    const CONDITION_BUILDER_MISSING_FLOW_VARIABLE = 'CONDITION_BUILDER_MISSING_FLOW_VARIABLE';

    const CONDITION_BUILDER_MISSING_REQUIRED_PERMISSIONS = 'CONDITION_BUILDER_MISSING_REQUIRED_PERMISSIONS';

    const CONDITION_BUILDER_UNSUPPORTED_FLOW_VARIABLE = 'CONDITION_BUILDER_UNSUPPORTED_FLOW_VARIABLE';

    const CONDITION_DATATYPE_INCOMPATIBLE = 'CONDITION_DATATYPE_INCOMPATIBLE';

    const CONDITION_DATATYPE_INCOMPATIBLE_WITH_ELEMENT = 'CONDITION_DATATYPE_INCOMPATIBLE_WITH_ELEMENT';

    const CONDITION_ELEMENT_DATATYPES_INCOMPATIBLE = 'CONDITION_ELEMENT_DATATYPES_INCOMPATIBLE';

    const CONDITION_INVALID_LEFTOPERAND = 'CONDITION_INVALID_LEFTOPERAND';

    const CONDITION_INVALID_LEFT_ELEMENT = 'CONDITION_INVALID_LEFT_ELEMENT';

    const CONDITION_LOGIC_EXCEEDS_LIMIT = 'CONDITION_LOGIC_EXCEEDS_LIMIT';

    const CONDITION_LOGIC_INVALID = 'CONDITION_LOGIC_INVALID';

    const CONDITION_LOGIC_MISSING = 'CONDITION_LOGIC_MISSING';

    const CONDITION_MISSING_DATATYPE = 'CONDITION_MISSING_DATATYPE';

    const CONDITION_MISSING_OPERATOR = 'CONDITION_MISSING_OPERATOR';

    const CONDITION_REFERENCED_ELEMENT_NOT_FOUND = 'CONDITION_REFERENCED_ELEMENT_NOT_FOUND';

    const CONDITION_RIGHTOPERAND_NULL = 'CONDITION_RIGHTOPERAND_NULL';

    const CONNECTOR_MISSING_TARGET = 'CONNECTOR_MISSING_TARGET';

    const CONSTANT_INCLUDES_REFERENCES = 'CONSTANT_INCLUDES_REFERENCES';

    const CUSTOMEVENTS_NOT_ENABLED = 'CUSTOMEVENTS_NOT_ENABLED';

    const CUSTOMEVENT_MISSING_PROCESSMETADATAVALUES = 'CUSTOMEVENT_MISSING_PROCESSMETADATAVALUES';

    const CUSTOMEVENT_OBJECTTYPE_NOT_FOUND = 'CUSTOMEVENT_OBJECTTYPE_NOT_FOUND';

    const CUSTOMEVENT_OBJECTTYPE_NOT_SUPPORTED = 'CUSTOMEVENT_OBJECTTYPE_NOT_SUPPORTED';

    const CUSTOMEVENT_PROCESSMETADATAVALUES_MISSING_NAME = 'CUSTOMEVENT_PROCESSMETADATAVALUES_MISSING_NAME';

    const CUSTOMEVENT_PROCESSMETADATAVALUES_MORE_THAN_ONE_NAME = 'CUSTOMEVENT_PROCESSMETADATAVALUES_MORE_THAN_ONE_NAME';

    const DATATYPE_INVALID = 'DATATYPE_INVALID';

    const DATATYPE_MISSING = 'DATATYPE_MISSING';

    const DATA_TYPE_NOT_SUPPORTED_FOR_PROCESSTYPE = 'DATA_TYPE_NOT_SUPPORTED_FOR_PROCESSTYPE';

    const DECISION_DEFAULT_CONNECTOR_MISSING_LABEL = 'DECISION_DEFAULT_CONNECTOR_MISSING_LABEL';

    const DECISION_MISSING_OUTCOME = 'DECISION_MISSING_OUTCOME';

    const ELEMENT_CONNECTS_TO_SELF = 'ELEMENT_CONNECTS_TO_SELF';

    const ELEMENT_COORDINATES_INVALID = 'ELEMENT_COORDINATES_INVALID';

    const ELEMENT_INVALID_CONNECTOR = 'ELEMENT_INVALID_CONNECTOR';

    const ELEMENT_INVALID_REFERENCE = 'ELEMENT_INVALID_REFERENCE';

    const ELEMENT_MISSING_CONNECTOR = 'ELEMENT_MISSING_CONNECTOR';

    const ELEMENT_MISSING_LABEL = 'ELEMENT_MISSING_LABEL';

    const ELEMENT_MISSING_NAME = 'ELEMENT_MISSING_NAME';

    const ELEMENT_MISSING_REFERENCE = 'ELEMENT_MISSING_REFERENCE';

    const ELEMENT_MORE_THAN_ONE_FIELD = 'ELEMENT_MORE_THAN_ONE_FIELD';

    const ELEMENT_NAME_INVALID = 'ELEMENT_NAME_INVALID';

    const ELEMENT_NEVER_USED = 'ELEMENT_NEVER_USED';

    const ELEMENT_SCALE_SMALLER_THAN_DEFAULTVALUE = 'ELEMENT_SCALE_SMALLER_THAN_DEFAULTVALUE';

    const EXTERNAL_OBJECTS_NOT_SUPPORTED = 'EXTERNAL_OBJECTS_NOT_SUPPORTED';

    const EXTERNAL_OBJECT_FIELDS_NOT_SUPPORTED = 'EXTERNAL_OBJECT_FIELDS_NOT_SUPPORTED';

    const EX_AUTOLAUNCHED_SUBFLOW_INCOMPATIBLE_FLOWTYPE = 'EX_AUTOLAUNCHED_SUBFLOW_INCOMPATIBLE_FLOWTYPE';

    const FIELDASSIGNMENT_FIELD_INCOMPATIBLE_DATATYPE = 'FIELDASSIGNMENT_FIELD_INCOMPATIBLE_DATATYPE';

    const FIELDASSIGNMENT_INVALID_DATATYPE = 'FIELDASSIGNMENT_INVALID_DATATYPE';

    const FIELDASSIGNMENT_INVALID_ELEMENT = 'FIELDASSIGNMENT_INVALID_ELEMENT';

    const FIELDASSIGNMENT_INVALID_REFERENCE = 'FIELDASSIGNMENT_INVALID_REFERENCE';

    const FIELDASSIGNMENT_MULTIPLE_REFERENCES_SAME_FIELD = 'FIELDASSIGNMENT_MULTIPLE_REFERENCES_SAME_FIELD';

    const FIELDASSIGNMENT_PICKLISTFIELD_INCOMPATIBLE_DATATYPE = 'FIELDASSIGNMENT_PICKLISTFIELD_INCOMPATIBLE_DATATYPE';

    const FIELDASSIGNMENT_REFERENCED_ELEMENT_MISSING_DATATYPE = 'FIELDASSIGNMENT_REFERENCED_ELEMENT_MISSING_DATATYPE';

    const FIELDSERVICE_UNSUPPORTED_FIELD_TYPE = 'FIELDSERVICE_UNSUPPORTED_FIELD_TYPE';

    const FIELD_INVALID_VALUE = 'FIELD_INVALID_VALUE';

    const FIELD_NOT_FOUND = 'FIELD_NOT_FOUND';

    const FIELD_RELATIONSHIP_NOT_SUPPORTED = 'FIELD_RELATIONSHIP_NOT_SUPPORTED';

    const FLEXIPAGE_COMPONENT_ATTRIBUTE_EXPRESSION_EXCEPTION = 'FLEXIPAGE_COMPONENT_ATTRIBUTE_EXPRESSION_EXCEPTION';

    const FLEXIPAGE_COMPONENT_ATTRIBUTE_GENERIC_EXCEPTION = 'FLEXIPAGE_COMPONENT_ATTRIBUTE_GENERIC_EXCEPTION';

    const FLEXIPAGE_COMPONENT_ATTRIBUTE_MISSING_REQUIRED = 'FLEXIPAGE_COMPONENT_ATTRIBUTE_MISSING_REQUIRED';

    const FLEXIPAGE_COMPONENT_ATTRIBUTE_TOO_LONG = 'FLEXIPAGE_COMPONENT_ATTRIBUTE_TOO_LONG';

    const FLEXIPAGE_COMPONENT_CUSTOM_VALIDATION_EXCEPTION = 'FLEXIPAGE_COMPONENT_CUSTOM_VALIDATION_EXCEPTION';

    const FLEXIPAGE_COMPONENT_MAX_LIMIT_EXCEPTION = 'FLEXIPAGE_COMPONENT_MAX_LIMIT_EXCEPTION';

    const FLEXIPAGE_COMPONENT_RULE_VALIDATION_EXCEPTION = 'FLEXIPAGE_COMPONENT_RULE_VALIDATION_EXCEPTION';

    const FLEXIPAGE_PICKLIST_INVALID_VALUE_EXCEPTION = 'FLEXIPAGE_PICKLIST_INVALID_VALUE_EXCEPTION';

    const FLEXIPAGE_TEMPLATE_INVALID_SWITCH = 'FLEXIPAGE_TEMPLATE_INVALID_SWITCH';

    const FLOW_ELEMENT_SCALE_LESS_THAN_ZERO = 'FLOW_ELEMENT_SCALE_LESS_THAN_ZERO';

    const FLOW_INCLUDES_STEP = 'FLOW_INCLUDES_STEP';

    const FLOW_INTERVIEW_BULK_EXECUTION = 'FLOW_INTERVIEW_BULK_EXECUTION';

    const FLOW_INTERVIEW_HANDLED_ERROR = 'FLOW_INTERVIEW_HANDLED_ERROR';

    const FLOW_INTERVIEW_INPUT_VALIDATION = 'FLOW_INTERVIEW_INPUT_VALIDATION';

    const FLOW_INTERVIEW_INTERACTION_NOT_FOUND = 'FLOW_INTERVIEW_INTERACTION_NOT_FOUND';

    const FLOW_INTERVIEW_INVALID_CHOICE_USER_INPUT = 'FLOW_INTERVIEW_INVALID_CHOICE_USER_INPUT';

    const FLOW_INTERVIEW_INVALID_FIELD_VALUE = 'FLOW_INTERVIEW_INVALID_FIELD_VALUE';

    const FLOW_INTERVIEW_INVALID_START_REQUEST = 'FLOW_INTERVIEW_INVALID_START_REQUEST';

    const FLOW_INTERVIEW_LIMIT_EXCEEDED = 'FLOW_INTERVIEW_LIMIT_EXCEEDED';

    const FLOW_INTERVIEW_MISSING_CHOICE_FOR_REQUIRED_CHOICE_FIELD = 'FLOW_INTERVIEW_MISSING_CHOICE_FOR_REQUIRED_CHOICE_FIELD';

    const FLOW_INTERVIEW_MISSING_VALUE_FOR_REQUIRED_INPUT_FIELD = 'FLOW_INTERVIEW_MISSING_VALUE_FOR_REQUIRED_INPUT_FIELD';

    const FLOW_INTERVIEW_NAVIGATE = 'FLOW_INTERVIEW_NAVIGATE';

    const FLOW_INTERVIEW_RANGE_VALIDATION = 'FLOW_INTERVIEW_RANGE_VALIDATION';

    const FLOW_INTERVIEW_REGEX_VALIDATION = 'FLOW_INTERVIEW_REGEX_VALIDATION';

    const FLOW_INTERVIEW_RESUME_INTERVIEW = 'FLOW_INTERVIEW_RESUME_INTERVIEW';

    const FLOW_INTERVIEW_SAVE_RESULT = 'FLOW_INTERVIEW_SAVE_RESULT';

    const FLOW_INTERVIEW_SET_CHOICE_SELECTED = 'FLOW_INTERVIEW_SET_CHOICE_SELECTED';

    const FLOW_INTERVIEW_START_INTERVIEW = 'FLOW_INTERVIEW_START_INTERVIEW';

    const FLOW_INTERVIEW_TYPE_CONVERSION = 'FLOW_INTERVIEW_TYPE_CONVERSION';

    const FLOW_INVALID_NAME = 'FLOW_INVALID_NAME';

    const FLOW_NAME_USED_IN_OTHER_CLIENT = 'FLOW_NAME_USED_IN_OTHER_CLIENT';

    const FLOW_STAGE_INCLUDES_REFERENCES = 'FLOW_STAGE_INCLUDES_REFERENCES';

    const FLOW_STAGE_ORDER_DUPLICATE = 'FLOW_STAGE_ORDER_DUPLICATE';

    const FLOW_STAGE_ORDER_OUT_OF_RANGE = 'FLOW_STAGE_ORDER_OUT_OF_RANGE';

    const FORMULA_CMT_LIMIT_EXCEEDED = 'FORMULA_CMT_LIMIT_EXCEEDED';

    const FORMULA_EXPRESSION_INVALID = 'FORMULA_EXPRESSION_INVALID';

    const GLOBAL_VARIABLE_NOT_SUPPORTED_FOR_PROCESSTYPE = 'GLOBAL_VARIABLE_NOT_SUPPORTED_FOR_PROCESSTYPE';

    const INPUTPARAM_INCOMPATIBLE_DATATYPE = 'INPUTPARAM_INCOMPATIBLE_DATATYPE';

    const INPUTPARAM_INCOMPATIBLE_WITH_COLLECTION_VARIABLE = 'INPUTPARAM_INCOMPATIBLE_WITH_COLLECTION_VARIABLE';

    const INPUTPARAM_INCOMPATIBLE_WITH_NONCOLLECTION_VARIABLE = 'INPUTPARAM_INCOMPATIBLE_WITH_NONCOLLECTION_VARIABLE';

    const INPUTPARAM_MISMATCHED_OBJECTTYPE = 'INPUTPARAM_MISMATCHED_OBJECTTYPE';

    const INVALID_FLOW = 'INVALID_FLOW';

    const INVALID_FLOW_INTERVIEW = 'INVALID_FLOW_INTERVIEW';

    const INVALID_SURVEY_VARIABLE_NAME_OR_TYPE = 'INVALID_SURVEY_VARIABLE_NAME_OR_TYPE';

    const LOOP_ASSIGNNEXTVALUETO_MISMATCHED_DATATYPE = 'LOOP_ASSIGNNEXTVALUETO_MISMATCHED_DATATYPE';

    const LOOP_ASSIGNNEXTVALUETO_MISMATCHED_OBJECTTYPE = 'LOOP_ASSIGNNEXTVALUETO_MISMATCHED_OBJECTTYPE';

    const LOOP_ASSIGNNEXTVALUETO_MISSING = 'LOOP_ASSIGNNEXTVALUETO_MISSING';

    const LOOP_ASSIGNNEXTVALUETO_MISSING_VARIABLE = 'LOOP_ASSIGNNEXTVALUETO_MISSING_VARIABLE';

    const LOOP_ASSIGNNEXTVALUETO_REFERENCE_NOT_FOUND = 'LOOP_ASSIGNNEXTVALUETO_REFERENCE_NOT_FOUND';

    const LOOP_COLLECTION_ELEMENT_NOT_FOUND = 'LOOP_COLLECTION_ELEMENT_NOT_FOUND';

    const LOOP_COLLECTION_NOT_FOUND = 'LOOP_COLLECTION_NOT_FOUND';

    const LOOP_COLLECTION_NOT_SUPPORTED_FOR_FIELD = 'LOOP_COLLECTION_NOT_SUPPORTED_FOR_FIELD';

    const LOOP_MISSING_COLLECTION = 'LOOP_MISSING_COLLECTION';

    const OBJECTTYPE_INVALID = 'OBJECTTYPE_INVALID';

    const OBJECT_CANNOT_BE_CREATED = 'OBJECT_CANNOT_BE_CREATED';

    const OBJECT_CANNOT_BE_DELETED = 'OBJECT_CANNOT_BE_DELETED';

    const OBJECT_CANNOT_BE_QUERIED = 'OBJECT_CANNOT_BE_QUERIED';

    const OBJECT_CANNOT_BE_UPDATED = 'OBJECT_CANNOT_BE_UPDATED';

    const OBJECT_ENCRYPTED_FIELDS_NOT_SUPPORTED = 'OBJECT_ENCRYPTED_FIELDS_NOT_SUPPORTED';

    const OBJECT_NOT_FOUND = 'OBJECT_NOT_FOUND';

    const OUTPUTPARAM_ASSIGNTOREFERENCE_NOTFOUND = 'OUTPUTPARAM_ASSIGNTOREFERENCE_NOTFOUND';

    const OUTPUTPARAM_INCOMPATIBLE_DATATYPE = 'OUTPUTPARAM_INCOMPATIBLE_DATATYPE';

    const OUTPUTPARAM_MISMATCHED_OBJECTTYPE = 'OUTPUTPARAM_MISMATCHED_OBJECTTYPE';

    const OUTPUTPARAM_MISMATCHED_WITH_COLLECTION_VARIABLE = 'OUTPUTPARAM_MISMATCHED_WITH_COLLECTION_VARIABLE';

    const OUTPUTPARAM_MISSING_ASSIGNTOREFERENCE = 'OUTPUTPARAM_MISSING_ASSIGNTOREFERENCE';

    const OUTPUTPARAM_MISTMATCHED_WITH_NONCOLLECTION_VARIABLE = 'OUTPUTPARAM_MISTMATCHED_WITH_NONCOLLECTION_VARIABLE';

    const PARAM_DATATYPE_NOT_SUPPORTED = 'PARAM_DATATYPE_NOT_SUPPORTED';

    const PROCESSMETADATAVALUES_NOT_SUPPORTED_FOR_PROCESSTYPE = 'PROCESSMETADATAVALUES_NOT_SUPPORTED_FOR_PROCESSTYPE';

    const PROCESSMETADATAVALUE_NONEXISTENT_ELEMENT = 'PROCESSMETADATAVALUE_NONEXISTENT_ELEMENT';

    const PROCESSTYPE_COMPONENTTYPE_NOT_SUPPORTED = 'PROCESSTYPE_COMPONENTTYPE_NOT_SUPPORTED';

    const PROCESSTYPE_ELEMENT_CONFIG_NOT_SUPPORTED = 'PROCESSTYPE_ELEMENT_CONFIG_NOT_SUPPORTED';

    const PROCESSTYPE_ELEMENT_NOT_SUPPORTED = 'PROCESSTYPE_ELEMENT_NOT_SUPPORTED';

    const PROCESSTYPE_NOT_SUPPORTED = 'PROCESSTYPE_NOT_SUPPORTED';

    const PROCESSTYPE_SCREEN_FIELDTYPE_NOT_SUPPORTED = 'PROCESSTYPE_SCREEN_FIELDTYPE_NOT_SUPPORTED';

    const PROCESS_TYPE_INCOMPATIBLE = 'PROCESS_TYPE_INCOMPATIBLE';

    const RECOMMENDATION_STRATEGY_EXCEPTION = 'RECOMMENDATION_STRATEGY_EXCEPTION';

    const RECORDFILTER_ENCRYPTED_FIELDS_NOT_SUPPORTED = 'RECORDFILTER_ENCRYPTED_FIELDS_NOT_SUPPORTED';

    const RECORDFILTER_GEOLOCATION_FIELDS_NOT_SUPPORTED = 'RECORDFILTER_GEOLOCATION_FIELDS_NOT_SUPPORTED';

    const RECORDFILTER_INVALID_DATATYPE = 'RECORDFILTER_INVALID_DATATYPE';

    const RECORDFILTER_INVALID_ELEMENT = 'RECORDFILTER_INVALID_ELEMENT';

    const RECORDFILTER_INVALID_OPERATOR = 'RECORDFILTER_INVALID_OPERATOR';

    const RECORDFILTER_INVALID_REFERENCE = 'RECORDFILTER_INVALID_REFERENCE';

    const RECORDFILTER_MISSING_DATATYPE = 'RECORDFILTER_MISSING_DATATYPE';

    const RECORDFILTER_MULTIPLE_QUERIES_SAME_FIELD = 'RECORDFILTER_MULTIPLE_QUERIES_SAME_FIELD';

    const RECORDLOOKUP_IDASSIGNMENT_VARIABLE_INCOMPATIBLE_DATATYPE = 'RECORDLOOKUP_IDASSIGNMENT_VARIABLE_INCOMPATIBLE_DATATYPE';

    const RECORDLOOKUP_IDASSIGNMENT_VARIABLE_NOT_FOUND = 'RECORDLOOKUP_IDASSIGNMENT_VARIABLE_NOT_FOUND';

    const RECORDUPDATE_MISSING_FILTERS = 'RECORDUPDATE_MISSING_FILTERS';

    const REFERENCED_ELEMENT_NOT_FOUND = 'REFERENCED_ELEMENT_NOT_FOUND';

    const RULE_MISSING_CONDITION = 'RULE_MISSING_CONDITION';

    const SCREENFIELD_API_VERSION_NOT_SUPPORTED = 'SCREENFIELD_API_VERSION_NOT_SUPPORTED';

    const SCREENFIELD_BOOLEAN_ISREQUIRED_IS_FALSE = 'SCREENFIELD_BOOLEAN_ISREQUIRED_IS_FALSE';

    const SCREENFIELD_DEFAULTVALUE_NOT_SUPPORTED = 'SCREENFIELD_DEFAULTVALUE_NOT_SUPPORTED';

    const SCREENFIELD_EXTENSION_COMPONENT_NOT_GLOBAL = 'SCREENFIELD_EXTENSION_COMPONENT_NOT_GLOBAL';

    const SCREENFIELD_EXTENSION_DUPLICATE_INPUT_PARAM = 'SCREENFIELD_EXTENSION_DUPLICATE_INPUT_PARAM';

    const SCREENFIELD_EXTENSION_DUPLICATE_OUTPUT_PARAM = 'SCREENFIELD_EXTENSION_DUPLICATE_OUTPUT_PARAM';

    const SCREENFIELD_EXTENSION_IMPLEMENTATION_INVALID = 'SCREENFIELD_EXTENSION_IMPLEMENTATION_INVALID';

    const SCREENFIELD_EXTENSION_INPUT_ATTRIBUTE_INVALID = 'SCREENFIELD_EXTENSION_INPUT_ATTRIBUTE_INVALID';

    const SCREENFIELD_EXTENSION_NAME_INVALID = 'SCREENFIELD_EXTENSION_NAME_INVALID';

    const SCREENFIELD_EXTENSION_NAME_MISSING = 'SCREENFIELD_EXTENSION_NAME_MISSING';

    const SCREENFIELD_EXTENSION_NAME_NOT_SUPPORTED = 'SCREENFIELD_EXTENSION_NAME_NOT_SUPPORTED';

    const SCREENFIELD_EXTENSION_OUTPUT_ATTRIBUTE_INVALID = 'SCREENFIELD_EXTENSION_OUTPUT_ATTRIBUTE_INVALID';

    const SCREENFIELD_EXTENSION_REQUIRED_INPUT_MISSING = 'SCREENFIELD_EXTENSION_REQUIRED_INPUT_MISSING';

    const SCREENFIELD_INPUTS_NOT_SUPPORTED = 'SCREENFIELD_INPUTS_NOT_SUPPORTED';

    const SCREENFIELD_INVALID_DATATYPE = 'SCREENFIELD_INVALID_DATATYPE';

    const SCREENFIELD_MULTISELECTCHOICE_SEMICOLON_NOT_SUPPORTED = 'SCREENFIELD_MULTISELECTCHOICE_SEMICOLON_NOT_SUPPORTED';

    const SCREENFIELD_OUTPUTS_NOT_SUPPORTED = 'SCREENFIELD_OUTPUTS_NOT_SUPPORTED';

    const SCREENFIELD_TYPE_NOT_SUPPORTED = 'SCREENFIELD_TYPE_NOT_SUPPORTED';

    const SCREENFIELD_USERINPUT_NOT_SUPPORTED_FOR_CHOICETYPE = 'SCREENFIELD_USERINPUT_NOT_SUPPORTED_FOR_CHOICETYPE';

    const SCREENFIELD_VALIDATIONRULE_NOT_SUPPORTED = 'SCREENFIELD_VALIDATIONRULE_NOT_SUPPORTED';

    const SCREENRULE_ACTION_INVALID_ATTRIBUTE = 'SCREENRULE_ACTION_INVALID_ATTRIBUTE';

    const SCREENRULE_ACTION_INVALID_ATTRIBUTE_FOR_API_VERSION = 'SCREENRULE_ACTION_INVALID_ATTRIBUTE_FOR_API_VERSION';

    const SCREENRULE_ACTION_INVALID_VALUE = 'SCREENRULE_ACTION_INVALID_VALUE';

    const SCREENRULE_ACTION_MISSING_ATTRIBUTE = 'SCREENRULE_ACTION_MISSING_ATTRIBUTE';

    const SCREENRULE_ACTION_MISSING_FIELDREFERENCE = 'SCREENRULE_ACTION_MISSING_FIELDREFERENCE';

    const SCREENRULE_ACTION_MISSING_VALUE = 'SCREENRULE_ACTION_MISSING_VALUE';

    const SCREENRULE_ATTRIBUTE_NOT_SUPPORTED_FOR_SCREENFIELD = 'SCREENRULE_ATTRIBUTE_NOT_SUPPORTED_FOR_SCREENFIELD';

    const SCREENRULE_FIELD_NOT_FOUND_ON_SCREEN = 'SCREENRULE_FIELD_NOT_FOUND_ON_SCREEN';

    const SCREENRULE_MISSING_ACTION = 'SCREENRULE_MISSING_ACTION';

    const SCREENRULE_NOT_SUPPORTED_IN_ORG = 'SCREENRULE_NOT_SUPPORTED_IN_ORG';

    const SCREENRULE_SCREENFIELD_NOT_VISIBLE = 'SCREENRULE_SCREENFIELD_NOT_VISIBLE';

    const SCREENRULE_VISIBILITY_NOT_SUPPORTED_IN_ORG = 'SCREENRULE_VISIBILITY_NOT_SUPPORTED_IN_ORG';

    const SCREEN_ALLOWBACK_ALLOWFINISH_BOTH_FALSE = 'SCREEN_ALLOWBACK_ALLOWFINISH_BOTH_FALSE';

    const SCREEN_CONTAINS_LIGHTNING_COMPONENT = 'SCREEN_CONTAINS_LIGHTNING_COMPONENT';

    const SCREEN_MISSING_FOOTER_AND_LIGHTNING_COMPONENT = 'SCREEN_MISSING_FOOTER_AND_LIGHTNING_COMPONENT';

    const SCREEN_MISSING_LABEL = 'SCREEN_MISSING_LABEL';

    const SCREEN_MULTISELECTFIELD_DOESNT_SUPPORT_CHOICE_WITH_USERINPUT = 'SCREEN_MULTISELECTFIELD_DOESNT_SUPPORT_CHOICE_WITH_USERINPUT';

    const SCREEN_PAUSEDTEXT_NOT_SHOWN_WHEN_ALLOWPAUSE_IS_FALSE = 'SCREEN_PAUSEDTEXT_NOT_SHOWN_WHEN_ALLOWPAUSE_IS_FALSE';

    const SETTING_FIELD_MAKES_OTHER_FIELD_REQUIRED = 'SETTING_FIELD_MAKES_OTHER_FIELD_REQUIRED';

    const SETTING_FIELD_MAKES_OTHER_FIELD_UNSUPPORTED = 'SETTING_FIELD_MAKES_OTHER_FIELD_UNSUPPORTED';

    const SOBJECT_ELEMENT_INCOMPATIBLE_DATATYPE = 'SOBJECT_ELEMENT_INCOMPATIBLE_DATATYPE';

    const SOBJECT_ELEMENT_MISMATCHED_OBJECTTYPE = 'SOBJECT_ELEMENT_MISMATCHED_OBJECTTYPE';

    const SORT_ENCRYPTED_FIELDS_NOT_SUPPORTED = 'SORT_ENCRYPTED_FIELDS_NOT_SUPPORTED';

    const SORT_FIELD_MISSING = 'SORT_FIELD_MISSING';

    const SORT_FIELD_NOT_SUPPORTED = 'SORT_FIELD_NOT_SUPPORTED';

    const SORT_GEOLOCATION_FIELDS_NOT_SUPPORTED = 'SORT_GEOLOCATION_FIELDS_NOT_SUPPORTED';

    const SORT_LIMIT_INVALID = 'SORT_LIMIT_INVALID';

    const SORT_ORDER_MISSING = 'SORT_ORDER_MISSING';

    const SPECIFIC_FIELD_VALUE_MAKES_OTHER_FIELD_REQUIRED = 'SPECIFIC_FIELD_VALUE_MAKES_OTHER_FIELD_REQUIRED';

    const STAGE_NAME_NOT_FULLY_QUALIFIED = 'STAGE_NAME_NOT_FULLY_QUALIFIED';

    const START_ELEMENT_MISSING = 'START_ELEMENT_MISSING';

    const SUBFLOW_DESKTOP_DESIGNER_FLOWS_NOT_SUPPORTED = 'SUBFLOW_DESKTOP_DESIGNER_FLOWS_NOT_SUPPORTED';

    const SUBFLOW_INPUT_ELEMENT_INCOMPATIBLE_DATATYPES = 'SUBFLOW_INPUT_ELEMENT_INCOMPATIBLE_DATATYPES';

    const SUBFLOW_INPUT_INVALID_VALUE = 'SUBFLOW_INPUT_INVALID_VALUE';

    const SUBFLOW_INPUT_MISMATCHED_COLLECTIONTYPES = 'SUBFLOW_INPUT_MISMATCHED_COLLECTIONTYPES';

    const SUBFLOW_INPUT_MISMATCHED_OBJECTS = 'SUBFLOW_INPUT_MISMATCHED_OBJECTS';

    const SUBFLOW_INPUT_MISSING_NAME = 'SUBFLOW_INPUT_MISSING_NAME';

    const SUBFLOW_INPUT_MULTIPLE_ASSIGNMENTS_TO_ONE_VARIABLE = 'SUBFLOW_INPUT_MULTIPLE_ASSIGNMENTS_TO_ONE_VARIABLE';

    const SUBFLOW_INPUT_REFERENCES_FIELD_ON_SOBJECT_VARIABLE = 'SUBFLOW_INPUT_REFERENCES_FIELD_ON_SOBJECT_VARIABLE';

    const SUBFLOW_INPUT_VALUE_INCOMPATIBLE_DATATYPES = 'SUBFLOW_INPUT_VALUE_INCOMPATIBLE_DATATYPES';

    const SUBFLOW_INPUT_VARIABLE_NOT_FOUND_IN_MASTERFLOW = 'SUBFLOW_INPUT_VARIABLE_NOT_FOUND_IN_MASTERFLOW';

    const SUBFLOW_INPUT_VARIABLE_NOT_FOUND_IN_REFERENCEDFLOW = 'SUBFLOW_INPUT_VARIABLE_NOT_FOUND_IN_REFERENCEDFLOW';

    const SUBFLOW_INPUT_VARIABLE_NO_INPUT_ACCESS = 'SUBFLOW_INPUT_VARIABLE_NO_INPUT_ACCESS';

    const SUBFLOW_INVALID_NAME = 'SUBFLOW_INVALID_NAME';

    const SUBFLOW_INVALID_REFERENCE = 'SUBFLOW_INVALID_REFERENCE';

    const SUBFLOW_MASTER_FLOW_TYPE_NOT_AUTOLAUNCHED = 'SUBFLOW_MASTER_FLOW_TYPE_NOT_AUTOLAUNCHED';

    const SUBFLOW_MISSING_NAME = 'SUBFLOW_MISSING_NAME';

    const SUBFLOW_NO_ACTIVE_VERSION = 'SUBFLOW_NO_ACTIVE_VERSION';

    const SUBFLOW_OUTPUT_INCOMPATIBLE_DATATYPES = 'SUBFLOW_OUTPUT_INCOMPATIBLE_DATATYPES';

    const SUBFLOW_OUTPUT_MISMATCHED_COLLECTIONTYPES = 'SUBFLOW_OUTPUT_MISMATCHED_COLLECTIONTYPES';

    const SUBFLOW_OUTPUT_MISMATCHED_OBJECTS = 'SUBFLOW_OUTPUT_MISMATCHED_OBJECTS';

    const SUBFLOW_OUTPUT_MISSING_ASSIGNTOREFERENCE = 'SUBFLOW_OUTPUT_MISSING_ASSIGNTOREFERENCE';

    const SUBFLOW_OUTPUT_MISSING_NAME = 'SUBFLOW_OUTPUT_MISSING_NAME';

    const SUBFLOW_OUTPUT_MULTIPLE_ASSIGNMENTS_TO_ONE_VARIABLE = 'SUBFLOW_OUTPUT_MULTIPLE_ASSIGNMENTS_TO_ONE_VARIABLE';

    const SUBFLOW_OUTPUT_REFERENCES_FIELD_ON_SOBJECT_VARIABLE = 'SUBFLOW_OUTPUT_REFERENCES_FIELD_ON_SOBJECT_VARIABLE';

    const SUBFLOW_OUTPUT_TARGET_DOES_NOT_EXIST_IN_MASTER_FLOW = 'SUBFLOW_OUTPUT_TARGET_DOES_NOT_EXIST_IN_MASTER_FLOW';

    const SUBFLOW_OUTPUT_VARIABLE_NOT_FOUND_IN_MASTERFLOW = 'SUBFLOW_OUTPUT_VARIABLE_NOT_FOUND_IN_MASTERFLOW';

    const SUBFLOW_OUTPUT_VARIABLE_NOT_FOUND_IN_REFERENCEDFLOW = 'SUBFLOW_OUTPUT_VARIABLE_NOT_FOUND_IN_REFERENCEDFLOW';

    const SUBFLOW_OUTPUT_VARIABLE_NO_OUTPUT_ACCESS = 'SUBFLOW_OUTPUT_VARIABLE_NO_OUTPUT_ACCESS';

    const SUBFLOW_PROCESSTYPE_NOT_SUPPORTED = 'SUBFLOW_PROCESSTYPE_NOT_SUPPORTED';

    const SUBFLOW_PROCESS_TYPE_INCOMPATIBLE = 'SUBFLOW_PROCESS_TYPE_INCOMPATIBLE';

    const SUBFLOW_REFERENCES_MASTERFLOW = 'SUBFLOW_REFERENCES_MASTERFLOW';

    const SURVEY_ADVANCED_CONDITION_LOGIC_NOT_SUPPORTED = 'SURVEY_ADVANCED_CONDITION_LOGIC_NOT_SUPPORTED';

    const SURVEY_CHOICE_NOT_REFERENCED_BY_A_QUESTION = 'SURVEY_CHOICE_NOT_REFERENCED_BY_A_QUESTION';

    const SURVEY_CHOICE_REFERENCED_BY_MULTIPLE_QUESTIONS = 'SURVEY_CHOICE_REFERENCED_BY_MULTIPLE_QUESTIONS';

    const SURVEY_ELEMENT_NEVER_REACHED = 'SURVEY_ELEMENT_NEVER_REACHED';

    const SURVEY_INACTIVE_SUBFLOWS = 'SURVEY_INACTIVE_SUBFLOWS';

    const SURVEY_MISSING_QUESTION_OR_SUBFLOW = 'SURVEY_MISSING_QUESTION_OR_SUBFLOW';

    const SURVEY_MISSING_REQUIRED_VARIABLES = 'SURVEY_MISSING_REQUIRED_VARIABLES';

    const SURVEY_MULTIPLE_SCREENS_CANNOT_CONNECT_TO_SAME_DECISION = 'SURVEY_MULTIPLE_SCREENS_CANNOT_CONNECT_TO_SAME_DECISION';

    const SURVEY_NESTED_SUBFLOWS = 'SURVEY_NESTED_SUBFLOWS';

    const SURVEY_NONSURVEY_SUBFLOWS = 'SURVEY_NONSURVEY_SUBFLOWS';

    const SURVEY_RULE_INVALID_RIGHT_OPERAND = 'SURVEY_RULE_INVALID_RIGHT_OPERAND';

    const SURVEY_SCREENFIELD_TYPE_NOT_SUPPORTED_FOR_QUESTION = 'SURVEY_SCREENFIELD_TYPE_NOT_SUPPORTED_FOR_QUESTION';

    const SURVEY_START_ELEMENT_INVALID = 'SURVEY_START_ELEMENT_INVALID';

    const SURVEY_VARIABLE_ACCESS_INVALID = 'SURVEY_VARIABLE_ACCESS_INVALID';

    const UNEXPECTED_ERROR = 'UNEXPECTED_ERROR';

    const VALUE_CHAR_LIMIT_EXCEEDED = 'VALUE_CHAR_LIMIT_EXCEEDED';

    const VARIABLE_FIELD_NOT_SUPPORTED_FOR_DATATYPE = 'VARIABLE_FIELD_NOT_SUPPORTED_FOR_DATATYPE';

    const VARIABLE_FIELD_NOT_SUPPORTED_FOR_DATATYPE_AND_COLLECTION = 'VARIABLE_FIELD_NOT_SUPPORTED_FOR_DATATYPE_AND_COLLECTION';

    const VARIABLE_FIELD_REQUIRED_FOR_DATATYPE = 'VARIABLE_FIELD_REQUIRED_FOR_DATATYPE';

    const VARIABLE_SCALE_EXCEEDS_LIMIT = 'VARIABLE_SCALE_EXCEEDS_LIMIT';

    const VARIABLE_SCALE_NEGATIVE_INTEGER = 'VARIABLE_SCALE_NEGATIVE_INTEGER';

    const VARIABLE_SCALE_NULL = 'VARIABLE_SCALE_NULL';

    const VISIBILITY_RULE_NOT_SUPPORTED = 'VISIBILITY_RULE_NOT_SUPPORTED';

    const WAITEVENT_DEFAULT_CONNECTOR_MISSING_LABEL = 'WAITEVENT_DEFAULT_CONNECTOR_MISSING_LABEL';

    const WAITEVENT_DUPLICATE_INPUT_PARAM = 'WAITEVENT_DUPLICATE_INPUT_PARAM';

    const WAITEVENT_INPUT_NOT_SUPPORTED_FOR_EVENTTYPE = 'WAITEVENT_INPUT_NOT_SUPPORTED_FOR_EVENTTYPE';

    const WAITEVENT_INPUT_REQUIRES_LITERAL_VALUE = 'WAITEVENT_INPUT_REQUIRES_LITERAL_VALUE';

    const WAITEVENT_INVALID_CONDITION_LOGIC = 'WAITEVENT_INVALID_CONDITION_LOGIC';

    const WAITEVENT_MISSING = 'WAITEVENT_MISSING';

    const WAITEVENT_MISSING_CONNECTOR = 'WAITEVENT_MISSING_CONNECTOR';

    const WAITEVENT_MISSING_EVENTTYPE = 'WAITEVENT_MISSING_EVENTTYPE';

    const WAITEVENT_OBJECT_NOT_SUPPORTED_FOR_EVENTTYPE = 'WAITEVENT_OBJECT_NOT_SUPPORTED_FOR_EVENTTYPE';

    const WAITEVENT_OUTPUT_NOT_SUPPORTED_FOR_EVENTTYPE = 'WAITEVENT_OUTPUT_NOT_SUPPORTED_FOR_EVENTTYPE';

    const WAITEVENT_RELATIVEALARM_INVALID_DATETIME_FIELD = 'WAITEVENT_RELATIVEALARM_INVALID_DATETIME_FIELD';

    const WAITEVENT_RELATIVEALARM_INVALID_FIELD = 'WAITEVENT_RELATIVEALARM_INVALID_FIELD';

    const WAITEVENT_RELATIVEALARM_INVALID_OBJECTTYPE = 'WAITEVENT_RELATIVEALARM_INVALID_OBJECTTYPE';

    const WAITEVENT_RELATIVEALARM_INVALID_OFFSETNUMBER = 'WAITEVENT_RELATIVEALARM_INVALID_OFFSETNUMBER';

    const WAITEVENT_RELATIVEALARM_INVALID_OFFSETUNIT = 'WAITEVENT_RELATIVEALARM_INVALID_OFFSETUNIT';

    const WAITEVENT_REQUIRED_INPUT_MISSING = 'WAITEVENT_REQUIRED_INPUT_MISSING';

    const WAITEVENT_TYPE_INVALID_OR_NOT_SUPPORTED = 'WAITEVENT_TYPE_INVALID_OR_NOT_SUPPORTED';

    const WORKFLOW_MISSING_PROCESSMETADATAVALUES = 'WORKFLOW_MISSING_PROCESSMETADATAVALUES';

    const WORKFLOW_OBJECTTYPE_NOT_FOUND = 'WORKFLOW_OBJECTTYPE_NOT_FOUND';

    const WORKFLOW_OBJECTTYPE_NOT_SUPPORTED = 'WORKFLOW_OBJECTTYPE_NOT_SUPPORTED';

    const WORKFLOW_OBJECTVARIABLE_AND_OLDOBJECTVARIABLE_REFERENCE_SAME_SOBJECT_VARIABLE = 'WORKFLOW_OBJECTVARIABLE_AND_OLDOBJECTVARIABLE_REFERENCE_SAME_SOBJECT_VARIABLE';

    const WORKFLOW_OBJECTVARIABLE_DOESNT_SUPPORT_INPUT = 'WORKFLOW_OBJECTVARIABLE_DOESNT_SUPPORT_INPUT';

    const WORKFLOW_OLDOBJECTVARIABLE_DOESNT_SUPPORT_INPUT = 'WORKFLOW_OLDOBJECTVARIABLE_DOESNT_SUPPORT_INPUT';

    const WORKFLOW_PROCESSMETADATAVALUES_MORE_THAN_ONE_NAME = 'WORKFLOW_PROCESSMETADATAVALUES_MORE_THAN_ONE_NAME';

    const WORKFLOW_PROCESS_METADATAVALUES_MISSING_NAME = 'WORKFLOW_PROCESS_METADATAVALUES_MISSING_NAME';

    const WORKFLOW_RECURSIVECOUNTVARIABLE_DOESNT_SUPPORT_INPUT = 'WORKFLOW_RECURSIVECOUNTVARIABLE_DOESNT_SUPPORT_INPUT';

    const WORKFLOW_TRIGGERTYPE_INVALID_VALUE = 'WORKFLOW_TRIGGERTYPE_INVALID_VALUE';
}
