<?php

namespace SForce\Wsdl;

class SearchSnippet
{
    /**
     * @var string
     */
    protected $text = null;

    /**
     * @var NameValuePair[]
     */
    protected $wholeFields = null;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return \SForce\Wsdl\SearchSnippet
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return NameValuePair[]
     */
    public function getWholeFields()
    {
        return $this->wholeFields;
    }

    /**
     * @param NameValuePair[] $wholeFields
     * @return \SForce\Wsdl\SearchSnippet
     */
    public function setWholeFields(array $wholeFields = null)
    {
        $this->wholeFields = $wholeFields;
        return $this;
    }
}
