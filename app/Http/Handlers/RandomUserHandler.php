<?php
namespace p3\Http\Handlers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use Faker\Factory;

class RandomUserHandler extends Handler {

    public static function handleRequest(Request $request) {
        $input = self::parseRequest($request);

        // $randomUserBuilder = new PasswordBuilder();
        // $passwordDirector = new PasswordDirector($passwordBuilder);
        // return $passwordDirector->build();



        $number = $input['number'];
        $locale = (array_key_exists('localeValue', $input)) ? $input['localeValue'] : 'en_US';

        $output = array(Factory::create($locale));
        $input = self::findMatches($input, $output[0]);
        dump($input);
        for ($i=0; $i < $number-1; $i++) {
            array_push($output, Factory::create($locale));
        }

        return $output;
    }

    private static function parseRequest(Request $request) {
        return $request->all();
    }

    private static function findMatches($input, $output) {
        $input = array_filter($input, function($k) {
            return $k != '_token' && $k != 'number';
        }, ARRAY_FILTER_USE_KEY);

        foreach ($input as $key => $value) {
            if ($key == 'name') {
                $input[$key] = $output->name;
            } elseif ($key == 'phoneNumber') {
                $input[$key] = $output->PhoneNumber;
            } elseif ($key == 'creditCardType') {
                $input[$key] = $output->creditCardType;
            } elseif ($key == 'company') {
                $input[$key] = $output->Company;
            } elseif ($key == 'address') {
                $input[$key] = $output->Address;
            }
        }
        return $input;
    }
}
