$(document).ready(function() {
	 /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
    var areaChartData = {
      labels  : ['Hoàng Mai', 'Đông Bắc', 'Quảng Ninh', 'Hải Phòng', 'Đà Nẵng', 'Hồ Chí Minh', 'Cần Thơ'],
      datasets: [
        {
          label               : 'Chi phí khấu hao tài sản',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Tổng chi phí',
          backgroundColor     : 'rgb(208, 0, 38, 1)',
          borderColor         : 'rgb(208, 0, 38, 1)',
          pointRadius         : false,
          pointColor          : 'rgb(208, 0, 38, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [127, 255, 76, 283, 317, 393, 165]
        },
        {
          label               : 'Chi phí mua mới tài sản',
          backgroundColor     : 'rgba(165, 220, 120, 1)',
          borderColor         : 'rgba(165, 220, 120, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(165, 220, 120, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [33, 69, 12, 88, 77, 122, 25]
        },
        {
          label               : 'Chi phí sửa chữa tài sản',
          backgroundColor     : 'rgba(122, 138, 100, 1)',
          borderColor         : 'rgba(122, 138, 100, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(122, 138, 100, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [33, 69, 12, 88, 77, 122, 25]
        },
        {
          label               : 'Chi phí vận hành',
          backgroundColor     : 'rgba(82, 102, 118, 1)',
          borderColor         : 'rgba(82, 102, 118, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(82, 102, 118, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [33, 69, 12, 88, 77, 122, 25]
        },
      ]
    }
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })
})