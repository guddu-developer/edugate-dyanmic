<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
<script src="js/morioh.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.4.0/dist/perfect-scrollbar.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/highcharts@8.0.0/highcharts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-knob@1.2.11/dist/jquery.knob.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-sparkline@2.4.0/jquery.sparkline.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/peity@3.3.0/jquery.peity.min.js"></script>





<script>
    $(function() {

        // $('#modal-download').modal('show');




        $(".bar").peity("bar");


        // knob

        $(".knob").knob();


        // sparkline bar
        $('.sparkline-bar').sparkline('html', {
            type: 'bar',
            barWidth: 10,
            height: 65,
            barColor: '#3b73da',
            chartRangeMax: 12
        });

        $('.sparkline-line').sparkline('html', {
            width: 120,
            height: 65,
            lineColor: '#3b73da',
            fillColor: false
        });

        /************** AREA CHARTS ********************/


        $('.sparkline-area').sparkline('html', {
            width: 120,
            height: 65,
            lineColor: '#3b73da',
            fillColor: 'rgba(59, 115, 218,0.2)'
        });


        $('.sparkline').sparkline('html', {
            width: '100%',
            height: 80,
            lineColor: '#3b73da',
            fillColor: 'rgba(59, 115, 218,0.2)'
        });



   



    })
</script>
