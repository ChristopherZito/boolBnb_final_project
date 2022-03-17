@extends('layouts.main-layout')
@section('title')
    Grafico Statistiche
@endsection
@section('content')
<!-- Latest CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<section class="container">
    
    <div class="chart-container">
        <div class="bar-chart-container">
        <canvas id="bar-chart"></canvas>
        </div>
    </div>
    
    {{-- <a class="btn btn-primary btn-user-command"href="{{route('dashboard', $apartment -> id )}}">Dashboard</a> --}}
    <script> 
        $(function(){
            var cData = JSON.parse(`<?php echo $data; ?>`);
            // var cDataM 
            var ctx = $("#bar-chart");
            var chart1 = new Chart(ctx, {
                type: "bar",
                data: {
                labels: [
                    cData.label
                ],
                datasets: [
                    {
                    label: "Views",               //nome tabella
                    backgroundColor: '#ff0000',   //colore tabella
                    data: cData.data,      //dati tabella
                    },
                    {
                    label: "Message",             //nome tabella
                    backgroundColor: '#0000ff',   //colore tabella
                    data: cData.data,        //dati tabella
                    },
                ],
                },
                //options
                options: {
                responsive: true,
                legend: {
                    display: true,
                    position: "top",
                    labels: {
                        fontColor: "#333",
                        fontSize: 20
                    }
                }
                }
            });
        });
    </script>
</section>
@endsection