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
	// Example Chartjs Line
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
	
  })();
  // Example Api Methods
  // -------------------
  (function() {
    var $example = $('#performancePieApi');
  })();

})(document, window, jQuery);