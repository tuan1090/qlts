$(document).ready(function() {
  var assetChartData = {
      labels  : ['Hoàng Mai', 'Đông Bắc', 'Quảng Ninh', 'Hải Phòng', 'Đà Nẵng', 'Hồ Chí Minh', 'Cần Thơ'],
      datasets: [
        {
          label               : 'Tổng chi phí',
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
          label               : 'Chi phí / đầu nhân sự',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label               : 'Chi phí / diện tích sàn',
          backgroundColor     : 'rgba(165, 220, 120, 1)',
          borderColor         : 'rgba(165, 220, 120, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(165, 220, 120, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [33, 69, 12, 88, 77, 122, 25]
        },
      ]
    }
    //-------------
    //- CHI PHÍ SỬ DỤNG TÀI SẢN THEO THÁNG -
    //-------------
    var useassetCanvas = $('#useasset').get(0).getContext('2d')
    var useassetData = jQuery.extend(true, {}, assetChartData)
    var temp0 = assetChartData.datasets[0]
    var temp1 = assetChartData.datasets[1]
    useassetData.datasets[0] = temp1
    useassetData.datasets[1] = temp0

    var useassetOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var useasset = new Chart(useassetCanvas, {
      type: 'bar', 
      data: useassetData,
      options: useassetOptions
    })

})