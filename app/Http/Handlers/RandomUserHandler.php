<?php
namespace p3\Http\Handlers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use Faker\Factory;

class RandomUserHandler extends Handler {

    public static function handleRequest(Request $request) {
        # gets the relevant bits from the request
        $input = self::parseRequest($request);

        $number = $input['number'];
        $locale = (array_key_exists('localeValue', $input)) ? $input['localeValue'] : 'en_US';

        # filter out all the unnecessary data fields
        $output = array_filter($input, function($k) {
            return $k != '_token' &&
                   $k != 'number' &&
                   $k != 'locale' &&
                   $k != 'payment';
        }, ARRAY_FILTER_USE_KEY);

        $factory = Factory::create($locale);
        $response = array();

        /* for the number of users the user requests
         * call findMatches on the rquested input
         * then add those to the response object
         */
        for ($i=0; $i < $number; $i++) {
            $data = array(
                'user'.$i => self::findMatches($output, $factory)
            );

            $response = array_merge($response, $data);
        }

        return $response;
    }

    private static function parseRequest(Request $request) {
        return $request->all();
    }

    # Returns the data object corresponding to the requested values
    private static function findMatches($input, $output) {
        # checks each key value in the request, replaces it with data object value
        foreach ($input as $key => $value) {
            switch ($key) {
                case 'name': $input[$key] = "Name: ".$output->name;
                    break;
                case 'phoneNumber': $input[$key] = "Phone Number: ".$output->PhoneNumber;
                    break;
                case 'creditCardType': $input[$key] = "Credit Card Type: ".$output->creditCardType;
                    break;
                case 'creditCardNumber': $input[$key] = "Credit Card Number: ".$output->creditCardNumber;
                    break;
                case 'company': $input[$key] = "Company: ".$output->company;
                    break;
                case 'address': $input[$key] = "Address: ".$output->address;
                    break;
                case 'localeValue': $input[$key] = "Locale: ".$value;
                    break;
                # no default required here
            }
        }
        # return built object when finished
        return $input;
    }
}
