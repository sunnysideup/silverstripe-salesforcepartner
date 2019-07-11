<?php


use SForce\Client\Partner;

use SForce\SObject;

use SForce\Wsdl\create;

class SalesforceTest extends BuildTask
{
    protected $title = 'Test Sales Force API';

    protected $description = 'Test Sales Cloud';

    public function run($request)
    {
        $this->findContact();
    }

    protected function findContact()
    {
        print '<h2>Request</h2>';
        print "<pre>MySalesforcePartnerAPI::retrieve_contact('a@b.c.d')</pre>";
        $contact = MySalesforcePartnerAPI::retrieve_contact('a@b.c.d');

        print '<h2>Result</h2>';
        print '<pre>';
        print htmlentities(print_r($contact, true));
        print '</pre>';
    }

    protected function createContact()
    {
        $response = MySalesforcePartnerAPI::create_contact(
            [
                'FirstName' => 'John',
                'LastName' => 'Smith',
                'Phone' => '(510) 555-5555',
                'BirthDate' => '1957-01-25',
                'Email' => 'a@b.c.d',
            ]
        );

        $this->showResults($response);
    }

    protected function updateContact()
    {
        $response = MySalesforcePartnerAPI::update_contact(
            [
                'FirstName' => 'Joan',
                'LastName' => 'Smith',
                'Phone' => '(510) 555-5555',
                'BirthDate' => '1957-01-25',
                'Email' => 'a@b.c.d',
            ]
        );

        $this->showResults($response);
    }

    protected function showResults($response)
    {
        $this->showRequest();
        $this->showResponse($response);
    }

    protected function showRequest()
    {
        $connection = MySalesforcePartnerAPIConnectionOnly::singleton();
        $this->output('
            <h2>Request</h2>
            <pre>
        ');
        $this->output($connection->debug(), true);
        $this->output('
            </pre>
        ');
    }

    protected function showResponse($response)
    {
        $this->output('
            <h2>Response</h2>
            <pre>
        ');
        $this->output($response);
        $this->output('
            </pre>
        ');
    }

    protected function output($html, $escape = false)
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
}
