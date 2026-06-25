$(document).ready(function () {
    $("#formRegistrarMatricula").validate({
        rules: {
            txtIdentificacion: {
                required: true
            },
            numMonto: {
                required: true,
                number: true,
                min: 0.01
            },
            txtTipoCurso: {
                required: true,
                digits: true
            }
        },
        messages: {
            txtIdentificacion: {
                required: "Campo obligatorio. Ingrese la identificación del estudiante."
            },
            numMonto: {
                required: "Campo obligatorio. Indique el monto del pago.",
                number: "Por favor, ingrese un monto numérico válido.",
                min: "El monto debe ser mayor a cero."
            },
            txtTipoCurso: {
                required: "Campo obligatorio. Ingrese el ID del curso.",
                digits: "El ID del curso debe ser un número entero."
            }
        },
        errorElement: "div",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".mb-3, .mb-4").append(error);
        },
        highlight: function (element) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });
});