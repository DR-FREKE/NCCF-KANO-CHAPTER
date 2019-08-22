// var x = [];
// var x2 = [];
// var y = [];
// var y2 = [];
// for (var i = 0; i < 500; i++) {
//     k = Math.random();
//     x.push(k * 5);
//     x2.push(k * 10);
// }

// var trace = {
//     x: x,
//     name: 'year1',
//     autobinx: false,
//     type: 'histogram',
// };
// var trace2 = {
//     x: x2,
//     name: 'year2',
//     autobinx: false,
//     type: 'histogram',
// }
// var data = [trace, trace2];
// Plotly.newPlot('mGraph', data);
function doFirst() {
    var graph = document.getElementById('mGraph').getContext('2d');
    var chart = new Chart(graph, {
        //the type of graph we are trying to plot
        type: 'line',
        // The data for our dataset
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'transparent',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45]
            }]
        },
    });
}
window.addEventListener('load', doFirst, false);