window.onload = function () {
  function linkClickedByCountry() {
    const labelsBarChart = [
      "Australia",
      "USA",
      "Canada",
      "UK",
      "India",
      "Bangladesh",
    ];
    const dataBarChart = {
      labels: labelsBarChart,
      datasets: [
        {
          label: "Total Click",
          backgroundColor: "white",
          borderColor: "white",
          data: [0, 10, 5, 2, 20, 30, 45],
        },
      ],
    };

    const options = {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: "Chart Title",
        },
        subtitle: {
          display: true,
          text: "Chart Subtitle",
          color: "blue",
          font: {
            size: 12,
            family: "tahoma",
            weight: "normal",
            style: "italic",
          },
          padding: {
            bottom: 10,
          },
        },
      },
    };

    const configBarChart = {
      type: "bar",
      data: dataBarChart,
      options: {},
    };

    var linkClickedByCountry = new Chart(
      document.getElementById("linkClickedByCountry"),
      configBarChart
    );
  }

  function topClickedLink() {
    const dataPie = {
      labels: ["JavaScript", "Python", "Ruby"],
      datasets: [
        {
          label: "My First Dataset",
          data: [300, 50, 100],
          backgroundColor: [
            "rgb(133, 105, 241)",
            "rgb(164, 101, 241)",
            "rgb(101, 143, 241)",
          ],
          hoverOffset: 4,
        },
      ],
    };

    const configPie = {
      type: "pie",
      data: dataPie,
      options: {
        responsive: true,
      },
    };

    var topClickedLink = new Chart(
      document.getElementById("topClickedLink"),
      configPie
    );
  }

  linkClickedByCountry();
  topClickedLink();

};
