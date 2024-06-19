const calendar = document.querySelector('.calendar'),
date = document.querySelector('.date'),
daysContainer = document.querySelector('.days'),
prev = document.querySelector('.prev');
next = document.querySelector('.next'),
todayBtn = document.querySelector('.today-btn'),
gotoBtn = document.querySelector('.goto-btn'),
dateInput = document.querySelector('.date-input');



let today = new Date();
let activeDay;
let month  = today.getMonth();
let year = today.getFullYear();

const months = [
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
];

// funcition para adcionar dias

function initCalendar(){

    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);
    const prevLastDay = new Date(year, month, 0);
    const prevDays = prevLastDay.getDate();
    const lastDate = lastDay.getDate();
    const day = firstDay.getDay();
    const nextDays = 7 - lastDay.getDay() -1;
    // atualiza o mês
    date.innerHTML = months[month]+ " " + year;

    let days = '';

    // lista dia do mês passado
    for (let x = day; x > 0; x--) {
        days += `<div class="day prev-date">${prevDays - x + 1}</div>`;
      }

    for (let i = 1; i <= lastDate; i++) {
    // adicionando o dia de hj e aclass active 
    if (
        i === new Date().getDate() &&
        year === new Date().getFullYear() &&
        month === new Date().getMonth()
      ){
            days += `<div class="day today">${i}</div>`;
        }
        // adicionando os restantes dos dias da semana
        else{
            days += `<div class="day ">${i}</div>`;
        }
     }
    //  lista dias do proximo mês
    for(let j = 1; j <= nextDays; j++){
        days += `<div class="day next-date">${j}</div>`;
    }
     daysContainer.innerHTML = days;
}

initCalendar();

// lista os meses

function prevMonth(){
    month --;
    if(month < 0 ){
        month =11;
        year --;
    }
    initCalendar();
}

function nextMonth(){
    month ++;
    if(month > 11){
        month = 0;
        year ++;
    }
    initCalendar();
}

// executa as functions para listar os meses anteriores ou proximos

prev.addEventListener('click', prevMonth);
next.addEventListener('click', nextMonth);

 todayBtn.addEventListener('click', () => {
    today = new Date();
    month = today.getMonth();
    year = today.getFullYear();
    initCalendar();
 });

 dateInput.addEventListener('input', (e) => {
// permite somente numeros e remove qualquer outra  coisa
dateInput.value = dateInput.value.replace(/[^0-9/]/g, "");
// adciona / após 2 digitos na pesquisa mês/ano
if (dateInput.value.length === 2) {
    dateInput.value += "/";
}
// não permite mais que 7 caracteres na pesquisa mês/ano
if(dateInput.value.length > 7) {
    dateInput.value = dateInput.value.slice(0, 7);
}
if (e.inputType === "deleteContentBackward") {
    if (dateInput.value.length === 3) {
      dateInput.value = dateInput.value.slice(0, 2);
    }
}
 });

 gotoBtn.addEventListener("click", gotoDate);
//  localizar a data inserida na pesquisa

function gotoDate() {
    const dateArr = dateInput.value.split("/");
    // validação da data
    if (dateArr.length === 2) {
      if (dateArr[0] > 0 && dateArr[0] < 13 && dateArr[1].length === 4) {
        month = dateArr[0] - 1;
        year = dateArr[1];
        initCalendar();
        return;
      }
    }
    alert("Data invalida");
  }



