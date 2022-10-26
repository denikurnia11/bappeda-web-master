class BarChart {
    constructor(data, idChart, judul) {
        this.initializeChart(idChart, judul);
        this.data = data;
        this.lokasi = [...new Set(data.map(({ nama_lokasi }) => nama_lokasi))];
        this.labels = [...new Set(data.map(({ tahun }) => tahun))];
        this.refreshLabel();
        this.renderChart();
    }

    // filterByYear() {
    //     // Menampilkan tahun pada dropdown
    //     let option = "";
    //     this.labels.forEach((e) => {
    //         option += `<option value="${e}">${e}</option>`;
    //     });
    //     $(".start-date").html(`<option value="" disabled selected>Start Date</option> ${option}`);
    //     $(".end-date").html(`<option value="" disabled selected>End Date</option> ${option}`);

    //     const labels = this.labels;
    //     const data = this.data;
    //     const loc = this.lokasi;
    //     const chart = this.chart;
    //     let newLabels = [];
    //     let startDate = 0;
    //     let endDate = 99999;
    //     $(".start-date").on("change", function (e) {
    //         startDate = e.target.value;
    //         updateChart();
    //     });
    //     $(".end-date").on("change", function (e) {
    //         endDate = e.target.value;
    //         updateChart();
    //     });
    //     function updateChart() {
    //         // New Labels
    //         newLabels = labels.filter((item) => item >= startDate && item <= endDate);
    //         // Push label baru
    //         chart.data.labels = newLabels;
    //         // Ubah isi data
    //         loc.forEach((item, index) => {
    //             // filter data sesuai lokasi
    //             let newData = [];
    //             data.filter(({ nama_lokasi }) => item == nama_lokasi).forEach((e, i) => {
    //                 if (e.tahun >= startDate && e.tahun <= endDate) {
    //                     newData.push(e.value);
    //                     // Push Data
    //                     chart.data.datasets[index].label = e.nama_lokasi;
    //                 }
    //                 // Handle Lokasi Null
    //                 if (loc == "null") {
    //                     chart.data.datasets[index].label = "BANJARBARU";
    //                 }
    //             });
    //             chart.data.datasets[index].data = newData;
    //         });
    //         chart.update();
    //     }
    // }

    renderChart() {
        this.lokasi.forEach((item, index) => {
            // filter data sesuai lokasi
            this.data
                .filter(({ nama_lokasi }) => item == nama_lokasi)
                .forEach((e) => {
                    // Push Data
                    this.chart.data.datasets[index].data.push(e.value);
                    this.chart.data.datasets[index].label = e.nama_lokasi;
                    // Handle Lokasi Null
                    if (this.lokasi == "null") {
                        this.chart.data.datasets[index].label = "BANJARBARU";
                    }
                });
        });
        // Remove Undefined Datasets
        this.chart.data.datasets = this.chart.data.datasets.filter((e) => {
            return e.data.length !== 0;
        });

        // Add backgroundColor, borderColor and borderWidth
        this.chart.data.datasets.forEach((e) => {
            // if (e.label === "Penduduk Banjarbaru" || e.label === "Banjarbaru") {
            //     e.backgroundColor = "red";
            //     e.borderColor = "red";
            // } else {
            //     e.backgroundColor = "blue";
            //     e.borderColor = "blue";
            // }
            const c = randomColor();
            e.backgroundColor = c.color;
            e.borderColor = c.borderColor;
            e.borderWidth = 1;
            e.borderRadius = 3;
        });

        this.chart.update();
    }

    refreshLabel() {
        this.labels.forEach((item) => {
            this.chart.data.labels.push(item);
        });
    }

    initializeChart(idChart, judul) {
        const ctx = document.getElementById(idChart);
        this.chart = new Chart(ctx, {
            type: "bar",
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
                        anchor: "end",
                        align: "top",
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

                onClick(e) {
                    const chart = e.chart;
                    chart.options.plugins.zoom.zoom.wheel.enabled =
                        !chart.options.plugins.zoom.zoom.wheel.enabled;
                    chart.options.plugins.zoom.zoom.pinch.enabled =
                        !chart.options.plugins.zoom.zoom.pinch.enabled;
                    chart.update();
                    if (chart.options.plugins.zoom.zoom.wheel.enabled) {
                        $(".text-zoom").html("Zoom: Enabled");
                    } else {
                        $(".text-zoom").html("Zoom: Disabled");
                    }
                },
            },
        });
    }
}
