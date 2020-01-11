if(! class_exists('Migration_<?=$className?>')) {
    defined('BASEPATH') or exit('No direct script access allowed');
    class Migration_<?=$className?> extends CI_Migration
    {
        public function up() : void 
        {
            $this->dbforge->add([
                'col' => [
                    # code here...
                ]
            ])
        }
        public function down() : void 
        {
            $this->dbforge->drop_table('<?=$className?>');
        }

    }
}