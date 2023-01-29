<script>
var xValues = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
var yValues = [$('#jan').text(), $('#fev').text(),  $('#mar').text(), $('#abr').text(), $('#mai').text(), $('#jul').text(), $('#jun').text(), $('#ago').text(), $('#set').text(), $('#out').text(), $('#nov').text(), $('#dez').text(), ];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,0,1.0)",
      borderColor: "rgba(0,0,0,0.5)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,
                                max:6000,
                                min: 500
                            }
                        }]
                },
  }
});
</script>