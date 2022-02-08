<?php

/**
 * basic_module
 * 
 * Copyright (c) CJG
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class Basic_moduleView extends Basic_module
{
	/**
	 * 초기화
	 */
	public function init()
	{
		// 스킨 경로 지정
		$this->setTemplatePath($this->module_path . 'skins/' . ($this->module_info->skin ?: 'default'));
	}
	
	/**
	 * 메인 화면 예제
	 */
	public function dispBasic_moduleIndex()
	{
		// 스킨 파일명 지정

		$obj = Context::getRequestVars();

        $oBasicModuleModel = getModel('basic_module');
        $output = $oBasicModuleModel->getBasic_moduleList();


        Context::set('basic_module', $output->data);
		$this->setTemplateFile('index');
	}

	/**
	 * 삽입 화면 예제
	 */
	public function dispBasic_moduleInsert()
	{
		$obj = Context::getRequestVars();
        debugPrint($obj);

		$oBasicModuleModel = getModel('basic_module');
        $output = $oBasicModuleModel->getBasic_moduleInfo($obj->basic_srl);

		Context::set('basic_info', $output->data);
		// 스킨 파일명 지정
		$this->setTemplateFile('insert');
	}

	/**
	 * 뷰 화면 예제
	 */
	public function dispBasic_moduleView()
	{
		$obj = Context::getRequestVars();
        debugPrint($obj);

		$oBasicModuleModel = getModel('basic_module');
        $output = $oBasicModuleModel->getBasic_moduleInfo($obj->basic_srl);
		debugPrint($output);

		// 스킨 파일명 지정
		Context::set('basic_info', $output->data);
		$this->setTemplateFile('view');
	}
}
