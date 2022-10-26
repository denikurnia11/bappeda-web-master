function analisis(e, classDeskripsi) {
    // console.log(classDeskripsi);
    // meambil objek pada response
    const { data, labels, lokasi } = e;
    // console.log(lokasi);
    let value = []; // Buat analisis
    let valueTahunAkhir = []; // Buat perengkingan
    let nilaiTahunAkhir = [];
    const tahunAkhir = labels[labels.length - 1];

    lokasi.forEach((item, index) => {
        // filter data sesuai lokasi
        data.filter(({ nama_lokasi }) => item == nama_lokasi).forEach((e) => {
            // For analytic
            if (e.nama_lokasi === "Banjarbaru" || e.nama_lokasi === "null") {
                value.push(parseFloat(e.value));
            } else if (e.nama_lokasi === "Penduduk Banjarbaru") {
                value.push(parseFloat(e.value));
            }
            // Data tahun terakhir untuk perengkingan
            if (e.tahun == tahunAkhir) {
                valueTahunAkhir.push(e);
                nilaiTahunAkhir.push(e.value);
            }
            // End For Analytic
        });
    });
    // Perengkingan lokasi
    let ranking = [];
    nilaiTahunAkhir = nilaiTahunAkhir.sort((a, b) => a - b);
    nilaiTahunAkhir.forEach((e, i) => {
        valueTahunAkhir.forEach((x) => {
            if (x.value == nilaiTahunAkhir[i]) {
                ranking.push(x);
            }
        });
    });
    let rankBJB = 0;
    ranking.reverse().forEach((e, i) => {
        if (e.nama_lokasi == "Banjarbaru" || e.nama_lokasi == "Penduduk Banjarbaru") {
            rankBJB = i;
        } else if (e.nama_lokasi == "null") {
            rankBJB = -1;
        }
    });
    // console.log(rankBJB);

    let kondisiRank = "";
    if (rankBJB == -1) {
        rankBJB = 0;
        kondisiRank = ``;
    } else if (rankBJB != 0 && rankBJB != ranking.length - 1) {
        kondisiRank = `di ikuti ${ranking[rankBJB - 1].nama_lokasi} <span class="fw-bolder"> (${
            ranking[rankBJB - 1].value
        })</span> pada posisi ke-<span class="fw-bolder">${rankBJB}</span> dan ${
            ranking[rankBJB + 1].nama_lokasi
        } <span class="fw-bolder">(${
            ranking[rankBJB + 1].value
        })</span> pada posisi ke-<span class="fw-bolder">${rankBJB + 2}</span>`;
    } else if (rankBJB != 0 && rankBJB == ranking.length - 1) {
        kondisiRank = `di ikuti ${ranking[rankBJB - 1].nama_lokasi} <span class="fw-bolder"> (${
            ranking[rankBJB - 1].value
        })</span> pada posisi ke-<span class="fw-bolder">${rankBJB}</span>`;
    } else if (rankBJB == 0 && ranking.length != 1) {
        kondisiRank = `di ikuti ${ranking[rankBJB + 1].nama_lokasi} <span class="fw-bolder"> (${
            ranking[rankBJB + 1].value
        })</span> pada posisi ke-<span class="fw-bolder">${rankBJB + 2}</span> dan ${
            ranking[rankBJB + 2].nama_lokasi
        } <span class="fw-bolder"> (${
            ranking[rankBJB + 2].value
        })</span> pada posisi ke-<span class="fw-bolder">${rankBJB + 3}</span>`;
    }

    // End Perengkingan lokasi

    // Analisis card besar
    const dataTahunSebelum = value[value.length - 2];
    const dataTahunAkhir = value[value.length - 1];
    const selisih = parseFloat((dataTahunAkhir - dataTahunSebelum).toFixed(2));
    const persentase = parseFloat(((selisih / Math.abs(dataTahunSebelum)) * 100).toFixed(2));
    let kondisi = "";

    // Ubah content analytic
    $(".text-tahun").html("Kota Banjarbaru Tahun " + labels[labels.length - 1]);
    if (persentase >= 0) {
        $(".nilai").html(
            dataTahunAkhir +
                `<span class="fs-6 pangkat position-absolute top-10 start-80 translate-middle badge rounded-pill bg-success">
                    +${persentase}%
                </span>`
        );
        // For Deskripsi Chart
        kondisi = `mengalami kenaikan sebesar <span class="fw-bolder">${selisih}</span> atau <span class="fw-bolder">${persentase}%</span> dari tahun sebelumnya.`;
    } else if (persentase < 0) {
        $(".nilai").html(
            dataTahunAkhir +
                `<span class="fs-6 pangkat position-absolute top-10 start-80 translate-middle badge rounded-pill bg-danger">
                    ${persentase}%
                </span>`
        );
        // For Deskripsi Chart
        kondisi = `mengalami penurunan sebesar <span class="fw-bolder">${persentase}%</span> dari tahun sebelumnya.`;
    }
    // End Analisis card besar
    // ============================================================================================
    // Deskripsi Chart
    // Nilai Max
    const nilaiMaks = Math.max(...value);
    const tahunNilaiMaks = labels[value.indexOf(nilaiMaks)];
    // Nilai Min
    const nilaiMin = Math.min(...value);
    const tahunNilaiMin = labels[value.indexOf(nilaiMin)];
    // Menghitung rerata jumlah
    const rerata = (
        value.reduce(function (total, num) {
            return total + num;
        }) / value.length
    ).toFixed(2);

    // Menghitung rerata pertumbuhan
    let hasil = [];
    // Hitung persentase dari tahun ke tahun
    hasil = value.map(function (e, i) {
        return ((value[i + 1] - e) / e) * 100;
    });
    // Remove NaN element
    hasil = hasil.filter(function (value) {
        return !Number.isNaN(value);
    });
    // Total semua persentase
    hasil = hasil.reduce(function (total, angka) {
        return total + angka;
    });
    // Bagi total angka
    hasil = hasil / (value.length - 1);

    // Prediksi nilai tahun selanjutnya
    const prediksi = (dataTahunAkhir + (dataTahunAkhir * hasil) / 100).toFixed(2);
    // Render Deskripsi Chart
    $(`.${classDeskripsi}`).html(
        `<div class="card border-0 my-4">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p class="text-center display-4 fw-bolder">Deskripsi Diagram</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <ul>
                            <li>Berdasarkan tahun ${
                                labels[labels.length - 1]
                            } Kota Banjarbaru mengalami ${kondisi}</li>
                            <li>Pada tahun ${
                                labels[labels.length - 1]
                            } Kota Banjarbaru menempati posisi <span class="fw-bolder"> ke-${
            rankBJB + 1
        } (${dataTahunAkhir}) </span>${kondisiRank}</li>
                            <li>Angka tertinggi yang dimiliki Kota Banjarbaru yaitu sebesar <span class="fw-bolder ">${nilaiMaks}</span> pada tahun <span class="fw-bolder">${tahunNilaiMaks}</span></li>
                            <li>Angka terendah yang dimiliki Kota Banjarbaru yaitu sebesar <span class="fw-bolder ">${nilaiMin}</span> pada tahun <span class="fw-bolder">${tahunNilaiMin}</span></li>
                            <li>Rata-rata angka yang dimiliki Kota Banjarbaru dari tahun 
                            ${labels[0]} sampai 
                            ${labels[labels.length - 1]} 
                            sebesar <span class="fw-bolder ">${rerata}</span>
                            </li>
                            <li>Rata-rata angka pertumbuhan Kota Banjarbaru dari tahun ke tahun yaitu <span class="fw-bolder">
                              ${hasil.toFixed(2)}%</span>
                           </li>
                           <li>Berdasarkan angka rata-rata pertumbuhan yang didapat maka dapat diprediksi angka pada tahun <span class="fw-bolder"> ${
                               parseInt(labels[labels.length - 1]) + 1
                           }</span>
                           sebesar <span class="fw-bolder "> ${prediksi}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>`
    );
    // End Deskripsi Chart
    // ============================================================================================
}

function randomColor() {
    const rc = () => (Math.random() * 256) >> 0;
    const r = rc(),
        g = rc(),
        b = rc();
    const color = `rgba(${r}, ${g}, ${b},${0.8})`;
    const borderColor = `rgba(${r}, ${g}, ${b},${1})`;
    const fillColor = `rgba(${r}, ${g}, ${b},${0.2})`;
    return { color, borderColor, fillColor };
}

function changeColor(myChart) {
    if (myChart.config.type === "bar") {
        myChart.data.datasets.forEach((e) => {
            const c = randomColor();
            e.backgroundColor = c.color;
            e.borderColor = c.borderColor;
        });
    } else if (myChart.config.type === "pie") {
        // console.log();
        let bgColor = [];
        myChart.data.datasets[0].backgroundColor.forEach((e) => {
            const c = randomColor();
            bgColor.push(c.color);
        });
        myChart.data.datasets[0].backgroundColor = bgColor;
        myChart.update();
    } else {
        myChart.data.datasets.forEach((e) => {
            const c = randomColor();
            e.backgroundColor = c.fillColor;
            e.borderColor = c.borderColor;
        });
    }
    myChart.update();
}

function action(chart, chart2) {
    // Zoom
    $(".zoom-action").on("click", function () {
        chart.chart.resetZoom();
    });
    $(".zoom-action2").on("click", function () {
        chart2.chart.resetZoom();
    });

    // Color
    $(".color-action").on("click", function () {
        changeColor(chart.chart);
    });
    $(".color-action2").on("click", function () {
        changeColor(chart2.chart);
    });

    // Fill
    $(".fill-action").on("click", function () {
        chart2.chart.options.fill = !chart2.chart.options.fill;
        chart2.chart.update();
    });

    // Label
    $(".label-action").on("click", function () {
        if (chart.chart.config.plugins.length != 0) {
            chart.chart.config.plugins.shift();
            $(".label-action").html("Show Labels");
        } else {
            chart.chart.config.plugins.push(ChartDataLabels);
            $(".label-action").html("Hide Labels");
        }
        chart.chart.update();
    });
    $(".label-action2").on("click", function () {
        if (chart2.chart.config.plugins.length != 0) {
            chart2.chart.config.plugins.shift();
            $(".label-action2").html("Show Labels");
        } else {
            chart2.chart.config.plugins.push(ChartDataLabels);
            $(".label-action2").html("Hide Labels");
        }
        chart2.chart.update();
    });

    // Filter By Year
    filterByYear(chart, "start-date", "end-date", "deskripsi-chart");
    filterByYear(chart2, "start-date2", "end-date2", "deskripsi-chart");
}

function action2(chart3, chart4) {
    // Zoom
    $(".zoom-action3").on("click", function () {
        chart3.chart.resetZoom();
    });
    $(".zoom-action4").on("click", function () {
        chart4.chart.resetZoom();
    });
    // Color
    $(".color-action3").on("click", function () {
        changeColor(chart3.chart);
    });
    $(".color-action4").on("click", function () {
        changeColor(chart4.chart);
    });
    // Fill
    $(".fill-action4").on("click", function () {
        chart4.chart.options.fill = !chart4.chart.options.fill;
        chart4.chart.update();
    });
    // Label
    $(".label-action3").on("click", function () {
        if (chart3.chart.config.plugins.length != 0) {
            chart3.chart.config.plugins.shift();
            $(".label-action3").html("Show Labels");
        } else {
            chart3.chart.config.plugins.push(ChartDataLabels);
            $(".label-action3").html("Hide Labels");
        }
        chart3.chart.update();
    });
    $(".label-action4").on("click", function () {
        if (chart4.chart.config.plugins.length != 0) {
            chart4.chart.config.plugins.shift();
            $(".label-action4").html("Show Labels");
        } else {
            chart4.chart.config.plugins.push(ChartDataLabels);
            $(".label-action4").html("Hide Labels");
        }
        chart4.chart.update();
    });
    // Filter By Year
    filterByYear(chart3, "start-date3", "end-date3", "deskripsi-chart2");
    filterByYear(chart4, "start-date4", "end-date4", "deskripsi-chart2");
}

function actionGeo(chart) {
    $(".color-action5").on("click", function () {
        changeColor(chart.chart);
    });
    $(".label-action5").on("click", function () {
        if (chart.chart.config.plugins.length != 0) {
            chart.chart.config.plugins.shift();
            $(".label-action5").html("Show Labels");
        } else {
            chart.chart.config.plugins.push(ChartDataLabels);
            $(".label-action5").html("Hide Labels");
        }
        chart.chart.update();
    });
}

// FILTER BY YEAR
function filterByYear(chart, classStart, classEnd, classDeskripsi) {
    let labels = chart.chart.data.labels;
    let data = chart.data;
    let loc = chart.lokasi;
    let myChart = chart.chart;
    // Render start-date dan end-date
    let option = "";
    labels.forEach((e) => {
        option += `<option value="${e}">${e}</option>`;
    });
    $(`.${classStart}`).html(`<option value="" disabled selected>Start Date</option> ${option}`);
    $(`.${classEnd}`).html(`<option value="" disabled selected>End Date</option> ${option}`);

    let newLabels = [];
    let startDate = 0;
    let endDate = 99999;

    $(`.${classStart}`).on("change", function (e) {
        startDate = e.target.value;
        updateChart();
    });
    $(`.${classEnd}`).on("change", function (e) {
        endDate = e.target.value;
        updateChart();
    });

    function updateChart() {
        // New Labels
        newLabels = labels.filter((item) => item >= startDate && item <= endDate);
        // Push label baru
        myChart.data.labels = newLabels;
        // Ubah isi data
        let newDataObjek = [];
        loc.forEach((item, index) => {
            // filter data sesuai lokasi
            let newData = [];
            data.filter(({ nama_lokasi }) => item == nama_lokasi).forEach((e, i) => {
                if (e.tahun >= startDate && e.tahun <= endDate) {
                    newDataObjek.push(e);
                    newData.push(e.value);
                    // Push Data
                    myChart.data.datasets[index].label = e.nama_lokasi;
                }
                // Handle Lokasi Null
                if (loc == "null") {
                    myChart.data.datasets[index].label = "Banjarbaru";
                }
            });
            myChart.data.datasets[index].data = newData;
        });
        myChart.update();

        // Timpa data lama untuk analisis
        chart.data = newDataObjek;
        chart.labels = newLabels;
        analisis(chart, classDeskripsi);
    }
}
