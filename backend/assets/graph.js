import './scss/graph.scss';
import {
    Chart,
    registerables
} from 'chart.js';

Chart.register(...registerables);


const ctx = document.getElementById('performanceTrustChart').getContext('2d');
const chart = new Chart(ctx, {
    type: 'scatter',
    data: {
        datasets: [
            {
                label: 'High Performance / High Trust',
                data: [{ x: 3, y: 3 }],
                backgroundColor: 'var(--color-accent)'
            },
            {
                label: 'High Performance / Medium Trust',
                data: [{ x: 2, y: 3 }],
                backgroundColor: 'var(--color-muted)'
            },
            {
                label: 'High Performance / Low Trust',
                data: [{ x: 1, y: 3 }],
                backgroundColor: 'red'
            },
            // … add the other 6 squares here
        ]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    color: 'var(--color-text)' // legend text color
                }
            },
            tooltip: {
                backgroundColor: 'var(--color-surface)',
                titleColor: 'var(--color-text)',
                bodyColor: 'var(--color-text)'
            }
        },
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Trust (Off the battlefield)',
                    color: 'var(--color-text)'
                },
                min: 0,
                max: 3,
                ticks: {
                    stepSize: 1,
                    color: 'var(--color-text)'
                },
                grid: {
                    color: 'rgba(255,255,255,0.1)' // faint grid lines
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Performance (On the battlefield)',
                    color: 'var(--color-text)'
                },
                min: 0,
                max: 3,
                ticks: {
                    stepSize: 1,
                    color: 'var(--color-text)'
                },
                grid: {
                    color: 'rgba(255,255,255,0.1)'
                }
            }
        }
    }
});
