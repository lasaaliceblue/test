<?php

namespace App\Trait;

trait ResponseTraits
{    
    /**
     * Method getSuccess
     *
     * @param $message $message [explicite description]
     * @param $status_code $status_code [explicite description]
     *
     * @return void
     */
    public function getSuccess($message, $status_code,$data)
    {
        return response()->json(
            [
                'status' => true,
                'message' => $message,
                'data' => $data
            ],
            $status_code,
        );
    }
}
