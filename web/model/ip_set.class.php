<?php
if(!defined('CAN_RUN')) {
	exit('Access Denied');
}

class ip_set extends base_set {
	protected $table_name = 'auditip';
	protected $id_name = 'id';

}
?>
