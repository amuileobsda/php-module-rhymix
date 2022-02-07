<?php

/**
 * basic_module
 * 
 * Copyright (c) CJG
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class Basic_moduleModel extends Basic_module
{
	function getBasic_moduleList()
    {
        debugPrint($basic_srl);
        $oDB = DB::getInstance();
        debugPrint($queryArray);
        $stmt = $oDB->prepare("SELECT * FROM basic_module");
        $stmt->execute();
        $output->data = $stmt->fetchAll();
        
        $stmt->closeCursor();
        return $output;
    }

    function getBasic_moduleInfo($basic_srl)
    {
        debugPrint($basic_srl);
        $oDB = DB::getInstance();
        $queryArray = array(
            ':basic_srl' => $basic_srl
        );
        debugPrint($queryArray);
        $stmt = $oDB->prepare("SELECT * FROM basic_module WHERE basic_srl = :basic_srl");
        $stmt->execute($queryArray);
        $output->data = $stmt->fetch();
        
        $stmt->closeCursor();
        return $output;
    }

}
