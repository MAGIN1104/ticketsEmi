// const typed = new Typed('.escrib', {
//     strings:[
//         '<i class="titulo">ESCUELA MILITAR DE INGENIERÍA</i>',
//         '<i class="titulo">PRESTIGIO</i>',
//         '<i class="titulo">DISCIPLINA</i>',
//         '<i class="titulo">MEJORES OPORTUNIDADES</i>',
//         '<i class="titulo">P4510N X L4 S36UR1D4D</i>'
//     ],
//     typeSpeed:100,
//     loop:true,
//     backSpeed:45,
//     shuffle:false,
//     startDelay:500,
//     backDelay:45,
//     cursorChar:'_',
//     showCursor:true
// });


document.getElementById("validateGC").addEventListener("submit",function(evt)
{
    var response = grecaptcha.getResponse();
    if(response.length == 0)
    {
        alert("Porfavor verifica que eres un humano!!!");
        evt.preventDefault();
        return false;
    }
});

function verificar(){
    var nombre= document.getElementById("nombres").value
    var apellidos=document.getElementById("apellidos").value
    var email=document.getElementById("correo").value
    var celular= document.getElementById("celular").value
    var unidad= document.getElementById("unidad").value
    var asunto=document.getElementById("asunto").value
    var mensaje=document.getElementById("mensaje").value

    if(nombre=="" || apellidos=="" || email==""||unidad=="" || asunto=="" || mensaje==""){
        AlertaError()
        
    }else{
        if(celular!=""){
            if( parseInt(celular)>=60000000 && parseInt(celular)<=79999999){
                document.formulario.submit()
                AlertaSuccess();
            }else{
                AlertaError2();
                return 0;
            }
        }else{
            document.formulario.submit()
            AlertaSuccess();
        }
    }


}
function AlertaSuccess(){
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
      })
}
function AlertaError(){
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Datos Incompletos',
        showConfirmButton: false,
        timer: 1300
      })
}
function AlertaError2(){
    Swal.fire({
        position: 'top-end',
        icon: 'question',
        title: 'Introduzca un número valido',
        showConfirmButton: false,
        timer: 1500
      })
}