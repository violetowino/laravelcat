// public/js/user_registration_chart.js
fetch('/api/getUserRegistrationData')
    .then(response => response.json())
    .then(data => {
        const months = data.months;
        const userCounts = data.userCounts;

        const ctx = document.getElementById('userRegistrationChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: months,
                datasets: [{
                    label: 'Registered Users',
                    data: userCounts,
                    backgroundColor: 'rgba(75, 192, 192, 0.6)'
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
    });
