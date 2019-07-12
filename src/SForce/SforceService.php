<?php

namespace SForce\Wsdl;


/**
 * Sforce SOAP API
 */
class SforceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'sObject' => 'SForce\\Wsdl\\sObject',
      'address' => 'SForce\\Wsdl\\address',
      'location' => 'SForce\\Wsdl\\location',
      'QueryResult' => 'SForce\\Wsdl\\QueryResult',
      'SearchResult' => 'SForce\\Wsdl\\SearchResult',
      'SearchRecord' => 'SForce\\Wsdl\\SearchRecord',
      'SearchRecordMetadata' => 'SForce\\Wsdl\\SearchRecordMetadata',
      'SearchSnippet' => 'SForce\\Wsdl\\SearchSnippet',
      'SearchResultsMetadata' => 'SForce\\Wsdl\\SearchResultsMetadata',
      'LabelsSearchMetadata' => 'SForce\\Wsdl\\LabelsSearchMetadata',
      'EntitySearchMetadata' => 'SForce\\Wsdl\\EntitySearchMetadata',
      'FieldLevelSearchMetadata' => 'SForce\\Wsdl\\FieldLevelSearchMetadata',
      'EntitySpellCorrectionMetadata' => 'SForce\\Wsdl\\EntitySpellCorrectionMetadata',
      'EntitySearchPromotionMetadata' => 'SForce\\Wsdl\\EntitySearchPromotionMetadata',
      'EntityIntentQueryMetadata' => 'SForce\\Wsdl\\EntityIntentQueryMetadata',
      'RelationshipReferenceTo' => 'SForce\\Wsdl\\RelationshipReferenceTo',
      'RecordTypesSupported' => 'SForce\\Wsdl\\RecordTypesSupported',
      'JunctionIdListNames' => 'SForce\\Wsdl\\JunctionIdListNames',
      'SearchLayoutButtonsDisplayed' => 'SForce\\Wsdl\\SearchLayoutButtonsDisplayed',
      'SearchLayoutButton' => 'SForce\\Wsdl\\SearchLayoutButton',
      'SearchLayoutFieldsDisplayed' => 'SForce\\Wsdl\\SearchLayoutFieldsDisplayed',
      'SearchLayoutField' => 'SForce\\Wsdl\\SearchLayoutField',
      'NameValuePair' => 'SForce\\Wsdl\\NameValuePair',
      'NameObjectValuePair' => 'SForce\\Wsdl\\NameObjectValuePair',
      'GetUpdatedResult' => 'SForce\\Wsdl\\GetUpdatedResult',
      'GetDeletedResult' => 'SForce\\Wsdl\\GetDeletedResult',
      'DeletedRecord' => 'SForce\\Wsdl\\DeletedRecord',
      'GetServerTimestampResult' => 'SForce\\Wsdl\\GetServerTimestampResult',
      'InvalidateSessionsResult' => 'SForce\\Wsdl\\InvalidateSessionsResult',
      'SetPasswordResult' => 'SForce\\Wsdl\\SetPasswordResult',
      'ChangeOwnPasswordResult' => 'SForce\\Wsdl\\ChangeOwnPasswordResult',
      'ResetPasswordResult' => 'SForce\\Wsdl\\ResetPasswordResult',
      'GetUserInfoResult' => 'SForce\\Wsdl\\GetUserInfoResult',
      'LoginResult' => 'SForce\\Wsdl\\LoginResult',
      'ExtendedErrorDetails' => 'SForce\\Wsdl\\ExtendedErrorDetails',
      'Error' => 'SForce\\Wsdl\\Error',
      'SendEmailError' => 'SForce\\Wsdl\\SendEmailError',
      'SaveResult' => 'SForce\\Wsdl\\SaveResult',
      'RenderEmailTemplateError' => 'SForce\\Wsdl\\RenderEmailTemplateError',
      'UpsertResult' => 'SForce\\Wsdl\\UpsertResult',
      'PerformQuickActionResult' => 'SForce\\Wsdl\\PerformQuickActionResult',
      'QuickActionTemplateResult' => 'SForce\\Wsdl\\QuickActionTemplateResult',
      'MergeRequest' => 'SForce\\Wsdl\\MergeRequest',
      'MergeResult' => 'SForce\\Wsdl\\MergeResult',
      'ProcessRequest' => 'SForce\\Wsdl\\ProcessRequest',
      'ProcessSubmitRequest' => 'SForce\\Wsdl\\ProcessSubmitRequest',
      'ProcessWorkitemRequest' => 'SForce\\Wsdl\\ProcessWorkitemRequest',
      'PerformQuickActionRequest' => 'SForce\\Wsdl\\PerformQuickActionRequest',
      'DescribeAvailableQuickActionResult' => 'SForce\\Wsdl\\DescribeAvailableQuickActionResult',
      'DescribeQuickActionResult' => 'SForce\\Wsdl\\DescribeQuickActionResult',
      'DescribeQuickActionDefaultValue' => 'SForce\\Wsdl\\DescribeQuickActionDefaultValue',
      'DescribeVisualForceResult' => 'SForce\\Wsdl\\DescribeVisualForceResult',
      'ProcessResult' => 'SForce\\Wsdl\\ProcessResult',
      'DeleteResult' => 'SForce\\Wsdl\\DeleteResult',
      'UndeleteResult' => 'SForce\\Wsdl\\UndeleteResult',
      'DeleteByExampleResult' => 'SForce\\Wsdl\\DeleteByExampleResult',
      'EmptyRecycleBinResult' => 'SForce\\Wsdl\\EmptyRecycleBinResult',
      'LeadConvert' => 'SForce\\Wsdl\\LeadConvert',
      'LeadConvertResult' => 'SForce\\Wsdl\\LeadConvertResult',
      'DescribeSObjectResult' => 'SForce\\Wsdl\\DescribeSObjectResult',
      'DescribeGlobalSObjectResult' => 'SForce\\Wsdl\\DescribeGlobalSObjectResult',
      'ChildRelationship' => 'SForce\\Wsdl\\ChildRelationship',
      'DescribeGlobalResult' => 'SForce\\Wsdl\\DescribeGlobalResult',
      'DescribeGlobalTheme' => 'SForce\\Wsdl\\DescribeGlobalTheme',
      'ScopeInfo' => 'SForce\\Wsdl\\ScopeInfo',
      'StringList' => 'SForce\\Wsdl\\StringList',
      'ChangeEventHeader' => 'SForce\\Wsdl\\ChangeEventHeader',
      'FilteredLookupInfo' => 'SForce\\Wsdl\\FilteredLookupInfo',
      'Field' => 'SForce\\Wsdl\\Field',
      'PicklistEntry' => 'SForce\\Wsdl\\PicklistEntry',
      'DescribeDataCategoryGroupResult' => 'SForce\\Wsdl\\DescribeDataCategoryGroupResult',
      'DescribeDataCategoryGroupStructureResult' => 'SForce\\Wsdl\\DescribeDataCategoryGroupStructureResult',
      'DataCategoryGroupSobjectTypePair' => 'SForce\\Wsdl\\DataCategoryGroupSobjectTypePair',
      'DataCategory' => 'SForce\\Wsdl\\DataCategory',
      'DescribeDataCategoryMappingResult' => 'SForce\\Wsdl\\DescribeDataCategoryMappingResult',
      'KnowledgeSettings' => 'SForce\\Wsdl\\KnowledgeSettings',
      'KnowledgeLanguageItem' => 'SForce\\Wsdl\\KnowledgeLanguageItem',
      'FieldDiff' => 'SForce\\Wsdl\\FieldDiff',
      'AdditionalInformationMap' => 'SForce\\Wsdl\\AdditionalInformationMap',
      'MatchRecord' => 'SForce\\Wsdl\\MatchRecord',
      'MatchResult' => 'SForce\\Wsdl\\MatchResult',
      'DuplicateResult' => 'SForce\\Wsdl\\DuplicateResult',
      'DuplicateError' => 'SForce\\Wsdl\\DuplicateError',
      'DescribeNounResult' => 'SForce\\Wsdl\\DescribeNounResult',
      'NameCaseValue' => 'SForce\\Wsdl\\NameCaseValue',
      'findDuplicates' => 'SForce\\Wsdl\\findDuplicates',
      'findDuplicatesByIds' => 'SForce\\Wsdl\\findDuplicatesByIds',
      'findDuplicatesByIdsResponse' => 'SForce\\Wsdl\\findDuplicatesByIdsResponse',
      'findDuplicatesResponse' => 'SForce\\Wsdl\\findDuplicatesResponse',
      'FindDuplicatesResult' => 'SForce\\Wsdl\\FindDuplicatesResult',
      'DescribeAppMenuResult' => 'SForce\\Wsdl\\DescribeAppMenuResult',
      'DescribeAppMenuItem' => 'SForce\\Wsdl\\DescribeAppMenuItem',
      'DescribeThemeResult' => 'SForce\\Wsdl\\DescribeThemeResult',
      'DescribeThemeItem' => 'SForce\\Wsdl\\DescribeThemeItem',
      'DescribeSoftphoneLayoutResult' => 'SForce\\Wsdl\\DescribeSoftphoneLayoutResult',
      'DescribeSoftphoneLayoutCallType' => 'SForce\\Wsdl\\DescribeSoftphoneLayoutCallType',
      'DescribeSoftphoneScreenPopOption' => 'SForce\\Wsdl\\DescribeSoftphoneScreenPopOption',
      'DescribeSoftphoneLayoutInfoField' => 'SForce\\Wsdl\\DescribeSoftphoneLayoutInfoField',
      'DescribeSoftphoneLayoutSection' => 'SForce\\Wsdl\\DescribeSoftphoneLayoutSection',
      'DescribeSoftphoneLayoutItem' => 'SForce\\Wsdl\\DescribeSoftphoneLayoutItem',
      'DescribeCompactLayoutsResult' => 'SForce\\Wsdl\\DescribeCompactLayoutsResult',
      'DescribeCompactLayout' => 'SForce\\Wsdl\\DescribeCompactLayout',
      'RecordTypeCompactLayoutMapping' => 'SForce\\Wsdl\\RecordTypeCompactLayoutMapping',
      'DescribePathAssistantsResult' => 'SForce\\Wsdl\\DescribePathAssistantsResult',
      'DescribePathAssistant' => 'SForce\\Wsdl\\DescribePathAssistant',
      'DescribePathAssistantStep' => 'SForce\\Wsdl\\DescribePathAssistantStep',
      'DescribePathAssistantField' => 'SForce\\Wsdl\\DescribePathAssistantField',
      'DescribeApprovalLayoutResult' => 'SForce\\Wsdl\\DescribeApprovalLayoutResult',
      'DescribeApprovalLayout' => 'SForce\\Wsdl\\DescribeApprovalLayout',
      'DescribeLayoutResult' => 'SForce\\Wsdl\\DescribeLayoutResult',
      'DescribeLayout' => 'SForce\\Wsdl\\DescribeLayout',
      'DescribeQuickActionListResult' => 'SForce\\Wsdl\\DescribeQuickActionListResult',
      'DescribeQuickActionListItemResult' => 'SForce\\Wsdl\\DescribeQuickActionListItemResult',
      'DescribeLayoutFeedView' => 'SForce\\Wsdl\\DescribeLayoutFeedView',
      'DescribeLayoutFeedFilter' => 'SForce\\Wsdl\\DescribeLayoutFeedFilter',
      'DescribeLayoutSaveOption' => 'SForce\\Wsdl\\DescribeLayoutSaveOption',
      'DescribeLayoutSection' => 'SForce\\Wsdl\\DescribeLayoutSection',
      'DescribeLayoutButtonSection' => 'SForce\\Wsdl\\DescribeLayoutButtonSection',
      'DescribeLayoutRow' => 'SForce\\Wsdl\\DescribeLayoutRow',
      'DescribeLayoutItem' => 'SForce\\Wsdl\\DescribeLayoutItem',
      'DescribeLayoutButton' => 'SForce\\Wsdl\\DescribeLayoutButton',
      'DescribeLayoutComponent' => 'SForce\\Wsdl\\DescribeLayoutComponent',
      'FieldComponent' => 'SForce\\Wsdl\\FieldComponent',
      'FieldLayoutComponent' => 'SForce\\Wsdl\\FieldLayoutComponent',
      'VisualforcePage' => 'SForce\\Wsdl\\VisualforcePage',
      'Canvas' => 'SForce\\Wsdl\\Canvas',
      'ReportChartComponent' => 'SForce\\Wsdl\\ReportChartComponent',
      'AnalyticsCloudComponent' => 'SForce\\Wsdl\\AnalyticsCloudComponent',
      'CustomLinkComponent' => 'SForce\\Wsdl\\CustomLinkComponent',
      'NamedLayoutInfo' => 'SForce\\Wsdl\\NamedLayoutInfo',
      'RecordTypeInfo' => 'SForce\\Wsdl\\RecordTypeInfo',
      'RecordTypeMapping' => 'SForce\\Wsdl\\RecordTypeMapping',
      'PicklistForRecordType' => 'SForce\\Wsdl\\PicklistForRecordType',
      'RelatedContent' => 'SForce\\Wsdl\\RelatedContent',
      'DescribeRelatedContentItem' => 'SForce\\Wsdl\\DescribeRelatedContentItem',
      'RelatedList' => 'SForce\\Wsdl\\RelatedList',
      'RelatedListColumn' => 'SForce\\Wsdl\\RelatedListColumn',
      'RelatedListSort' => 'SForce\\Wsdl\\RelatedListSort',
      'EmailFileAttachment' => 'SForce\\Wsdl\\EmailFileAttachment',
      'Email' => 'SForce\\Wsdl\\Email',
      'MassEmailMessage' => 'SForce\\Wsdl\\MassEmailMessage',
      'SingleEmailMessage' => 'SForce\\Wsdl\\SingleEmailMessage',
      'SendEmailResult' => 'SForce\\Wsdl\\SendEmailResult',
      'ListViewColumn' => 'SForce\\Wsdl\\ListViewColumn',
      'ListViewOrderBy' => 'SForce\\Wsdl\\ListViewOrderBy',
      'DescribeSoqlListView' => 'SForce\\Wsdl\\DescribeSoqlListView',
      'DescribeSoqlListViewsRequest' => 'SForce\\Wsdl\\DescribeSoqlListViewsRequest',
      'DescribeSoqlListViewParams' => 'SForce\\Wsdl\\DescribeSoqlListViewParams',
      'DescribeSoqlListViewResult' => 'SForce\\Wsdl\\DescribeSoqlListViewResult',
      'ExecuteListViewRequest' => 'SForce\\Wsdl\\ExecuteListViewRequest',
      'ExecuteListViewResult' => 'SForce\\Wsdl\\ExecuteListViewResult',
      'ListViewRecord' => 'SForce\\Wsdl\\ListViewRecord',
      'ListViewRecordColumn' => 'SForce\\Wsdl\\ListViewRecordColumn',
      'SoqlWhereCondition' => 'SForce\\Wsdl\\SoqlWhereCondition',
      'SoqlCondition' => 'SForce\\Wsdl\\SoqlCondition',
      'SoqlNotCondition' => 'SForce\\Wsdl\\SoqlNotCondition',
      'SoqlConditionGroup' => 'SForce\\Wsdl\\SoqlConditionGroup',
      'SoqlSubQueryCondition' => 'SForce\\Wsdl\\SoqlSubQueryCondition',
      'DescribeSearchLayoutResult' => 'SForce\\Wsdl\\DescribeSearchLayoutResult',
      'DescribeColumn' => 'SForce\\Wsdl\\DescribeColumn',
      'DescribeSearchScopeOrderResult' => 'SForce\\Wsdl\\DescribeSearchScopeOrderResult',
      'DescribeSearchableEntityResult' => 'SForce\\Wsdl\\DescribeSearchableEntityResult',
      'DescribeTabSetResult' => 'SForce\\Wsdl\\DescribeTabSetResult',
      'DescribeTab' => 'SForce\\Wsdl\\DescribeTab',
      'DescribeColor' => 'SForce\\Wsdl\\DescribeColor',
      'DescribeIcon' => 'SForce\\Wsdl\\DescribeIcon',
      'ActionOverride' => 'SForce\\Wsdl\\ActionOverride',
      'login' => 'SForce\\Wsdl\\login',
      'loginResponse' => 'SForce\\Wsdl\\loginResponse',
      'describeSObject' => 'SForce\\Wsdl\\describeSObject',
      'describeSObjectResponse' => 'SForce\\Wsdl\\describeSObjectResponse',
      'describeSObjects' => 'SForce\\Wsdl\\describeSObjects',
      'describeSObjectsResponse' => 'SForce\\Wsdl\\describeSObjectsResponse',
      'describeGlobal' => 'SForce\\Wsdl\\describeGlobal',
      'describeGlobalResponse' => 'SForce\\Wsdl\\describeGlobalResponse',
      'describeGlobalThemeDouble' => 'SForce\\Wsdl\\describeGlobalThemeDouble',
      'describeGlobalThemeResponse' => 'SForce\\Wsdl\\describeGlobalThemeResponse',
      'describeTheme' => 'SForce\\Wsdl\\describeTheme',
      'describeThemeResponse' => 'SForce\\Wsdl\\describeThemeResponse',
      'describeDataCategoryGroups' => 'SForce\\Wsdl\\describeDataCategoryGroups',
      'describeDataCategoryGroupsResponse' => 'SForce\\Wsdl\\describeDataCategoryGroupsResponse',
      'describeDataCategoryGroupStructures' => 'SForce\\Wsdl\\describeDataCategoryGroupStructures',
      'describeDataCategoryGroupStructuresResponse' => 'SForce\\Wsdl\\describeDataCategoryGroupStructuresResponse',
      'describeDataCategoryMappings' => 'SForce\\Wsdl\\describeDataCategoryMappings',
      'describeDataCategoryMappingsResponse' => 'SForce\\Wsdl\\describeDataCategoryMappingsResponse',
      'describeKnowledgeSettings' => 'SForce\\Wsdl\\describeKnowledgeSettings',
      'describeKnowledgeSettingsResponse' => 'SForce\\Wsdl\\describeKnowledgeSettingsResponse',
      'describeAppMenu' => 'SForce\\Wsdl\\describeAppMenu',
      'describeAppMenuResponse' => 'SForce\\Wsdl\\describeAppMenuResponse',
      'describeLayoutDouble' => 'SForce\\Wsdl\\describeLayoutDouble',
      'describeLayoutResponse' => 'SForce\\Wsdl\\describeLayoutResponse',
      'describeCompactLayouts' => 'SForce\\Wsdl\\describeCompactLayouts',
      'describeCompactLayoutsResponse' => 'SForce\\Wsdl\\describeCompactLayoutsResponse',
      'describePrimaryCompactLayouts' => 'SForce\\Wsdl\\describePrimaryCompactLayouts',
      'describePrimaryCompactLayoutsResponse' => 'SForce\\Wsdl\\describePrimaryCompactLayoutsResponse',
      'describePathAssistants' => 'SForce\\Wsdl\\describePathAssistants',
      'describePathAssistantsResponse' => 'SForce\\Wsdl\\describePathAssistantsResponse',
      'describeApprovalLayoutDouble' => 'SForce\\Wsdl\\describeApprovalLayoutDouble',
      'describeApprovalLayoutResponse' => 'SForce\\Wsdl\\describeApprovalLayoutResponse',
      'describeSoftphoneLayout' => 'SForce\\Wsdl\\describeSoftphoneLayout',
      'describeSoftphoneLayoutResponse' => 'SForce\\Wsdl\\describeSoftphoneLayoutResponse',
      'describeSoqlListViews' => 'SForce\\Wsdl\\describeSoqlListViews',
      'describeSoqlListViewsResponse' => 'SForce\\Wsdl\\describeSoqlListViewsResponse',
      'executeListView' => 'SForce\\Wsdl\\executeListView',
      'executeListViewResponse' => 'SForce\\Wsdl\\executeListViewResponse',
      'describeSObjectListViews' => 'SForce\\Wsdl\\describeSObjectListViews',
      'describeSObjectListViewsResponse' => 'SForce\\Wsdl\\describeSObjectListViewsResponse',
      'describeSearchLayouts' => 'SForce\\Wsdl\\describeSearchLayouts',
      'describeSearchLayoutsResponse' => 'SForce\\Wsdl\\describeSearchLayoutsResponse',
      'describeSearchScopeOrder' => 'SForce\\Wsdl\\describeSearchScopeOrder',
      'describeSearchScopeOrderResponse' => 'SForce\\Wsdl\\describeSearchScopeOrderResponse',
      'describeSearchableEntities' => 'SForce\\Wsdl\\describeSearchableEntities',
      'describeSearchableEntitiesResponse' => 'SForce\\Wsdl\\describeSearchableEntitiesResponse',
      'describeTabs' => 'SForce\\Wsdl\\describeTabs',
      'describeTabsResponse' => 'SForce\\Wsdl\\describeTabsResponse',
      'describeAllTabs' => 'SForce\\Wsdl\\describeAllTabs',
      'describeAllTabsResponse' => 'SForce\\Wsdl\\describeAllTabsResponse',
      'describeNouns' => 'SForce\\Wsdl\\describeNouns',
      'describeNounsResponse' => 'SForce\\Wsdl\\describeNounsResponse',
      'create' => 'SForce\\Wsdl\\create',
      'createResponse' => 'SForce\\Wsdl\\createResponse',
      'sendEmail' => 'SForce\\Wsdl\\sendEmail',
      'sendEmailResponse' => 'SForce\\Wsdl\\sendEmailResponse',
      'RenderEmailTemplateRequest' => 'SForce\\Wsdl\\RenderEmailTemplateRequest',
      'RenderEmailTemplateBodyResult' => 'SForce\\Wsdl\\RenderEmailTemplateBodyResult',
      'RenderEmailTemplateResult' => 'SForce\\Wsdl\\RenderEmailTemplateResult',
      'renderEmailTemplate' => 'SForce\\Wsdl\\renderEmailTemplate',
      'renderEmailTemplateResponse' => 'SForce\\Wsdl\\renderEmailTemplateResponse',
      'RenderStoredEmailTemplateRequest' => 'SForce\\Wsdl\\RenderStoredEmailTemplateRequest',
      'RenderStoredEmailTemplateResult' => 'SForce\\Wsdl\\RenderStoredEmailTemplateResult',
      'renderStoredEmailTemplate' => 'SForce\\Wsdl\\renderStoredEmailTemplate',
      'renderStoredEmailTemplateResponse' => 'SForce\\Wsdl\\renderStoredEmailTemplateResponse',
      'sendEmailMessage' => 'SForce\\Wsdl\\sendEmailMessage',
      'sendEmailMessageResponse' => 'SForce\\Wsdl\\sendEmailMessageResponse',
      'update' => 'SForce\\Wsdl\\update',
      'updateResponse' => 'SForce\\Wsdl\\updateResponse',
      'upsert' => 'SForce\\Wsdl\\upsert',
      'upsertResponse' => 'SForce\\Wsdl\\upsertResponse',
      'merge' => 'SForce\\Wsdl\\merge',
      'mergeResponse' => 'SForce\\Wsdl\\mergeResponse',
      'delete' => 'SForce\\Wsdl\\delete',
      'deleteResponse' => 'SForce\\Wsdl\\deleteResponse',
      'deleteByExample' => 'SForce\\Wsdl\\deleteByExample',
      'deleteByExampleResponse' => 'SForce\\Wsdl\\deleteByExampleResponse',
      'undelete' => 'SForce\\Wsdl\\undelete',
      'undeleteResponse' => 'SForce\\Wsdl\\undeleteResponse',
      'emptyRecycleBin' => 'SForce\\Wsdl\\emptyRecycleBin',
      'emptyRecycleBinResponse' => 'SForce\\Wsdl\\emptyRecycleBinResponse',
      'process' => 'SForce\\Wsdl\\process',
      'processResponse' => 'SForce\\Wsdl\\processResponse',
      'performQuickActions' => 'SForce\\Wsdl\\performQuickActions',
      'performQuickActionsResponse' => 'SForce\\Wsdl\\performQuickActionsResponse',
      'retrieveMassQuickActionTemplates' => 'SForce\\Wsdl\\retrieveMassQuickActionTemplates',
      'retrieveMassQuickActionTemplatesResponse' => 'SForce\\Wsdl\\retrieveMassQuickActionTemplatesResponse',
      'retrieveQuickActionTemplates' => 'SForce\\Wsdl\\retrieveQuickActionTemplates',
      'retrieveQuickActionTemplatesResponse' => 'SForce\\Wsdl\\retrieveQuickActionTemplatesResponse',
      'describeQuickActions' => 'SForce\\Wsdl\\describeQuickActions',
      'describeQuickActionsResponse' => 'SForce\\Wsdl\\describeQuickActionsResponse',
      'describeQuickActionsForRecordType' => 'SForce\\Wsdl\\describeQuickActionsForRecordType',
      'describeQuickActionsForRecordTypeResponse' => 'SForce\\Wsdl\\describeQuickActionsForRecordTypeResponse',
      'describeAvailableQuickActions' => 'SForce\\Wsdl\\describeAvailableQuickActions',
      'describeAvailableQuickActionsResponse' => 'SForce\\Wsdl\\describeAvailableQuickActionsResponse',
      'describeVisualForce' => 'SForce\\Wsdl\\describeVisualForce',
      'describeVisualForceResponse' => 'SForce\\Wsdl\\describeVisualForceResponse',
      'retrieve' => 'SForce\\Wsdl\\retrieve',
      'retrieveResponse' => 'SForce\\Wsdl\\retrieveResponse',
      'convertLead' => 'SForce\\Wsdl\\convertLead',
      'convertLeadResponse' => 'SForce\\Wsdl\\convertLeadResponse',
      'getUpdated' => 'SForce\\Wsdl\\getUpdated',
      'getUpdatedResponse' => 'SForce\\Wsdl\\getUpdatedResponse',
      'getDeleted' => 'SForce\\Wsdl\\getDeleted',
      'getDeletedResponse' => 'SForce\\Wsdl\\getDeletedResponse',
      'logout' => 'SForce\\Wsdl\\logout',
      'logoutResponse' => 'SForce\\Wsdl\\logoutResponse',
      'invalidateSessions' => 'SForce\\Wsdl\\invalidateSessions',
      'invalidateSessionsResponse' => 'SForce\\Wsdl\\invalidateSessionsResponse',
      'query' => 'SForce\\Wsdl\\query',
      'queryResponse' => 'SForce\\Wsdl\\queryResponse',
      'queryAll' => 'SForce\\Wsdl\\queryAll',
      'queryAllResponse' => 'SForce\\Wsdl\\queryAllResponse',
      'queryMore' => 'SForce\\Wsdl\\queryMore',
      'queryMoreResponse' => 'SForce\\Wsdl\\queryMoreResponse',
      'search' => 'SForce\\Wsdl\\search',
      'searchResponse' => 'SForce\\Wsdl\\searchResponse',
      'getServerTimestamp' => 'SForce\\Wsdl\\getServerTimestamp',
      'getServerTimestampResponse' => 'SForce\\Wsdl\\getServerTimestampResponse',
      'setPassword' => 'SForce\\Wsdl\\setPassword',
      'setPasswordResponse' => 'SForce\\Wsdl\\setPasswordResponse',
      'changeOwnPassword' => 'SForce\\Wsdl\\changeOwnPassword',
      'changeOwnPasswordResponse' => 'SForce\\Wsdl\\changeOwnPasswordResponse',
      'resetPassword' => 'SForce\\Wsdl\\resetPassword',
      'resetPasswordResponse' => 'SForce\\Wsdl\\resetPasswordResponse',
      'getUserInfo' => 'SForce\\Wsdl\\getUserInfo',
      'getUserInfoResponse' => 'SForce\\Wsdl\\getUserInfoResponse',
      'SessionHeader' => 'SForce\\Wsdl\\SessionHeader',
      'LoginScopeHeader' => 'SForce\\Wsdl\\LoginScopeHeader',
      'CallOptions' => 'SForce\\Wsdl\\CallOptions',
      'QueryOptions' => 'SForce\\Wsdl\\QueryOptions',
      'DebuggingHeader' => 'SForce\\Wsdl\\DebuggingHeader',
      'LogInfo' => 'SForce\\Wsdl\\LogInfo',
      'DebuggingInfo' => 'SForce\\Wsdl\\DebuggingInfo',
      'PackageVersion' => 'SForce\\Wsdl\\PackageVersion',
      'PackageVersionHeader' => 'SForce\\Wsdl\\PackageVersionHeader',
      'AllowFieldTruncationHeader' => 'SForce\\Wsdl\\AllowFieldTruncationHeader',
      'DisableFeedTrackingHeader' => 'SForce\\Wsdl\\DisableFeedTrackingHeader',
      'StreamingEnabledHeader' => 'SForce\\Wsdl\\StreamingEnabledHeader',
      'AllOrNoneHeader' => 'SForce\\Wsdl\\AllOrNoneHeader',
      'DuplicateRuleHeader' => 'SForce\\Wsdl\\DuplicateRuleHeader',
      'LimitInfo' => 'SForce\\Wsdl\\LimitInfo',
      'LimitInfoHeader' => 'SForce\\Wsdl\\LimitInfoHeader',
      'MruHeader' => 'SForce\\Wsdl\\MruHeader',
      'EmailHeader' => 'SForce\\Wsdl\\EmailHeader',
      'AssignmentRuleHeader' => 'SForce\\Wsdl\\AssignmentRuleHeader',
      'UserTerritoryDeleteHeader' => 'SForce\\Wsdl\\UserTerritoryDeleteHeader',
      'LocaleOptions' => 'SForce\\Wsdl\\LocaleOptions',
      'OwnerChangeOption' => 'SForce\\Wsdl\\OwnerChangeOption',
      'OwnerChangeOptions' => 'SForce\\Wsdl\\OwnerChangeOptions',
      'ApiFault' => 'SForce\\Wsdl\\ApiFault',
      'ApiQueryFault' => 'SForce\\Wsdl\\ApiQueryFault',
      'LoginFault' => 'SForce\\Wsdl\\LoginFault',
      'InvalidQueryLocatorFault' => 'SForce\\Wsdl\\InvalidQueryLocatorFault',
      'InvalidNewPasswordFault' => 'SForce\\Wsdl\\InvalidNewPasswordFault',
      'InvalidOldPasswordFault' => 'SForce\\Wsdl\\InvalidOldPasswordFault',
      'InvalidIdFault' => 'SForce\\Wsdl\\InvalidIdFault',
      'UnexpectedErrorFault' => 'SForce\\Wsdl\\UnexpectedErrorFault',
      'InvalidFieldFault' => 'SForce\\Wsdl\\InvalidFieldFault',
      'InvalidSObjectFault' => 'SForce\\Wsdl\\InvalidSObjectFault',
      'MalformedQueryFault' => 'SForce\\Wsdl\\MalformedQueryFault',
      'MalformedSearchFault' => 'SForce\\Wsdl\\MalformedSearchFault',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        user_error('no wsdl supplied');
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Login to the Salesforce.com SOAP Api
     *
     * @param login $parameters
     * @return loginResponse
     */
    public function login(login $parameters)
    {
      return $this->__soapCall('login', array($parameters));
    }

    /**
     * Describe an sObject
     *
     * @param describeSObject $parameters
     * @return describeSObjectResponse
     */
    public function describeSObject(describeSObject $parameters)
    {
      return $this->__soapCall('describeSObject', array($parameters));
    }

    /**
     * Describe multiple sObjects (upto 100)
     *
     * @param describeSObjects $parameters
     * @return describeSObjectsResponse
     */
    public function describeSObjects(describeSObjects $parameters)
    {
      return $this->__soapCall('describeSObjects', array($parameters));
    }

    /**
     * Describe the Global state
     *
     * @param describeGlobal $parameters
     * @return describeGlobalResponse
     */
    public function describeGlobal(describeGlobal $parameters)
    {
      return $this->__soapCall('describeGlobal', array($parameters));
    }

    /**
     * Describe all the data category groups available for a given set of types
     *
     * @param describeDataCategoryGroups $parameters
     * @return describeDataCategoryGroupsResponse
     */
    public function describeDataCategoryGroups(describeDataCategoryGroups $parameters)
    {
      return $this->__soapCall('describeDataCategoryGroups', array($parameters));
    }

    /**
     * Describe the data category group structures for a given set of pair of types and data category group name
     *
     * @param describeDataCategoryGroupStructures $parameters
     * @return describeDataCategoryGroupStructuresResponse
     */
    public function describeDataCategoryGroupStructures(describeDataCategoryGroupStructures $parameters)
    {
      return $this->__soapCall('describeDataCategoryGroupStructures', array($parameters));
    }

    /**
     * Describe your Data Category Mappings.
     *
     * @param describeDataCategoryMappings $parameters
     * @return describeDataCategoryMappingsResponse
     */
    public function describeDataCategoryMappings(describeDataCategoryMappings $parameters)
    {
      return $this->__soapCall('describeDataCategoryMappings', array($parameters));
    }

    /**
     * Describes your Knowledge settings, such as if knowledgeEnabled is on or off, its default language and supported languages
     *
     * @param describeKnowledgeSettings $parameters
     * @return describeKnowledgeSettingsResponse
     */
    public function describeKnowledgeSettings(describeKnowledgeSettings $parameters)
    {
      return $this->__soapCall('describeKnowledgeSettings', array($parameters));
    }

    /**
     * Describe the items in an AppMenu
     *
     * @param describeAppMenu $parameters
     * @return describeAppMenuResponse
     */
    public function describeAppMenu(describeAppMenu $parameters)
    {
      return $this->__soapCall('describeAppMenu', array($parameters));
    }

    /**
     * Describe Gloal and Themes
     *
     * @param describeGlobalThemeDouble $parameters
     * @return describeGlobalThemeResponse
     */
    public function describeGlobalThemeDouble(describeGlobalThemeDouble $parameters)
    {
      return $this->__soapCall('describeGlobalThemeDouble', array($parameters));
    }

    /**
     * Describe Themes
     *
     * @param describeTheme $parameters
     * @return describeThemeResponse
     */
    public function describeTheme(describeTheme $parameters)
    {
      return $this->__soapCall('describeTheme', array($parameters));
    }

    /**
     * Describe the layout of the given sObject or the given actionable global page.
     *
     * @param describeLayoutDouble $parameters
     * @return describeLayoutResponse
     */
    public function describeLayoutDouble(describeLayoutDouble $parameters)
    {
      return $this->__soapCall('describeLayoutDouble', array($parameters));
    }

    /**
     * Describe the layout of the SoftPhone
     *
     * @param describeSoftphoneLayout $parameters
     * @return describeSoftphoneLayoutResponse
     */
    public function describeSoftphoneLayout(describeSoftphoneLayout $parameters)
    {
      return $this->__soapCall('describeSoftphoneLayout', array($parameters));
    }

    /**
     * Describe the search view of an sObject
     *
     * @param describeSearchLayouts $parameters
     * @return describeSearchLayoutsResponse
     */
    public function describeSearchLayouts(describeSearchLayouts $parameters)
    {
      return $this->__soapCall('describeSearchLayouts', array($parameters));
    }

    /**
     * Describe a list of entity names that reflects the current user's searchable entities
     *
     * @param describeSearchableEntities $parameters
     * @return describeSearchableEntitiesResponse
     */
    public function describeSearchableEntities(describeSearchableEntities $parameters)
    {
      return $this->__soapCall('describeSearchableEntities', array($parameters));
    }

    /**
     * Describe a list of objects representing the order and scope of objects on a users search result page
     *
     * @param describeSearchScopeOrder $parameters
     * @return describeSearchScopeOrderResponse
     */
    public function describeSearchScopeOrder(describeSearchScopeOrder $parameters)
    {
      return $this->__soapCall('describeSearchScopeOrder', array($parameters));
    }

    /**
     * Describe the compact layouts of the given sObject
     *
     * @param describeCompactLayouts $parameters
     * @return describeCompactLayoutsResponse
     */
    public function describeCompactLayouts(describeCompactLayouts $parameters)
    {
      return $this->__soapCall('describeCompactLayouts', array($parameters));
    }

    /**
     * Describe the Path Assistants for the given sObject and optionally RecordTypes
     *
     * @param describePathAssistants $parameters
     * @return describePathAssistantsResponse
     */
    public function describePathAssistants(describePathAssistants $parameters)
    {
      return $this->__soapCall('describePathAssistants', array($parameters));
    }

    /**
     * Describe the approval layouts of the given sObject
     *
     * @param describeApprovalLayoutDouble $parameters
     * @return describeApprovalLayoutResponse
     */
    public function describeApprovalLayoutDouble(describeApprovalLayoutDouble $parameters)
    {
      return $this->__soapCall('describeApprovalLayoutDouble', array($parameters));
    }

    /**
     * Describe the ListViews as SOQL metadata for the generation of SOQL.
     *
     * @param describeSoqlListViews $parameters
     * @return describeSoqlListViewsResponse
     */
    public function describeSoqlListViews(describeSoqlListViews $parameters)
    {
      return $this->__soapCall('describeSoqlListViews', array($parameters));
    }

    /**
     * Execute the specified list view and return the presentation-ready results.
     *
     * @param executeListView $parameters
     * @return executeListViewResponse
     */
    public function executeListView(executeListView $parameters)
    {
      return $this->__soapCall('executeListView', array($parameters));
    }

    /**
     * Describe the ListViews of a SObject as SOQL metadata for the generation of SOQL.
     *
     * @param describeSObjectListViews $parameters
     * @return describeSObjectListViewsResponse
     */
    public function describeSObjectListViews(describeSObjectListViews $parameters)
    {
      return $this->__soapCall('describeSObjectListViews', array($parameters));
    }

    /**
     * Describe the tabs that appear on a users page
     *
     * @param describeTabs $parameters
     * @return describeTabsResponse
     */
    public function describeTabs(describeTabs $parameters)
    {
      return $this->__soapCall('describeTabs', array($parameters));
    }

    /**
     * Describe all tabs available to a user
     *
     * @param describeAllTabs $parameters
     * @return describeAllTabsResponse
     */
    public function describeAllTabs(describeAllTabs $parameters)
    {
      return $this->__soapCall('describeAllTabs', array($parameters));
    }

    /**
     * Describe the primary compact layouts for the sObjects requested
     *
     * @param describePrimaryCompactLayouts $parameters
     * @return describePrimaryCompactLayoutsResponse
     */
    public function describePrimaryCompactLayouts(describePrimaryCompactLayouts $parameters)
    {
      return $this->__soapCall('describePrimaryCompactLayouts', array($parameters));
    }

    /**
     * Create a set of new sObjects
     *
     * @param create $parameters
     * @return createResponse
     */
    public function create(create $parameters)
    {
      return $this->__soapCall('create', array($parameters));
    }

    /**
     * Update a set of sObjects
     *
     * @param update $parameters
     * @return updateResponse
     */
    public function update(update $parameters)
    {
      return $this->__soapCall('update', array($parameters));
    }

    /**
     * Update or insert a set of sObjects based on object id
     *
     * @param upsert $parameters
     * @return upsertResponse
     */
    public function upsert(upsert $parameters)
    {
      return $this->__soapCall('upsert', array($parameters));
    }

    /**
     * Merge and update a set of sObjects based on object id
     *
     * @param merge $parameters
     * @return mergeResponse
     */
    public function merge(merge $parameters)
    {
      return $this->__soapCall('merge', array($parameters));
    }

    /**
     * Delete a set of sObjects
     *
     * @param delete $parameters
     * @return deleteResponse
     */
    public function delete(delete $parameters)
    {
      return $this->__soapCall('delete', array($parameters));
    }

    /**
     * Undelete a set of sObjects
     *
     * @param undelete $parameters
     * @return undeleteResponse
     */
    public function undelete(undelete $parameters)
    {
      return $this->__soapCall('undelete', array($parameters));
    }

    /**
     * Empty a set of sObjects from the recycle bin
     *
     * @param emptyRecycleBin $parameters
     * @return emptyRecycleBinResponse
     */
    public function emptyRecycleBin(emptyRecycleBin $parameters)
    {
      return $this->__soapCall('emptyRecycleBin', array($parameters));
    }

    /**
     * Get a set of sObjects
     *
     * @param retrieve $parameters
     * @return retrieveResponse
     */
    public function retrieve(retrieve $parameters)
    {
      return $this->__soapCall('retrieve', array($parameters));
    }

    /**
     * Submit an entity to a workflow process or process a workitem
     *
     * @param process $parameters
     * @return processResponse
     */
    public function process(process $parameters)
    {
      return $this->__soapCall('process', array($parameters));
    }

    /**
     * convert a set of leads
     *
     * @param convertLead $parameters
     * @return convertLeadResponse
     */
    public function convertLead(convertLead $parameters)
    {
      return $this->__soapCall('convertLead', array($parameters));
    }

    /**
     * Logout the current user, invalidating the current session.
     *
     * @param logout $parameters
     * @return logoutResponse
     */
    public function logout(logout $parameters)
    {
      return $this->__soapCall('logout', array($parameters));
    }

    /**
     * Logs out and invalidates session ids
     *
     * @param invalidateSessions $parameters
     * @return invalidateSessionsResponse
     */
    public function invalidateSessions(invalidateSessions $parameters)
    {
      return $this->__soapCall('invalidateSessions', array($parameters));
    }

    /**
     * Get the IDs for deleted sObjects
     *
     * @param getDeleted $parameters
     * @return getDeletedResponse
     */
    public function getDeleted(getDeleted $parameters)
    {
      return $this->__soapCall('getDeleted', array($parameters));
    }

    /**
     * Get the IDs for updated sObjects
     *
     * @param getUpdated $parameters
     * @return getUpdatedResponse
     */
    public function getUpdated(getUpdated $parameters)
    {
      return $this->__soapCall('getUpdated', array($parameters));
    }

    /**
     * Create a Query Cursor
     *
     * @param query $parameters
     * @return queryResponse
     */
    public function query(query $parameters)
    {
      return $this->__soapCall('query', array($parameters));
    }

    /**
     * Create a Query Cursor, including deleted sObjects
     *
     * @param queryAll $parameters
     * @return queryAllResponse
     */
    public function queryAll(queryAll $parameters)
    {
      return $this->__soapCall('queryAll', array($parameters));
    }

    /**
     * Gets the next batch of sObjects from a query
     *
     * @param queryMore $parameters
     * @return queryMoreResponse
     */
    public function queryMore(queryMore $parameters)
    {
      return $this->__soapCall('queryMore', array($parameters));
    }

    /**
     * Search for sObjects
     *
     * @param search $parameters
     * @return searchResponse
     */
    public function search(search $parameters)
    {
      return $this->__soapCall('search', array($parameters));
    }

    /**
     * Gets server timestamp
     *
     * @param getServerTimestamp $parameters
     * @return getServerTimestampResponse
     */
    public function getServerTimestamp(getServerTimestamp $parameters)
    {
      return $this->__soapCall('getServerTimestamp', array($parameters));
    }

    /**
     * Set a user's password
     *
     * @param setPassword $parameters
     * @return setPasswordResponse
     */
    public function setPassword(setPassword $parameters)
    {
      return $this->__soapCall('setPassword', array($parameters));
    }

    /**
     * Change the current user's password
     *
     * @param changeOwnPassword $parameters
     * @return changeOwnPasswordResponse
     */
    public function changeOwnPassword(changeOwnPassword $parameters)
    {
      return $this->__soapCall('changeOwnPassword', array($parameters));
    }

    /**
     * Reset a user's password
     *
     * @param resetPassword $parameters
     * @return resetPasswordResponse
     */
    public function resetPassword(resetPassword $parameters)
    {
      return $this->__soapCall('resetPassword', array($parameters));
    }

    /**
     * Returns standard information relevant to the current user
     *
     * @param getUserInfo $parameters
     * @return getUserInfoResponse
     */
    public function getUserInfo(getUserInfo $parameters)
    {
      return $this->__soapCall('getUserInfo', array($parameters));
    }

    /**
     * Delete a set of sObjects by example. The passed SOBject is a template for the object to delete
     *
     * @param deleteByExample $parameters
     * @return deleteByExampleResponse
     */
    public function deleteByExample(deleteByExample $parameters)
    {
      return $this->__soapCall('deleteByExample', array($parameters));
    }

    /**
     * Send existing draft EmailMessage
     *
     * @param sendEmailMessage $parameters
     * @return sendEmailMessageResponse
     */
    public function sendEmailMessage(sendEmailMessage $parameters)
    {
      return $this->__soapCall('sendEmailMessage', array($parameters));
    }

    /**
     * Send outbound email
     *
     * @param sendEmail $parameters
     * @return sendEmailResponse
     */
    public function sendEmail(sendEmail $parameters)
    {
      return $this->__soapCall('sendEmail', array($parameters));
    }

    /**
     * Perform a template merge on one or more blocks of text.
     *
     * @param renderEmailTemplate $parameters
     * @return renderEmailTemplateResponse
     */
    public function renderEmailTemplate(renderEmailTemplate $parameters)
    {
      return $this->__soapCall('renderEmailTemplate', array($parameters));
    }

    /**
     * Perform a template merge using an email template stored in the database.
     *
     * @param renderStoredEmailTemplate $parameters
     * @return renderStoredEmailTemplateResponse
     */
    public function renderStoredEmailTemplate(renderStoredEmailTemplate $parameters)
    {
      return $this->__soapCall('renderStoredEmailTemplate', array($parameters));
    }

    /**
     * Perform a series of predefined actions such as quick create or log a task
     *
     * @param performQuickActions $parameters
     * @return performQuickActionsResponse
     */
    public function performQuickActions(performQuickActions $parameters)
    {
      return $this->__soapCall('performQuickActions', array($parameters));
    }

    /**
     * Describe the details of a series of quick actions
     *
     * @param describeQuickActions $parameters
     * @return describeQuickActionsResponse
     */
    public function describeQuickActions(describeQuickActions $parameters)
    {
      return $this->__soapCall('describeQuickActions', array($parameters));
    }

    /**
     * Describe the details of a series of quick actions in context of requested recordType id for Update actions
     *
     * @param describeQuickActionsForRecordType $parameters
     * @return describeQuickActionsForRecordTypeResponse
     */
    public function describeQuickActionsForRecordType(describeQuickActionsForRecordType $parameters)
    {
      return $this->__soapCall('describeQuickActionsForRecordType', array($parameters));
    }

    /**
     * Describe the details of a series of quick actions available for the given contextType
     *
     * @param describeAvailableQuickActions $parameters
     * @return describeAvailableQuickActionsResponse
     */
    public function describeAvailableQuickActions(describeAvailableQuickActions $parameters)
    {
      return $this->__soapCall('describeAvailableQuickActions', array($parameters));
    }

    /**
     * Retrieve the template sobjects, if appropriate, for the given quick action names in a given context
     *
     * @param retrieveQuickActionTemplates $parameters
     * @return retrieveQuickActionTemplatesResponse
     */
    public function retrieveQuickActionTemplates(retrieveQuickActionTemplates $parameters)
    {
      return $this->__soapCall('retrieveQuickActionTemplates', array($parameters));
    }

    /**
     * Retrieve the template sobjects, if appropriate, for the given quick action names in a given contexts when used a mass quick action
     *
     * @param retrieveMassQuickActionTemplates $parameters
     * @return retrieveMassQuickActionTemplatesResponse
     */
    public function retrieveMassQuickActionTemplates(retrieveMassQuickActionTemplates $parameters)
    {
      return $this->__soapCall('retrieveMassQuickActionTemplates', array($parameters));
    }

    /**
     * Describe visualforce for an org
     *
     * @param describeVisualForce $parameters
     * @return describeVisualForceResponse
     */
    public function describeVisualForce(describeVisualForce $parameters)
    {
      return $this->__soapCall('describeVisualForce', array($parameters));
    }

    /**
     * Find duplicates for a set of sObjects
     *
     * @param findDuplicates $parameters
     * @return findDuplicatesResponse
     */
    public function findDuplicates(findDuplicates $parameters)
    {
      return $this->__soapCall('findDuplicates', array($parameters));
    }

    /**
     * Find duplicates for a set of ids
     *
     * @param findDuplicatesByIds $parameters
     * @return findDuplicatesByIdsResponse
     */
    public function findDuplicatesByIds(findDuplicatesByIds $parameters)
    {
      return $this->__soapCall('findDuplicatesByIds', array($parameters));
    }

    /**
     * Return the renameable nouns from the server for use in presentation using the salesforce grammar engine
     *
     * @param describeNouns $parameters
     * @return describeNounsResponse
     */
    public function describeNouns(describeNouns $parameters)
    {
      return $this->__soapCall('describeNouns', array($parameters));
    }

}
