document.addEventListener("DOMContentLoaded", () => {
    const headerBtn = document.querySelectorAll(".teacherBtn");
    headerBtn.forEach((element) => {
      element.addEventListener("click", function (e) {
        e.preventDefault();
        const params = [];
        exec_json("teacher_manage.procTeacher_manageCheckTeacherGroup", params, function (ret_obj) {
          if (ret_obj["msg"]) {
            alert(ret_obj["msg"]);
            window.location.href = "/teacher";
          } else {
            window.location.href = element.href;
          }
        });
      });
    });
  });
  