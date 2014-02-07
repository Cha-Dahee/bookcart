<?php
/**
 * @class  bookcartAdminView
 * @author CRA (developers@cra.com)
 * @brief bookcart module's admin view class
 **/

class bookcartAdminView extends bookcart {
	
		//초기화
		function init() {
			// 관리자 템플릿 파일의 경로 설정 (tpl)
	            $template_path = sprintf("%stpl/",$this->module_path);
	            $this->setTemplatePath($template_path);
		}
		
		function dispBookcartAdminList(){
			//관리자 목록(mid) 보기 템플릿 지정(tpl/index.html)
			$this->setTemplateFile('index');
		}


	}

?>