<?php
if(! class_exists('File')) {
    class File
    {
        /**
         * File hadel library
         * 
         * @copyright  2020 dhtmdgkr123
         * @version    Release: @1.0.1@
         * @since      since Release 1.0.1
         */
        public function checkView(string $head, string $body, string $foot) : bool
        {
            /**
             * check header, footer, body file
             * 
             * @param   string $head header path
             * @param   string $body body path
             * @param   string $foot footer path
             * @author  dhtmdgkr123
             * @version 1.0.1
             * @return bool head and body and footer is exists
             */
            $ext = '.php';
            return file_exists(VIEWPATH.$head.$ext) && file_exists(VIEWPATH.$body.$ext) && file_exists(VIEWPATH.$foot.$ext);
        }
    }
}