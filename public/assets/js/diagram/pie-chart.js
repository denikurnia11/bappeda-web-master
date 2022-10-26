// Khusus Geografi
class PieChart {
    constructor(data, idChart, judul) {
        this.initializeChart(idChart, judul);
        this.data = data;
        this.lokasi = [...new Set(data.map(({ nama_lokasi }) => nama_lokasi))];
        this.refreshLabel();
        this.renderChart();
    }

    renderChart() {
        // filter data sesuai lokasi
        this.data.forEach((e) => {
            // Push Data
            this.chart.data.datasets[0].data.push(e.value);
            // this.chart.data.datasets[index].label = e.lokasi;
        });

        // Remove Undefined Datasets
        this.chart.data.datasets = this.chart.data.datasets.filter((e) => {
            return e.data.length !== 0;
        });

        // Add backgroundColor, borderColor and borderWidth
        let bgColor = [];
        this.lokasi.forEach((e) => {
            const c = randomColor();
            bgColor.push(c.color);
        });
        this.chart.data.datasets[0].backgroundColor = bgColor;
        this.chart.update();
    }

    refreshLabel() {
        this.lokasi.forEach((item) => {
            this.chart.data.labels.push(item);
        });
    }

    initializeChart(idChart, judul) {
        const ctx = document.getElementById(idChart);
        this.chart = new Chart(ctx, {
            type: "pie",
            data: {
                labels: [],
                datasets: [{}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}],
            },
            plugins: [ChartDataLabels],
            options: {
                maintainAspectRatio: true,
                scales: {
                    y: {
                        beginAtZero: false,
                    },
                },
                plugins: {
                    datalabels: {
                        anchor: "center",
                        align: "middle",
                        labels: {
                            title: {
                                font: {
                                    weight: "bold",
                                },
                            },
                            value: {
                                color: "black",
                            },
                        },
                    },
                    title: {
                        display: true,
                        text: judul,
                        font: {
                            size: 18,
                        },
                    },
                    legend: {
                        display: true,
                        labels: {
                            // boxWidth: 12,
                            usePointStyle: true,
                            pointStyle: "rectRounded",
                        },
                        position: "bottom",
                    },
                    zoom: {
                        zoom: {
                            wheel: {
                                enabled: false,
                            },
                            pinch: {
                                enabled: false,
                            },
                            mode: "xy",
                        },
                        pan: {
                            enabled: true,
                            mode: "xy",
                        },
                    },
                },

                // onClick(e) {
                //     const chart = e.chart;
                //     chart.options.plugins.zoom.zoom.wheel.enabled =
                //         !chart.options.plugins.zoom.zoom.wheel.enabled;
                //     chart.options.plugins.zoom.zoom.pinch.enabled =
                //         !chart.options.plugins.zoom.zoom.pinch.enabled;
                //     chart.update();
                //     if (chart.options.plugins.zoom.zoom.wheel.enabled) {
                //         $(".text-zoom").html("Zoom: Enabled");
                //     } else {
                //         $(".text-zoom").html("Zoom: Disabled");
                //     }
                // },
            },
        });
    }
}
