<?php
class Dashboard{

    public function main(){
        print($_SESSION['session']);
        require_once "views/roles/admin/admin.view.php";
    }
}
?>