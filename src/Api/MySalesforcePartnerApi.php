<?php

use SForce\Client\Partner;

use SForce\SObject;
use SForce\Wsdl\SaveResult;

class MySalesforcePartnerApi extends Partner
{

    /**
     * turns key value pairs into string
     * @param  array $array
     * @param  string $glue implode glue
     * @return string
     */
    public static function array2sql($array, $glue = ' AND ')
    {
        if(count($array) === 0) {
            user_error('must have at least one entry');
        }
        $inner = [];
        foreach($array as $field => $value) {
            $inner[$field] =  $field.' = '.Convert::raw2sql($value, true);
        }

        return implode($glue, $inner);
    }


    public function debug($response = null)
    {
        $this->debugShowRequest();
        $this->debugShowResponse($response);
    }

    protected function debugShowRequest()
    {
        $this->debugOutput('
            <h2>Request</h2>
            <pre>
        ');
        $this->debugOutput($this->debugLastRequest(), true);
        $this->debugOutput('
            </pre>
        ');
    }


    protected function debugShowResponse($response)
    {
        $this->debugOutput('
            <h2>Response</h2>
            <pre>
        ');
        $this->debugOutput($response);
        $this->debugOutput('
            </pre>
        ');
    }

    protected function debugLastRequest()
    {
        $xml = $this->getLastRequest();

        if (! $xml) {
            return null;
        }
        $domxml = new \DOMDocument('1.0');
        $domxml->preserveWhiteSpace = false;
        $domxml->formatOutput = true;
        /* @var $xml SimpleXMLElement */
        $domxml->loadXML($xml);

        return $domxml->saveXML();
    }



    protected function debugOutput($html, $escape = false)
    {
        if (! is_string($html)) {
            $html = print_r($html, 1);
        }
        if ($this->isCli()) {
            echo "\n";
        } elseif ($escape) {
            $html = htmlentities($html);
        }

        echo $html;
    }

    protected function isCli()
    {
        return PHP_SAPI === 'cli';
    }


    #####################################
    # overriding parent class to fix bugs
    # in the parent class.
    #####################################
    /**
     * Adds one or more new individual objects to your organization's data.
     *
     * @param SObject[] $sObjects Array of one or more sObjects (up to 200) to create.
     * @param null|string $type Unused
     *
     * @return SaveResult
     */
    public function create($sObjects, $type = null)
    {
        foreach ($sObjects as $sObject) {
            if (property_exists($sObject, 'fields')) {
                // $sObject->getFields() of type object is incompatible with the type array
                // expected by parameter $fields of SForce\Client\Base::_convertToAny().
                $sObject->setAny($this->_convertToAny($sObject->getFields()));
                // print_r($this->_convertToAny($sObject->getFields()));
            }
        }
        // $sObjects of type SForce\SObject[] is incompatible with the type SForce\Wsdl\sObject
        // expected by parameter $sObjects of SForce\Wsdl\create::__construct(). (  Ignorable by Annotation )
        $createObject = new SForce\Wsdl\create($sObjects);

        return parent::_create($createObject);
    }

    #####################################
    # overriding parent class to fix bugs
    # in the parent class.
    #####################################
    /**
     * Updates one or more new individual objects to your organization's data.
     *
     * @param SObject[] $sObjects Array of one or more sObjects (up to 200) to update.
     * @param null|string $type Unused
     *
     * @return SaveResult
     */
    public function update($sObjects, $type = null)
    {
        foreach ($sObjects as $sObject) {
            if (property_exists($sObject, 'fields')) {
                // $sObject->getFields() of type object is incompatible with the type array
                // expected by parameter $fields of SForce\Client\Base::_convertToAny().
                $sObject->setAny($this->_convertToAny($sObject->getFields()));
            }
        }
        // $sObjects of type SForce\SObject[] is incompatible with the type
        // SForce\Wsdl\sObject expected by parameter $sObjects of SForce\Wsdl\update::__construct().
        $updateObject = new SForce\Wsdl\update($sObjects);

        return parent::_update($updateObject);
    }

    /**
     * NOTA BENE:
     * added here because Describe Layout occurs two times (double) with capital D
     * (DescribeLayout) and without capital D (changed to describeLayoutDouble)
     *
     * Use describeLayoutDouble to retrieve information about the layout (presentation
     * of data to users) for a given object type. The describeLayoutDouble call returns
     * metadata about a given page layout, including layouts for edit and
     * display-only views and record type mappings. Note that field-level security
     * and layout editability affects which fields appear in a layout.
     *
     * @param string $type Object Type
     * @param array $recordTypeIds
     *
     * @return Wsdl\DescribeLayoutResult
     */
    public function describeLayoutDouble($type, array $recordTypeIds = [])
    {
        $this->setHeaders(static::CALL_DESCRIBE_LAYOUT);
        // The expression return $this->sforce->de...dTypeIds))->getResult()
        // returns the type SForce\Wsdl\DescribeLayoutResult which is incompatible
        // with the documented return type Wsdl\DescribeLayoutResult.
        return $this->sforce
            ->describeLayoutDouble(new Wsdl\describeLayoutDouble($type, $recordTypeIds))
            ->getResult();
    }
}
