const idades_inscritos = $('.idades_inscritos');
const idades = idades_inscritos.data("idades");
const quantidades_por_idades = idades_inscritos.data("quantidades_por_idades");

const dados_inscritos_por_idades = {
    labels: idades,
    datasets: [
        {
            label: 'INSCRITOS x IDADES',
            data: quantidades_por_idades,
            backgroundColor: 'rgba(204,24,14,0.65)',
        }
    ]
};

let espera_inscritos_por_idades;

const grafico_inscritos_por_idades = new Chart(idades_inscritos,{
    type: 'bar',
    data: dados_inscritos_por_idades,
    options: {
        // indexAxis: 'y',
        responsive: true,
        animation: {
            onComplete: () => {
                espera_inscritos_por_idades = true;
            },
            delay: (context) => {
                let delay = 0;
                if (context.type === 'data' && context.mode === 'default' && !espera_inscritos_por_idades) {
                    delay = context.dataIndex * 300 + context.datasetIndex * 100;
                }
                return delay;
            },
        },
        scales: {
            y: {
                max: Math.max.apply(null, quantidades_por_idades ) + 1,
            },
            x: {
                stacked: true,
                ticks: {
                    stepSize: 1
                }
            },
        }
    }
});