const typed = new Typed('.typed', {
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

function celular(){
    var cel=document.getElementById('celular')
    var num=parseInt(cel.value)
    var aux = num/100000
    var rest= num%100000
    if(aux==6 || aux ==7 && rest>=100000 && rest<=999999){
        document.getElementById('alerta').style.display='block';
    }else{
        document.getElementById('alerta').style.display='none';
    }
}