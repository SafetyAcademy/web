<?php

namespace App\Models;

use App\Services\ProjectAcceptService;
use App\Services\APIService;

class ConferenceAccept extends APIModel {

    public static function fromRequest($params) {
        $paramsAPI = ProjectAcceptService::buildParams($params);
        if($paramsAPI) {
            $res = (new APIService())->build($paramsAPI)->post('Contacts/'.$params['contact_id'].'/Links');
        }

        return $res;
    }
}