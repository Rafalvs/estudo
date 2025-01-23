let salarioInput = document.querySelector("#salario");
let transporteInput = document.querySelector("#transporte");
let sonoInput = document.querySelector("#sono");
let escalas = document.getElementsByName("escalas");
let resultado = document.querySelector("#resultado");

let botaoCalc = document.querySelector("#btnCalcular");
let botaoLimp = document.querySelector("#btnLimpar");

botaoCalc.addEventListener("click", checar);
botaoLimp.addEventListener("click", limpar);

/* horas totais de cada escala:

6 x 1 = 48h semanais = 208h mensais | 26 dias de trabalho
5 x 2 = 40h semanais = 176h mensais | 22 dias de trabalho
4 x 3 = 32h semanais = 128h mensais | 18 dias de trabalho
12 x 36 = 36h ou 48h semanais = 196h mensais | 15 dias de trabalho
24 x 48 = 48h ou 72h = 240h mensais | 10 dias de trabalho */
const seis_por_um_semana = 48;
const seis_por_um_mes = 208;
const seis_por_um_folga = 26;

const cinco_por_dois_semana = 40;
const cinco_por_dois_mes = 176;
const cinco_por_dois_folga = 22;

const quatro_por_tres_semana = 32;
const quatro_por_tres_mes = 128;
const quatro_por_tres_folga = 18;

const doze_por_trinta_semana = 48;
const doze_por_trinta_mes = 196;
const doze_por_trinta_folga = 15;

const vinte_por_quarenta_semana = 72;
const vinte_por_quarenta_mes = 240;
const vinte_por_quarenta_folga = 10;

function checar()
{
    if (salarioInput.value < 100)
    {
        resultado.textContent = "Valor do salário inválido";
        salarioInput.focus();
        limparResultado();
    }

    else if (transporteInput.value < 1 || transporteInput.value > 24)
    {
        resultado.textContent = "Número de horas inválido";
        transporteInput.focus();
        limparResultado();
    }

    else if (sonoInput.value < 1 || sonoInput.value > 24)
    {
        resultado.textContent = "Número de horas inválido";
        sonoInput.focus();
        limparResultado();
    }

    else
    {
        calcular();
    }
}

function limparResultado()
{
    setTimeout(function()
    {
        resultado.textContent = '';
    }, 2000);
}

function calcular()
{
    let hSemanais;
    let hMensais;
    let salario;
    let transporte; 
    let sono;
    let escalaEscolhida = '';

    salario = parseFloat(salarioInput.value);
    transporte = parseFloat(transporteInput.value).toFixed(1);
    sono = parseFloat(sonoInput.value).toFixed(1);

    for (let i = 0; i < escalas.length; i++)
        {
            if (escalas[i].checked)
            {
                escalaEscolhida = escalas[i].value;
            }
        }

    switch(escalaEscolhida)
    {
        case '6x1':
            hSemanais = seis_por_um_semana
            hMensais = seis_por_um_mes
            mensagem(hSemanais, hMensais, seis_por_um_folga, salario, transporte, sono)
        break;
        case '5x2':
            hSemanais = cinco_por_dois_semana
            hMensais = cinco_por_dois_mes
            mensagem(hSemanais, hMensais, cinco_por_dois_folga, salario, transporte, sono)
        break;
        case '4x3':
            hSemanais = quatro_por_tres_semana
            hMensais = quatro_por_tres_mes
            mensagem(hSemanais, hMensais, quatro_por_tres_folga, salario, transporte, sono)
        break;
        case '12x36':
            hSemanais = doze_por_trinta_semana
            hMensais = doze_por_trinta_mes
            mensagem(hSemanais, hMensais, doze_por_trinta_folga, salario, transporte, sono)
        break;
        case '24x48':
            hSemanais = vinte_por_quarenta_semana
            hMensais = vinte_por_quarenta_mes
            mensagem(hSemanais, hMensais, vinte_por_quarenta_folga, salario, transporte, sono)
        break;
    }
}

function mensagem(horasSemanais, horasMensais, folga, salario, transporte, sono)
{
    let total_horas_mes = 730;
    let salario_por_hora = (salario / horasMensais).toFixed(2);
    let total_horas_dormidas = sono * 30;
    let total_de_transporte = transporte * folga;
    let total_trabalhado = horasMensais + total_de_transporte;
    let tempo_livre = total_horas_mes - (total_horas_dormidas + horasMensais + total_de_transporte);
    
    let resposta = 
        `Você trabalha ${horasSemanais}h por semana e ${horasMensais}h por mês, recebendo: ${salario_por_hora}R$ por hora.
        Você gasta ${total_de_transporte}h no transporte e dorme ${total_horas_dormidas}h no mês.
        No total o trabalho te custa ${total_trabalhado}h, sobrando ${tempo_livre}h de tempo livre.`;

    resultado.textContent = resposta;
}

function limpar()
{
    salarioInput.value = "";
    transporteInput.value = "";
    sonoInput.value = "";
    escalas[0].checked = false;
    escalas[1].checked = false;
    escalas[2].checked = false;
    escalas[3].checked = false;
    escalas[4].checked = false;
    resultado.textContent = "";
}