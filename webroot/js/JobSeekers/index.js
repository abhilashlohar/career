/*!
 * remark v1.0.7 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(document, window, $) {
  'use strict';
  var Site = window.Site;
  $(document).ready(function($) {
    Site.run();
  });
  // Example Morris Donut
  // --------------------
  (function() {
    Morris.Donut({
      element: 'assesmentMorrisDonut',
      data: [{
        label: "\xa0 Recommended \xa0",
        value: 35
      }, {
        label: "\xa0 \xa0 Completed \xa0 \xa0",
        value: 48
      }, {
        label: "\xa0 \xa0 \xa0 UpComing \xa0 \xa0 \xa0",
        value: 22
      }, ],
      // barSizeRatio: 0.35,
      resize: true,
      colors: ["#8CD3A5", "#626262", "#045B93"]
    });
  })();
  (function() {
    Morris.Donut({
      element: 'recommendedMorrisDonut',
      data: [{
        label: "\xa0 \xa0 \xa0 Available \xa0 \xa0 \xa0",
        value: 35
      }, {
        label: "\xa0 Recommended \xa0",
        value: 48
      }, {
        label: "\xa0 \xa0 \xa0 \xa0 Applied \xa0 \xa0 \xa0 \xa0",
        value: 22
      }, ],
      // barSizeRatio: 0.35,
      resize: true,
     colors: ["#8CD3A5", "#626262", "#045B93"]
    });
  })();

	/*  Example Chartjs Line
	Chart.defaults.global.responsive = true;
	(function() {
    var doughnutDatas = [{
      value: 40,
      color: $.colors("green", 500),
      label: "Green"
    }, {
      value: 40,
      color: $.colors("blue-grey", 200),
      label: "Blue-grey"
    }, {
      value: 40,
      color: $.colors("primary", 500),
      label: "Blue"
    }];

    var myDoughnut = new Chart(document.getElementById("exampleChartjsDonut").getContext("2d")).Doughnut(doughnutDatas);
	
  })(); 
  (function() {
    var doughnutData = [{
      value: 40,
      color: $.colors("green", 500),
      label: "Green"
    }, {
      value: 40,
      color: $.colors("blue-grey", 200),
      label: "Blue-grey"
    }, {
      value: 40,
      color: $.colors("primary", 500),
      label: "Blue"
    }];

    var myDoughnut = new Chart(document.getElementById("recommendedChartjsDonut").getContext("2d")).Doughnut(doughnutData);
	
  })();*/
  // Example Api Methods
  // -------------------
  (function() {
    var $example = $('#performancePieApi');
  })();

})(document, window, jQuery);