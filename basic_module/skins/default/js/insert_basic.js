document.addEventListener("DOMContentLoaded", () => {
    const basicForm = document.getElementById("basicForm");
    basicForm.addEventListener("submit", function (e) {
      e.preventDefault();

      reader.onload = function () {
        // teacher_image = reader.result;
        const params = {
          input_srl: document.getElementById("text1").value,
          text_srl: document.getElementById("text2").value,
        };
        console.log(params);
        exec_json("teacher_manage.procTeacher_manageApplyTeacher", params, function (ret_obj) {
          if (ret_obj["msg"]) {
            alert(ret_obj["msg"]);
          //   window.location.reload();
          }
        });
      };
    });
  });
  