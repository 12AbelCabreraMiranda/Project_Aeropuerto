(function(){

    var actualizarHora = function(){
        //Codigos de Fechas
        var fecha = new Date(), //Date: tiene que ir con inicial mayuscula
        horas = fecha.getHours(),
        ampm,
        minutos = fecha.getMinutes(),
        segundos = fecha.getSeconds(),
        diaSemana = fecha.getDay(),
        dia = fecha.getDate(),
        mes = fecha.getMonth(),
        year = fecha.getFullYear();

    var pHoras = document.getElementById('horas'),
        pAMPM = document.getElementById('ampm'),
        pMinutos = document.getElementById('minutos'),
        pSegundos = document.getElementById('segundos'),
        pDiaSemana = document.getElementById('diaSemana'),
        pDia = document.getElementById('dia'),
        pMes = document.getElementById('mes'),
        pYear = document.getElementById('year');
                    //    0         1       2           3       4           5       6  
        var semana = ["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];    
        pDiaSemana.textContent = semana[diaSemana];//diaSemana: trae un numero del 1 al 6 
        pDia.textContent =dia;
        var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];    
        pMes.textContent = meses[mes];
        pYear.textContent = year;

        //Codigos de horas
        if(horas >=12){
            horas = horas-12;
            ampm = 'PM';
            
        }else{
            ampm = 'AM';
        }
        if(horas == 0){
            horas =12;
        };
        if(horas <10){horas = "0" + horas};
        pHoras.textContent = horas; 
        pAMPM.textContent = ampm;

        if(minutos <10){ minutos = "0" + minutos};
        if(segundos<10){ segundos = "0" + segundos};
        pMinutos.textContent = minutos;
        pSegundos.textContent = segundos;
    };
    actualizarHora();
    var intervalo = setInterval(actualizarHora, 1000);
}())