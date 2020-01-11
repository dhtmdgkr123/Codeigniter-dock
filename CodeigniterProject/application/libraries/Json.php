<?php
if(! class_exists('Json')) {
    /**
     * 클래스 설명
     * 
     * @copyright  2020 dhtmdgkr123
     * @version    Release: @1.0.1@
     * @since      Release 1.0.1
     */
    class Json
    {
        public function echo(array $data) : void
        {
            /**
             * Response to client with json type 
             * 
             * @param   array $data response data
             * 
             * @author  dhtmdgkr123
             * @version 1.0.1
             * @return void client response json data
             */
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($data);
        }
        public function decode(string $json) : object
        {
            /**
             * Parse json data
             * 
             * @param   string $json serialize json data
             * @author  dhtmdgkr123
             * @version 1.0.1
             * @return object Parsed json data
             */
            return json_decode($json);
        }
    }
}