document.addEventListener("DOMContentLoaded", function () {
    // График клиентов по статусу подписки
    fetch('analytics.php')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Membership_status);
            const values = data.map(item => item.count);

            const ctx = document.getElementById('clientsChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Количество клиентов',
                        data: values,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch(error => console.error('Ошибка:', error));
            // График посещаемости
        fetch('analytics_attendances.php')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Id_schedule);
            const values = data.map(item => item.count);

            const ctxAttendances = document.getElementById('attendancesChart').getContext('2d');
            new Chart(ctxAttendances, {
                type: 'polarArea',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Количество посещений',
                        data: values,
                        backgroundColor: ['rgba(153, 102, 255, 0.2)', 'rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                        borderColor: ['rgba(153, 102, 255, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw;
                                }
                            }
                        }
                    }
                }
            });
        })
        .catch(error => console.error('Ошибка:', error));

    // График по залам
    fetch('analytics_rooms.php')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Name);
            const values = data.map(item => item.Capacity);

            const ctxRooms = document.getElementById('roomsChart').getContext('2d');
            new Chart(ctxRooms, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Ёмкость залов',
                        data: values,
                        backgroundColor: 'rgba(255, 159, 64, 0.2)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        borderWidth: 1,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch(error => console.error('Ошибка:', error));

    // График по тренировкам
    fetch('analytics_trainings.php')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Name);
            const values = data.map(item => item.count);

            const ctxTrainings = document.getElementById('trainingsChart').getContext('2d');
            new Chart(ctxTrainings, {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Количество тренировок',
                        data: values,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch(error => console.error('Ошибка:', error));
});

