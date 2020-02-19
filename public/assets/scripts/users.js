$(function () {
  $("#example1").DataTable();
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
  });

  $('#userCreateForm').validate({
    rules: {
      name: {
        required: true,
      },
      last_name: {
        required: true,
      },
      dni: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 6
      },
      password_confirm: {
        minlength: 6,
        equalTo: "#password"
      }
    },
    messages: {
      name: {
        required: "Este campo es requerido.",
      },
      last_name: {
        required: "Este campo es requerido.",
      },
      dni: {
        required: "Este campo es requerido.",
      },
      email: {
        required: "Por favor ingrese una dirección de correo electrónico",
        email: "Por favor ingrese un correo electronco válido"
      },
      email: {
        required: "Por favor ingrese una dirección de correo electrónico",
        email: "Por favor ingrese un correo electronco válido"
      },
      password: {
        required: "Por favor proporcione una contraseña",
        minlength: "Su contraseña debe tener al menos 6 caracteres."
      },
      password_confirm: "Por favor ingrese el mismo valor nuevamente."
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  
  $('#userUpdateForm').validate({
    rules: {
      name: {
        required: true,
      },
      last_name: {
        required: true,
      },
      dni: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      password_confirm: {
        minlength: 6,
        equalTo: "#password"
      }
    },
    messages: {
      name: {
        required: "Este campo es requerido.",
      },
      last_name: {
        required: "Este campo es requerido.",
      },
      dni: {
        required: "Este campo es requerido.",
      },
      email: {
        required: "Por favor ingrese una dirección de correo electrónico",
        email: "Por favor ingrese un correo electronco válido"
      },
      email: {
        required: "Por favor ingrese una dirección de correo electrónico",
        email: "Por favor ingrese un correo electronco válido"
      },
      password: {
        required: "Por favor proporcione una contraseña",
        minlength: "Su contraseña debe tener al menos 6 caracteres."
      },
      password_confirm: "Por favor ingrese el mismo valor nuevamente."
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
