var radialGradientSuhuOptions = {
    series: [75],
    chart: {
        height: 350,
        type: "radialBar",
    },
    colors: ["#FF5733"],
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: "22px",
                },
                value: {
                    fontSize: "16px",
                },
                total: {
                    show: true,
                    label: "Suhu",
                    formatter: function () {
                        return "75°C";
                    },
                },
            },
        },
    },
    labels: ["Suhu"],
};

var radialGradientKelembabanOptions = {
    series: [65],
    chart: {
        height: 350,
        type: "radialBar",
    },
    colors: ["#33C4FF"],
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: "22px",
                },
                value: {
                    fontSize: "16px",
                },
                total: {
                    show: true,
                    label: "Kelembaban",
                    formatter: function () {
                        return "65%";
                    },
                },
            },
        },
    },
    labels: ["Kelembaban"],
};

var radialGradientNitrogenOptions = {
    series: [40],
    chart: {
        height: 350,
        type: "radialBar",
    },
    colors: ["#75FF33"],
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: "22px",
                },
                value: {
                    fontSize: "16px",
                },
                total: {
                    show: true,
                    label: "Nitrogen",
                },
            },
        },
    },
    labels: ["Nitrogen"],
};

var radialGradientFosforOptions = {
    series: [30],
    chart: {
        height: 350,
        type: "radialBar",
    },
    colors: ["#FFD733"],
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: "22px",
                },
                value: {
                    fontSize: "16px",
                },
                total: {
                    show: true,
                    label: "Fosfor",
                },
            },
        },
    },
    labels: ["Fosfor"],
};

var radialGradientKaliumOptions = {
    series: [50],
    chart: {
        height: 350,
        type: "radialBar",
    },
    colors: ["#FF33B5"],
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: "22px",
                },
                value: {
                    fontSize: "16px",
                },
                total: {
                    show: true,
                    label: "Kalium",
                },
            },
        },
    },
    labels: ["Kalium"],
};

// Render grafik
var radialGradientSuhu = new ApexCharts(
    document.querySelector("#radialGradientSuhu"),
    radialGradientSuhuOptions
);
var radialGradientKelembaban = new ApexCharts(
    document.querySelector("#radialGradientKelembaban"),
    radialGradientKelembabanOptions
);
var radialGradientNitrogen = new ApexCharts(
    document.querySelector("#radialGradientNitrogen"),
    radialGradientNitrogenOptions
);
var radialGradientFosfor = new ApexCharts(
    document.querySelector("#radialGradientFosfor"),
    radialGradientFosforOptions
);
var radialGradientKalium = new ApexCharts(
    document.querySelector("#radialGradientKalium"),
    radialGradientKaliumOptions
);

// Render semua grafik
radialGradientSuhu.render();
radialGradientKelembaban.render();
radialGradientNitrogen.render();
radialGradientFosfor.render();
radialGradientKalium.render();

var suhuData = [75, 70, 80, 85, 90, 75, 80]; // Data suhu awal
var kelembabanData = [65, 60, 70, 75, 80, 65, 70]; // Data kelembaban awal

var options = {
    chart: {
        height: 350,
        type: "line",
        stacked: false,
    },
    series: [
        {
            name: "Suhu",
            data: suhuData,
        },
        {
            name: "Kelembaban",
            data: kelembabanData,
        },
    ],
    xaxis: {
        categories: [
            "Senin",
            "Selasa",
            "Rabu",
            "Kamis",
            "Jumat",
            "Sabtu",
            "Minggu",
        ],
    },
    colors: ["#FF5733", "#33C4FF"],
};

// Render grafik
var lineChart = new ApexCharts(document.querySelector("#lineChart"), options);
lineChart.render();

setInterval(function () {
    var newSuhu = Math.floor(Math.random() * 100);
    var newKelembaban = Math.floor(Math.random() * 100);

    // Update grafik radial suhu dan kelembaban
    radialGradientSuhu.updateSeries([newSuhu]);
    radialGradientKelembaban.updateSeries([newKelembaban]);

    // Tambahkan data baru ke grafik garis
    suhuData.push(newSuhu);
    kelembabanData.push(newKelembaban);

    // Batasi jumlah data yang ditampilkan
    if (suhuData.length > 7) {
        suhuData.shift();
        kelembabanData.shift();
    }

    // Perbarui grafik garis
    lineChart.updateSeries([
        {
            name: "Suhu",
            data: suhuData,
        },
        {
            name: "Kelembaban",
            data: kelembabanData,
        },
    ]);
}, 3600000); // Perbarui setiap 1 jam (3600000 ms)

setInterval(function () {
    // Simulasikan data baru untuk Nitrogen, Fosfor, dan Kalium
    var newNitrogen = Math.floor(Math.random() * 100);
    var newFosfor = Math.floor(Math.random() * 100);
    var newKalium = Math.floor(Math.random() * 100);

    console.log(
        "Data Baru - Nitrogen: " +
            newNitrogen +
            " mg/kg, Fosfor: " +
            newFosfor +
            " mg/kg, Kalium: " +
            newKalium +
            " mg/kg"
    );

    // Update label total dengan nilai terbaru
    radialGradientNitrogen.updateOptions({
        plotOptions: {
            radialBar: {
                total: {
                    formatter: function () {
                        return newNitrogen + " mg/kg";
                    },
                },
            },
        },
    });

    radialGradientFosfor.updateOptions({
        plotOptions: {
            radialBar: {
                total: {
                    formatter: function () {
                        return newFosfor + " mg/kg";
                    },
                },
            },
        },
    });

    radialGradientKalium.updateOptions({
        plotOptions: {
            radialBar: {
                total: {
                    formatter: function () {
                        return newKalium + " mg/kg";
                    },
                },
            },
        },
    });

    // Update grafik radial untuk Nitrogen, Fosfor, dan Kalium
    radialGradientNitrogen.updateSeries([newNitrogen]);
    radialGradientFosfor.updateSeries([newFosfor]);
    radialGradientKalium.updateSeries([newKalium]);
}, 5000); // Perbarui setiap 5 detik
