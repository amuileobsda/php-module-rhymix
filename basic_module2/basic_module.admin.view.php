<?php

/**
 * basic_module
 * 
 * Copyright (c) CJG
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class Basic_moduleAdminView extends Basic_module
{
	/**
	 * 초기화
	 */
	public function init()
	{
		// 관리자 화면 템플릿 경로 지정
		$this->setTemplatePath($this->module_path . 'tpl');
	}
	
	/**
	 * 관리자 설정 화면 예제
	 */
	public function dispBasic_moduleAdminConfig()
	{
		// 현재 설정 상태 불러오기
		$config = $this->getConfig();
		
		// Context에 세팅
		Context::set('basic_module_config', $config);
		
		// 스킨 파일 지정
		$this->setTemplateFile('config');
	}
}
