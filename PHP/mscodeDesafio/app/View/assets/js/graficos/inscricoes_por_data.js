const data_inscricoes = $('.data_inscricoes');

const datas = data_inscricoes.data("datas");

const quantidades_por_datas = data_inscricoes.data("quantidades_por_datas");

const dados_inscricoes_por_datas = {
    labels: datas,
    datasets: [
        {
            label: 'INSCRIÇÕES x DATAS',
            data: quantidades_por_datas,
            backgroundColor: 'rgba(204,24,14,0.65)',
            fill: true
        }
    ]
};

let espera_inscritos_por_datas;

const grafico_inscritos_por_datas = new Chart(data_inscricoes,{
    type: 'line',
    data: dados_inscricoes_por_datas,
    options: {
        elements: {
            line: {
                tension: 0.4
            }
        },
        // indexAxis: 'y',
        responsive: true,
        legend: {
            labels: {
                fontColor: "black",
                fontSize: 18
            }
        },
        animation: {
            onComplete: () => {
                espera_inscritos_por_datas = true;
            },
            delay: (context) => {
                let delay = 0;
                if (context.type === 'data' && context.mode === 'default' && !espera_inscritos_por_datas) {
                    delay = context.dataIndex * 80 + context.datasetIndex * 100;
                }
                return delay;
            },
        },
        scales: {
            x: {
                stacked: true,
            },
            y: {
                min: 0,
                max: Math.max.apply(null, quantidades_por_datas ) + 1,
                title: {
                    text: 'Número de Inscrito',
                    display: true,
                    font: {
                        size: 10
                    },
                    color: 'black'
                },
                stacked: true
            },
        }
    }
});