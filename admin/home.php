<hr>
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-th-list"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Leads Records</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `purchase_order_list`")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-lightblue elevation-1"><i class="fas fa-th-list"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Deals</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `item_list` where `status` = 1")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-exchange-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Projects Records</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `back_order_list`")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-invoice-dollar"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Sales Records</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `sales_list`")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
   
    <?php if($_settings->userdata('type') == 1): ?>
    

    
        <style>
            .head{
                display: flex;
    gap: 50px;
    margin-top: 20px;
    height: 400px;
    width: 400px;
    background-color: chocolate;
}
.head h3{
    font-size: 24px;
	font-weight: 600;} 

    </style>
    <Script>// APEXCHART
var options = {
    series: [{
        name: 'series1',
  data: [31, 40, 28, 51, 42, 109, 100]
}, {
    name: 'series2',
    data: [11, 32, 45, 32, 34, 52, 41]
}],
  chart: {
      height: 350,
      type: 'area'
    },
    dataLabels: {
        enabled: false
    },
stroke: {
  curve: 'smooth'
},
xaxis: {
    type: 'datetime',
    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
},
tooltip: {
  x: {
      format: 'dd/MM/yy HH:mm'
},
},
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();</Script>
<?php endif; ?>
</div>
