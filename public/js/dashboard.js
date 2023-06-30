function initDashboard(config) {
    var optionsRanked = {
        annotations: {
            position: 'back'
        },
        dataLabels: {
            enabled:false
        },
        chart: {
            type: 'bar',
            height: 300
        },
        fill: {
            opacity:1
        },
        plotOptions: {
        },
        series: config.optionsRanked.series,
        colors: '#435ebe',
        xaxis: config.optionsRanked.xaxis,
    }
    let optionsSuccessError  = {
        series: config.optionsSuccessError.series,
        labels: config.optionsSuccessError.labels,
        colors: ['#57caeb', '#5ddab4', '#ff7976', '#ff9976', '#ffe776', '#bbbbbb'],
        chart: {
            type: 'donut',
            width: '100%',
            height:'350px'
        },
        legend: {
            position: 'bottom'
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '30%'
                }
            }
        }
    }

    var optionsTotal = {
        series: config.optionsTotal.series,
        chart: {
            height: 240,
            type: 'area',
            toolbar: {
                show:false,
            },
        },
        colors: ['#5350e9', '#008b75', '#dc3545'],
        stroke: {
            width: 2,
        },
        grid: {
            show:false,
        },
        dataLabels: {
            enabled: false
        },
        xaxis: {
            type: 'date',
            categories: config.optionsTotal.xaxis.categories,
            axisBorder: {
                show:false
            },
            axisTicks: {
                show:false
            },
            labels: {
                show:false,
            },
            tooltip: {
                enabled: false
            }
        },
        show:false,
        yaxis: {
            labels: {
                show:false,
            },
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy'
            },
            y: {
                format: 'dd/MM/yy'
            },
            z: {
                format: 'dd/MM/yy'
            },
        },
    };

    var chartRanked = new ApexCharts(document.getElementById("chart-ranked"), optionsRanked);
    var chartSuccessError = new ApexCharts(document.getElementById('chart-success-error'), optionsSuccessError)
    var chartTotal = new ApexCharts(document.getElementById("chart-total"), optionsTotal);

    chartTotal.render();
    chartRanked.render();
    chartSuccessError.render()
}