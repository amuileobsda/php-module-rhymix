<?php

/**
 * basic_module
 * 
 * Copyright (c) CJG
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class Basic_moduleController extends Basic_module
{


/**
  * 연습용 모듈 삽입
  */
	public function procBasic_moduleInsert()
	{
		$obj = Context::getRequestVars();
		debugPrint($obj);
        
		// $obj = Context::getRequestVars();
        $oDB = DB::getInstance();
    
        $queryArray = array(
            ":input_srl" => $obj->text1_name,
            ":text_srl" => $obj->text2_name,
        );

		if(!$obj->basic_srl){
			debugPrint('삽입되었습니다.');

			$qry = "INSERT INTO basic_module (input_srl, text_srl) VALUES (:input_srl, :text_srl)";
			$stmt = $oDB->prepare($qry);
            $stmt->execute($queryArray);
            $stmt->fetch();
            $stmt->closeCursor();
		}else{
			debugPrint('업데이트되었습니다.');

			$queryArray = array(
				":input_srl" => $obj->text1_name,
				":text_srl" => $obj->text2_name,
				":basic_srl" => $obj->basic_srl
			);

			$stmt = $oDB->prepare("UPDATE basic_module SET input_srl = :input_srl, text_srl = :text_srl WHERE basic_srl = :basic_srl ");
			$stmt->execute($queryArray);
			// debugPrint('$stmt->execute($queryArray);');
			$output->data = $stmt->fetch();
			// debugPrint('$output->data = $stmt->fetch();');
			$stmt->closeCursor();
			return $output;
		}

    }

/**
  * 연습용 모듈수정
  */
	public function procBasic_moduleEdit($obj)
	{
		debugPrint($obj);
		$oDB = DB::getInstance();
      
		$queryArray = array(
            ":input_srl" => $obj->input_srl,
            ":text_srl" => $obj->text_srl,
        );
        
        $stmt = $oDB->prepare("UPDATE basic_module SET input_srl = :input_srl, text_srl = :text_srl WHERE basic_srl = :basic_srl");
        $stmt->execute($queryArray);
        debugPrint('$stmt->execute($queryArray);');
        $output->data = $stmt->fetch();
        debugPrint('$output->data = $stmt->fetch();');
        $stmt->closeCursor();
        return $output;
    }

/**
  * 연습용 모듈삭제
  */
	public function procBasic_moduleDeleteApplication() 
	{
		$obj = Context::getRequestVars();
		// debugPrint($obj->basic_srl);
        debugPrint("삭제중입니다.");
		// $obj = Context::getRequestVars();
        $oDB = DB::getInstance();
		
		$queryArray = array(
            ":basic_srl" => $obj->basic_srl
        );
			
		$stmt = $oDB->prepare("DELETE FROM basic_module WHERE basic_srl = :basic_srl");
		// debugPrint('$stmt->execute($queryArray);');
		// debugPrint('$output->data = $stmt->fetch();');
	
		$stmt->execute($queryArray);
        $stmt->fetch();
        $stmt->closeCursor();
	    debugPrint("삭제가 완료되었습니다.");
	}

	/**
	 * 트리거 예제: 새 글 작성시 실행
	 * 
	 * 주의: 첨부파일이 있는 경우 아직 작성하지 않았어도 이 함수가 실행될 수 있음
	 * 
	 * @param object $obj
	 */
	public function triggerAfterInsertDocument($obj)
	{
	
	}
	
	/**
	 * 트리거 예제: 글 수정시 실행
	 * 
	 * 주의: 첨부파일이 있는 경우 최종 작성 시점에 이 함수가 실행될 수 있음
	 * 
	 * @param object $obj
	 */
	public function triggerAfterUpdateDocument($obj)
	{
	
	}
	
	/**
	 * 트리거 예제: 글 삭제시 실행
	 * 
	 * @param object $obj
	 */
	public function triggerAfterDeleteDocument($obj)
	{
	
	}
	
	/**
	 * 트리거 예제: 새 댓글 작성시 실행
	 * 
	 * 주의: 첨부파일이 있는 경우 아직 작성하지 않았어도 이 함수가 실행될 수 있음
	 * 
	 * @param object $obj
	 */
	public function triggerAfterInsertComment($obj)
	{
	
	}
	
	/**
	 * 트리거 예제: 댓글 수정시 실행
	 * 
	 * 주의: 첨부파일이 있는 경우 최종 작성 시점에 이 함수가 실행될 수 있음
	 * 
	 * @param object $obj
	 */
	public function triggerAfterUpdateComment($obj)
	{
	
	}
	
	/**
	 * 트리거 예제: 댓글 삭제시 실행
	 * 
	 * @param object $obj
	 */
	public function triggerAfterDeleteComment($obj)
	{
	
	}
}
