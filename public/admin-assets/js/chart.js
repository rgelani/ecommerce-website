$('document').ready(function(){
  var oilCanvas = document.getElementById("oilChart");

  Chart.defaults.global.defaultFontFamily = "Lato";
  Chart.defaults.global.defaultFontSize = 12;
  
  var oilData = {
      labels: [
          "Saudi Arabia",
          "Russia",
          "Iraq",
          "United Arab Emirates",
          "Canada"
      ],
      datasets: [
          {
              data: [133.3, 86.2, 52.2, 51.2, 50.2],
              backgroundColor: [
                  "#FF6384",
                  "#63FF84",
                  "#84FF63",
                  "#8463FF",
                  "#6384FF"
              ]
          }]
  };
  
  var pieChart = new Chart(oilCanvas, {
    type: 'pie',
    data: oilData,
    options: {
       responsive: true,
       legend: {
        display: false
      }
     }
  });
});


const dataSource = {
     chart: {
      
       xaxisname: "",
       yaxisname: "",
       numbersuffix: "00",
       theme: "fusion",
       fontColor:'#1f4173',
     },
     data: [
       {
         label: "Fashion",
         value: "290",
         color: "#1F4173",
         fontColor:'#1f4173',
         fontFamily:'Aclonica'
       },
       {
         label: "Electronics",
         value: "260",
         color: "#16C31E",
         fontColor:'#1f4173',
       },
       {
         label: "Home",
         value: "180",
         color: "#FF5F00",
         fontColor:'#1f4173',
       },
       {
         label: "Beauty & Personal Care",
         value: "140",
         color: "#1F4173",
         fontColor:'#1f4173',

       },
       {
         label: "Men's Grooming",
         value: "115",
         color: "#2E7CF6",
         fontColor:'#1f4173',

       },
       {
         label: "Nutrition & Health Care",
         value: "100",
         color: "#FFBD00",
         fontColor:'#1f4173',

       },
       {
         label: "Baby Care",
         value: "60",
         color: "#C31162",
         fontColor:'#1f4173',

       },
       {
         label: "Mobiles",
         value: "200",
         color: "#7F8699",
         fontColor:'#1f4173',

       },
       {
         label: "Toys & School Supplies",
         value: "30",
         color: "#6C69BF",
         fontColor:'#1f4173',

       },
       {
         label: "Sports & Fitness",
         value: "70",
         color: "#16B9C3",
         fontColor:'#1f4173',

       },
       {
         label: "Books & Music",
         value: "40",
         color: "#86BEE9",
         fontColor:'#1f4173',

       },
       {
         label: "Stationery & Office Supplies",
         value: "90",
         color: "#C016C3",
         fontColor:'#1f4173',

       }, 
       {
          label: "Auto Accessories",
          value: "90",
         color: "#D6D6D6",
         fontColor:'#1f4173',

        },
        {
          label: "Orgenics",
          value: "90",
         color: "#4562FE",
         fontColor:'#1f4173',

        }
     ]
   };
   
   FusionCharts.ready(function() {
     var myChart = new FusionCharts({
       type: "column2d",
       renderAt: "chart-container",
       width: "100%",
       height: "100%",
       dataFormat: "json",
       dataSource
     }).render();
   });

   var a = document('numbersuffix');
   alert(a.length)