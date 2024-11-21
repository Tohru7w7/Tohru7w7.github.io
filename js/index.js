const ctx = document.getElementById('chartIngresos');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      datasets: [{
        label: '# of Votes',
        data: [20000, 300000, 150000, 370000, 200000, 290000,195000,170000,420000,109000,99000,50000],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  const ctx1 = document.getElementById('chartCategorias');

  new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: ['Delineadores', 'Rimel', 'Serum', 'Body Lotion'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 5, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });