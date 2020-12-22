@extends('layouts.main')
@extends('layouts.side-bar')

@section('content')




<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h4 class="card-title">
                    Kesejahteraan Masyarakat
                </h4>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="m-t-50" style="height: 300px">
                    <canvas class="chart" id="line"></canvas>
                </div>
            </div>
            <div class="col-6">
                <div class="table-responsive mt-5">
                    <table class="table table-bordered" id="table">
                        <thead style="text-align: right;">
                            <tr>
                                <th>2016</th>
                                <th>2017</th>
                                <th>2018</th>
                                <th>2019</th>
                                <th>2020</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center;background: rgba(41, 53, 29, 0.041)">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection

@section('js')
<script src="{{ asset ('assets/vendors/chartjs/Chart.min.js')}}"></script>

<script>
$(document).ready(function(){





        $.ajax({
                url: "{{ url('/statistik/dataKm') }}",
                method: "GET",
                success: function(data) {

                    var dataLine = []

                    var tbodyRef = document.getElementById('table').getElementsByTagName('tbody')[0];
                    var newRow = tbodyRef.insertRow();
                    for (var i in data) {


                        var newCell = newRow.insertCell();
                        var newText = document.createTextNode(data[i]);
                        newCell.appendChild(newText);

                        dataLine.push(data[i]);
                    }


                    var Labels = [2016,2017,2018,2019,2020]
                    var line = document.getElementById('line').getContext('2d');
                    var myLineChart2 = new Chart(line, {
                        type: 'line',
                        data: {
                            labels: Labels,
                            datasets: [{
                                label: 'jumlah data',
                                data: dataLine,
                                fill:false,
                                borderColor: 'rgb(75, 192, 192)',

                            }],
                        },
                        options: {
                            legend: {
                                display: false,
                            },
                            scales:{
                                xAxes: [{
                                    display: true,
                                }],
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        // callback: function(value, index, values) {
                                        //     return Intl.NumberFormat().format((value/1000)) + 'K';
                                        // },
                                    }
                                }]
                            }
                        }

                    });
                }
            });

})
</script>

@endsection
