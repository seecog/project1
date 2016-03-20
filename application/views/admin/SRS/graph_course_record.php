<script class="code" type="text/javascript">$(document).ready(function () {
            
                $.jqplot.config.enablePlugins = true;
                var s1 = [500, 359, 600, 586];
                var ticks = ['Jan', 'Feb', 'March', 'April','May','June','July','August','Sept',"October"];

                plot1 = $.jqplot('chart1', [s1], {
                    // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
                    animate: !$.jqplot.use_excanvas,
                    seriesDefaults: {
                        renderer: $.jqplot.BarRenderer,
                        pointLabels: {show: true}
                    },
                    axes: {
                        xaxis: {
                            renderer: $.jqplot.CategoryAxisRenderer,
                            ticks: ticks
                        }
                    },
                    highlighter: {show: false}
                });

                $('#chart1').bind('jqplotDataClick',
                        function (ev, seriesIndex, pointIndex, data) {
                            var month = '';


                            if (pointIndex == 0)
                            {
                                //alert(pointIndex);
                                month = 'jan';
                                data = 500;
                            }
                            else if (pointIndex == 1)
                            {
                                month = 'feb';
                                data = 359;
                            }

                            else if (pointIndex == 2)
                            {
                                month = 'march';
                                data = 600;
                            }
                            else if (pointIndex == 3)
                            {
                                month = 'april';
                                data = 586;

                            }







                           // $('#info1').html('<font color="red" face=georgia size=3>Total no of hits in month  <b>' + month + '</b></font> =  ' + (data) + ' ');
                        }
                );
            });</script>






<center>
    <hr>
    <?php
    $this->load->view('admin/SRS/SRS_menu');
    ?>
    <hr>  
</center>
<center>

    <div style="width:800px;height:500px;">

        <div id="chart1" style="margin-top:20px; margin-left:20px; width:300px; height:300px;"></div>
        <pre class="code brush:js"></pre>

        


    </div>
</center>