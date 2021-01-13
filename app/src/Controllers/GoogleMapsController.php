<?php

namespace App\Controllers;

use App\Elements\Models\GoogleMapElement;
use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\Control\HTTPRequest;

/**
 * Class GoogleMapsController
 *
 * @package App\Controllers
 */
class GoogleMapsController extends ContentController
{

    private static $allowed_actions = [
        'getMapInformation'
    ];

    /**
     * @param HTTPRequest $request
     * @return false|string
     */
    public function getMapInformation(HTTPRequest $request)
    {
        $id = $request->param('ID');
        $map = GoogleMapElement::get()->byID($id);
        $response = $this->getResponse();

        if (!$map) {
            return $response->setBody(
                json_encode(
                    [
                        'success' => false,
                        'message' => 'Cannot find google map with the id passed'
                    ]
                )
            );
        }

        return $response->setBody(
            json_encode(
                [
                    'success' => true,
                    'data' => [
                        'longitude' => $map->Longitude,
                        'latitude' => $map->Latitude,
                        'toolTip' => $map->ToolTip
                    ]
                ]
            )
        );
    }
}
