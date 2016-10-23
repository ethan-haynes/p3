<?php
namespace p3\Http\Handlers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use Badcow\LoremIpsum\Generator;

class LoremIpsumHandler extends Handler {

    public static function handleRequest(Request $request) {
        $input = self::parseRequest($request);

        $choice = $input['choice'];
        $number = $input['number'];
        $generator = new Generator();

        $response = self::generateByMatch($choice, $number, $generator);
        return $response;
    }

    private static function parseRequest(Request $request) {
        return $request->all();
    }

    private static function generateByMatch($choice, $number, $generator) {
        switch ($choice) {
            case 'words': return array_slice($generator->getWords(), 0, $number);
                break;
            case 'sentences': return $generator->getSentences($number);
                break;
            case 'paragraphs': return $generator->getParagraphs($number);
                break;
            # no default required here
        }
    }
}
