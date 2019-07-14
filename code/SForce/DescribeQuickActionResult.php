<?php

namespace SForce\Wsdl;

class DescribeQuickActionResult
{
    /**
     * @var ShareAccessLevel
     */
    protected $accessLevelRequired = null;

    /**
     * @var string
     */
    protected $actionEnumOrId = null;

    /**
     * @var ID
     */
    protected $canvasApplicationId = null;

    /**
     * @var string
     */
    protected $canvasApplicationName = null;

    /**
     * @var DescribeColor[]
     */
    protected $colors = null;

    /**
     * @var string
     */
    protected $contextSobjectType = null;

    /**
     * @var DescribeQuickActionDefaultValue[]
     */
    protected $defaultValues = null;

    /**
     * @var string
     */
    protected $flowDevName = null;

    /**
     * @var string
     */
    protected $flowRecordIdVar = null;

    /**
     * @var int
     */
    protected $height = null;

    /**
     * @var string
     */
    protected $iconName = null;

    /**
     * @var string
     */
    protected $iconUrl = null;

    /**
     * @var DescribeIcon[]
     */
    protected $icons = null;

    /**
     * @var string
     */
    protected $label = null;

    /**
     * @var DescribeLayoutSection
     */
    protected $layout = null;

    /**
     * @var ID
     */
    protected $lightningComponentBundleId = null;

    /**
     * @var string
     */
    protected $lightningComponentBundleName = null;

    /**
     * @var string
     */
    protected $lightningComponentQualifiedName = null;

    /**
     * @var string
     */
    protected $miniIconUrl = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var boolean
     */
    protected $showQuickActionLcHeader = null;

    /**
     * @var boolean
     */
    protected $showQuickActionVfHeader = null;

    /**
     * @var string
     */
    protected $targetParentField = null;

    /**
     * @var ID
     */
    protected $targetRecordTypeId = null;

    /**
     * @var string
     */
    protected $targetSobjectType = null;

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var string
     */
    protected $visualforcePageName = null;

    /**
     * @var string
     */
    protected $visualforcePageUrl = null;

    /**
     * @var int
     */
    protected $width = null;

    /**
     * @param string $actionEnumOrId
     * @param string $label
     * @param string $name
     * @param boolean $showQuickActionLcHeader
     * @param boolean $showQuickActionVfHeader
     * @param string $type
     */
    public function __construct($actionEnumOrId = null, $label = null, $name = null, $showQuickActionLcHeader = null, $showQuickActionVfHeader = null, $type = null)
    {
        $this->actionEnumOrId = $actionEnumOrId;
        $this->label = $label;
        $this->name = $name;
        $this->showQuickActionLcHeader = $showQuickActionLcHeader;
        $this->showQuickActionVfHeader = $showQuickActionVfHeader;
        $this->type = $type;
    }

    /**
     * @return ShareAccessLevel
     */
    public function getAccessLevelRequired()
    {
        return $this->accessLevelRequired;
    }

    /**
     * @param ShareAccessLevel $accessLevelRequired
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setAccessLevelRequired($accessLevelRequired)
    {
        $this->accessLevelRequired = $accessLevelRequired;
        return $this;
    }

    /**
     * @return string
     */
    public function getActionEnumOrId()
    {
        return $this->actionEnumOrId;
    }

    /**
     * @param string $actionEnumOrId
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setActionEnumOrId($actionEnumOrId)
    {
        $this->actionEnumOrId = $actionEnumOrId;
        return $this;
    }

    /**
     * @return ID
     */
    public function getCanvasApplicationId()
    {
        return $this->canvasApplicationId;
    }

    /**
     * @param ID $canvasApplicationId
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setCanvasApplicationId($canvasApplicationId)
    {
        $this->canvasApplicationId = $canvasApplicationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCanvasApplicationName()
    {
        return $this->canvasApplicationName;
    }

    /**
     * @param string $canvasApplicationName
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setCanvasApplicationName($canvasApplicationName)
    {
        $this->canvasApplicationName = $canvasApplicationName;
        return $this;
    }

    /**
     * @return DescribeColor[]
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * @param DescribeColor[] $colors
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setColors(array $colors = null)
    {
        $this->colors = $colors;
        return $this;
    }

    /**
     * @return string
     */
    public function getContextSobjectType()
    {
        return $this->contextSobjectType;
    }

    /**
     * @param string $contextSobjectType
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setContextSobjectType($contextSobjectType)
    {
        $this->contextSobjectType = $contextSobjectType;
        return $this;
    }

    /**
     * @return DescribeQuickActionDefaultValue[]
     */
    public function getDefaultValues()
    {
        return $this->defaultValues;
    }

    /**
     * @param DescribeQuickActionDefaultValue[] $defaultValues
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setDefaultValues(array $defaultValues = null)
    {
        $this->defaultValues = $defaultValues;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlowDevName()
    {
        return $this->flowDevName;
    }

    /**
     * @param string $flowDevName
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setFlowDevName($flowDevName)
    {
        $this->flowDevName = $flowDevName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlowRecordIdVar()
    {
        return $this->flowRecordIdVar;
    }

    /**
     * @param string $flowRecordIdVar
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setFlowRecordIdVar($flowRecordIdVar)
    {
        $this->flowRecordIdVar = $flowRecordIdVar;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string
     */
    public function getIconName()
    {
        return $this->iconName;
    }

    /**
     * @param string $iconName
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setIconName($iconName)
    {
        $this->iconName = $iconName;
        return $this;
    }

    /**
     * @return string
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    /**
     * @param string $iconUrl
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;
        return $this;
    }

    /**
     * @return DescribeIcon[]
     */
    public function getIcons()
    {
        return $this->icons;
    }

    /**
     * @param DescribeIcon[] $icons
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setIcons(array $icons = null)
    {
        $this->icons = $icons;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return DescribeLayoutSection
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * @param DescribeLayoutSection $layout
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
        return $this;
    }

    /**
     * @return ID
     */
    public function getLightningComponentBundleId()
    {
        return $this->lightningComponentBundleId;
    }

    /**
     * @param ID $lightningComponentBundleId
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setLightningComponentBundleId($lightningComponentBundleId)
    {
        $this->lightningComponentBundleId = $lightningComponentBundleId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLightningComponentBundleName()
    {
        return $this->lightningComponentBundleName;
    }

    /**
     * @param string $lightningComponentBundleName
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setLightningComponentBundleName($lightningComponentBundleName)
    {
        $this->lightningComponentBundleName = $lightningComponentBundleName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLightningComponentQualifiedName()
    {
        return $this->lightningComponentQualifiedName;
    }

    /**
     * @param string $lightningComponentQualifiedName
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setLightningComponentQualifiedName($lightningComponentQualifiedName)
    {
        $this->lightningComponentQualifiedName = $lightningComponentQualifiedName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiniIconUrl()
    {
        return $this->miniIconUrl;
    }

    /**
     * @param string $miniIconUrl
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setMiniIconUrl($miniIconUrl)
    {
        $this->miniIconUrl = $miniIconUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowQuickActionLcHeader()
    {
        return $this->showQuickActionLcHeader;
    }

    /**
     * @param boolean $showQuickActionLcHeader
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setShowQuickActionLcHeader($showQuickActionLcHeader)
    {
        $this->showQuickActionLcHeader = $showQuickActionLcHeader;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowQuickActionVfHeader()
    {
        return $this->showQuickActionVfHeader;
    }

    /**
     * @param boolean $showQuickActionVfHeader
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setShowQuickActionVfHeader($showQuickActionVfHeader)
    {
        $this->showQuickActionVfHeader = $showQuickActionVfHeader;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetParentField()
    {
        return $this->targetParentField;
    }

    /**
     * @param string $targetParentField
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setTargetParentField($targetParentField)
    {
        $this->targetParentField = $targetParentField;
        return $this;
    }

    /**
     * @return ID
     */
    public function getTargetRecordTypeId()
    {
        return $this->targetRecordTypeId;
    }

    /**
     * @param ID $targetRecordTypeId
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setTargetRecordTypeId($targetRecordTypeId)
    {
        $this->targetRecordTypeId = $targetRecordTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetSobjectType()
    {
        return $this->targetSobjectType;
    }

    /**
     * @param string $targetSobjectType
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setTargetSobjectType($targetSobjectType)
    {
        $this->targetSobjectType = $targetSobjectType;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getVisualforcePageName()
    {
        return $this->visualforcePageName;
    }

    /**
     * @param string $visualforcePageName
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setVisualforcePageName($visualforcePageName)
    {
        $this->visualforcePageName = $visualforcePageName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVisualforcePageUrl()
    {
        return $this->visualforcePageUrl;
    }

    /**
     * @param string $visualforcePageUrl
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setVisualforcePageUrl($visualforcePageUrl)
    {
        $this->visualforcePageUrl = $visualforcePageUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return \SForce\Wsdl\DescribeQuickActionResult
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }
}
