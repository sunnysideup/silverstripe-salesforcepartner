<?php

/**
 * This class has three functions:
 *  - check if a person is subscried
 *  - add Contact
 *  - update contact
 *
 * This class adds / updates subscribers to Salesforce
 * NOTE: same class in caltex.co.nz - win.z.co.nz please update both.
 * NOTE: please update caltex.co.nz first and then win ...
 */

class SalesforceContactApiWrapper
{

    /**
     * @param string $email
     * @param string $phoneNumber
     * @param string $firstName
     * @param string $lastName
     * @param array $extraFields
     *
     * @return bool
     */
    public function addSubscriber(
        $email,
        $phoneNumber = null,
        $firstName = null,
        $lastName = null,
        $extraFields = []
    ): bool
    {
        $this->assertEmail($email);

        $fields = $extraFields;

        $fields['Email'] = $email;
        $fields['FirstName'] = '-';
        $fields['LastName'] = '-';

        if ($firstName) {
            $fields['FirstName'] = $firstName;
        }

        if ($lastName) {
            $fields['LastName'] = $lastName;
        }

        if ($phoneNumber) {
            $fields['Phone'] = $phoneNumber;
        }

        $response = MySalesforcePartnerAPI::create_contact($fields);

        return $response ? true : false;
    }

    /**
     * @param string $email
     * @param array $extraFields
     *
     * @return bool
     */
    public function updateSubscriber(
        $email,
        $extraFields = []
    ): bool
    {
        $this->assertEmail($email);

        $fields = $extraFields;

        $fields['Email'] = $email;

        $response = MySalesforcePartnerAPI::update_contact($fields);

        return $response ? true : false;
    }

    /**
     * @param $email
     */
    private function assertEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Wrong email address format');
        }
    }

    /**
     * @param $email
     *
     * @return bool
     */
    public function isEmailRegistered($email) : bool
    {
        $subscriber = MySalesforcePartnerAPI::retrieve_contact($email);

        return $subscriber ? true : false;
    }
}
