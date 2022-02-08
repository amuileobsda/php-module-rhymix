document.addEventListener("DOMContentLoaded", () => {
	const basic_module_Form = document.getElementById("basic_module_Form");
	basic_module_Form.addEventListener("submit", function (e) {
        e.preventDefault();

		// input값 받아오기
		let text_name_one = document.getElementById("text_name_one").value;
		// console.log(textBtnOne)
		let text_name_two = document.getElementById("text_name_two").value;
		// console.log(textBtnTwo)
	
		// input값 params에 저장
		const params = {
			"text_name_one":text_name_one,
			"text_name_two":text_name_two
		};
		console.log(params);

		// params객체를 컨트롤러로 보내서 db에 저장
		exec_json("basic_module.procBasic_moduleInsert", params, function (ret_obj) {
			console.log(ret_obj);
			if(ret_obj["msg"]){
				alert(ret_obj["msg"]);
				document.querySelectorAll('list_'+ret_obj.selected_info.basic_srl).append('<div>'+ret_obj.selected_info.basic_srl+'</div>')
			}else{
			}		
        });
      });   
});