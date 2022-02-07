document.addEventListener("DOMContentLoaded", () => {
    const teacherForm = document.getElementById("teacherForm");
    teacherForm.addEventListener("submit", function (e) {
      e.preventDefault();
      const checked_list = [];
      const gradeList = document.querySelectorAll("input[name=grade]:checked");
  
      if (gradeList) {
        gradeList.forEach((element) => {
          checked_list.push(element.value);
        });
      }
  
      const formData = new FormData(teacherForm);
      const teacher_image_exam = formData.get("teacher_image");
      var reader = new FileReader();
      reader.readAsDataURL(teacher_image_exam);
      let teacher_image = "";
      reader.onload = function () {
        teacher_image = reader.result;
        const params = {
          teacher_image: teacher_image,
          user_id: formData.get("teacher_id"),
          name: formData.get("teacher_name"),
          phone_number: formData.get("phone_number"),
          email_address: formData.get("email_address"),
          education: document.getElementById("education").value,
          career: document.getElementById("career").value,
          certificate: document.getElementById("certificate").value,
          class_intro: document.getElementById("class_intro").value,
          class_field: document.getElementById("class_field").value,
          book: document.getElementById("book").value,
          grade_list: checked_list,
        };
        console.log(params);
        exec_json("teacher_manage.procTeacher_manageUpdateApplication", params, function (ret_obj) {
          if (ret_obj["msg"]) {
            alert(ret_obj["msg"]);
            window.location.reload();
          }
        });
      };
    });
  });
  