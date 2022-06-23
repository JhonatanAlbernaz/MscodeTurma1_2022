const inscritos_por_admins = $('.inscritos_por_admins');
const admins = inscritos_por_admins.data("admins");
const quantidades_por_admins = inscritos_por_admins.data("quantidades_por_admins");
const dados_inscricoes_por_admins = {
    labels: admins,
    datasets: [
        {
            label: 'Número de inscritos por admins',
            data: quantidades_por_admins,
            backgroundColor: 'rgba(204,24,14,0.65)',
        }
    ]
};

let delayed;

const chartGraph = new Chart(inscritos_por_admins,{
    type: 'bar',
    data: dados_inscricoes_por_admins,
    options: {
        responsive: true,
        legend: {
            labels: {
                fontColor: "black",
                fontSize: 18
            }
        },
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
                max: Math.max.apply(null, quantidades_por_admins) + 2,
            },
        }
    }
})