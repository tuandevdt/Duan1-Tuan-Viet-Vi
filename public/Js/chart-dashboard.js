const ctx = document.getElementById('canvas');
const ctx_circle = document.getElementById('canvas-circle');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
      borderWidth: 1,
  backgroundColor: ['red', 'blue', 'yellow', 'green', 'purple', 'orange']
    }],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
new Chart(ctx_circle, {
  type: 'pie',
  data: {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
      borderWidth: 1,
      backgroundColor: ['red', 'blue', 'yellow', 'green', 'purple', 'orange']
  }],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});