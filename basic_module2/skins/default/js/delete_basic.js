
document.addEventListener("DOMContentLoaded", ()=>{

    const deleteBtn = document.getElementById("deleteBtn");
    if(deleteBtn){
    deleteBtn.addEventListener("click", function(e){
    let msg = "신청서를 삭제하시겠습니까?";
    const params = [];
    
    if(window.confirm(msg)){
    exec_json("basic_module.procBasic_ModuleDeleteApplication", params, function(ret_obj){
            if(ret_obj["msg"]){
                alert(ret_obj["msg"]);
                window.location.href="/basic_module";
            }
            });
          }
        });
      }
    });