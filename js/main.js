const typed = new Typed('.escrib', {
    strings:[
        '<i class="titulo">ESCUELA MILITAR DE INGENIERÍA</i>',
        '<i class="titulo">PRESTIGIO</i>',
        '<i class="titulo">DISCIPLINA</i>',
        '<i class="titulo">MEJORES OPORTUNIDADES</i>',
        '<i class="titulo">P4510N X L4 S36UR1D4D</i>'
    ],
    typeSpeed:100,
    loop:true,
    backSpeed:45,
    shuffle:false,
    startDelay:500,
    backDelay:45,
    cursorChar:'_',
    showCursor:true
});


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

$(document).ready(function() {
    $('input#celular').characterCounter();
  });