
<footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://codeintra.com" target="_blank">Nulled by codeintra.com</a>
              </div>
            </div>
         
          </div>
        </div>
      </footer>
    </div>
  </main>



  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
         
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <script>




//

'use strict';


   // JavaScript code to fetch data and display it
   fetch('get_total_users.php')
      .then(response => response.json())
      .then(data => {
        const totalUsers1 = data.totalUsersMon1;
        const totalUsers2 = data.totalUsersMon2;
        const totalUsers3 = data.totalUsersMon3;
        const totalUsers4 = data.totalUsersMon4;
        const totalUsers5 = data.totalUsersMon5;
        const totalUsers6 = data.totalUsersMon6;
        const totalUsers7 = data.totalUsersMon7;
        const totalUsers8 = data.totalUsersMon8;
        const totalUsers9 = data.totalUsersMon9;
        const totalUsers10 = data.totalUsersMon10;
        const totalUsers11 = data.totalUsersMon11;
        const totalUsers12 = data.totalUsersMon12;

        //Withdrawal
        const ConsWithdrawal1 = data.withdrawalMonts1;
        const ConsWithdrawal2 = data.withdrawalMonts2;
        const ConsWithdrawal3 = data.withdrawalMonts3;
        const ConsWithdrawal4 = data.withdrawalMonts4;
        const ConsWithdrawal5 = data.withdrawalMonts5;
        const ConsWithdrawal6 = data.withdrawalMonts6;
        const ConsWithdrawal7 = data.withdrawalMonts7;
        const ConsWithdrawal8 = data.withdrawalMonts8;
        const ConsWithdrawal9 = data.withdrawalMonts9;
        const ConsWithdrawal10 = data.withdrawalMonts10;
        const ConsWithdrawal11 = data.withdrawalMonts11;
        const ConsWithdrawal12 = data.withdrawalMonts12;

        //membership
        const Consmembership4 = data.membershipre4;
        const Consmembership5 = data.membershipre5;
        const Consmembership6 = data.membershipre6;
        const Consmembership7 = data.membershipre7;
        const Consmembership8 = data.membershipre8;
        const Consmembership9 = data.membershipre9;
        const Consmembership10 = data.membershipre10;
        const Consmembership11 = data.membershipre11;
        const Consmembership12 = data.membershipre12;
 

        (function () {


var ctx = document.getElementById("chart-bars").getContext("2d");

new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Withdrawal",
      tension: 0.4,
      borderWidth: 0,
      borderRadius: 4,
      borderSkipped: false,
      backgroundColor: "#fff",
      data: [Consmembership4, Consmembership5, Consmembership6, Consmembership7, Consmembership8, Consmembership9, Consmembership10, Consmembership11, Consmembership12],
      maxBarThickness: 6
    }, ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: false,
      }
    },
    interaction: {
      intersect: false,
      mode: 'index',
    },
    scales: {
      y: {
        grid: {
          drawBorder: false,
          display: false,
          drawOnChartArea: false,
          drawTicks: false,
        },
        ticks: {
          suggestedMin: 0,
          suggestedMax: 500,
          beginAtZero: true,
          padding: 15,
          font: {
            size: 14,
            family: "Open Sans",
            style: 'normal',
            lineHeight: 2
          },
          color: "#fff"
        },
      },
      x: {
        grid: {
          drawBorder: false,
          display: false,
          drawOnChartArea: false,
          drawTicks: false
        },
        ticks: {
          display: false
        },
      },
    },
  },
});


var ctx2 = document.getElementById("chart-line").getContext("2d");

var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

new Chart(ctx2, {
  type: "line",
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October","November", "December" ],
    datasets: [{
        label: "Users",
        tension: 0.4,
        borderWidth: 0,
        pointRadius: 0,
        borderColor: "#cb0c9f",
        borderWidth: 3,
        backgroundColor: gradientStroke1,
        fill: true,
        data: [totalUsers1, totalUsers2, totalUsers3, totalUsers4, totalUsers5, totalUsers6, totalUsers7, totalUsers8, totalUsers9, totalUsers10, totalUsers11, totalUsers12],
        maxBarThickness: 6

      },
      {
        label: "Withdrawal",
        tension: 0.4,
        borderWidth: 0,
        pointRadius: 0,
        borderColor: "#3A416F",
        borderWidth: 3,
        backgroundColor: gradientStroke2,
        fill: true,
        data: [ConsWithdrawal1, ConsWithdrawal2, ConsWithdrawal3, ConsWithdrawal4, ConsWithdrawal5, ConsWithdrawal6, ConsWithdrawal7, ConsWithdrawal8, ConsWithdrawal9, ConsWithdrawal10, ConsWithdrawal11, ConsWithdrawal12],
        maxBarThickness: 6
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: false,
      }
    },
    interaction: {
      intersect: false,
      mode: 'index',
    },
    scales: {
      y: {
        grid: {
          drawBorder: false,
          display: true,
          drawOnChartArea: true,
          drawTicks: false,
          borderDash: [5, 5]
        },
        ticks: {
          display: true,
          padding: 10,
          color: '#b2b9bf',
          font: {
            size: 11,
            family: "Open Sans",
            style: 'normal',
            lineHeight: 2
          },
        }
      },
      x: {
        grid: {
          drawBorder: false,
          display: false,
          drawOnChartArea: false,
          drawTicks: false,
          borderDash: [5, 5]
        },
        ticks: {
          display: true,
          color: '#b2b9bf',
          padding: 20,
          font: {
            size: 11,
            family: "Open Sans",
            style: 'normal',
            lineHeight: 2
          },
        }
      },
    },
  },
});


})();



      })
      .catch(error => {
        console.error('Error retrieving totalUsers:', error);
      });


      
//






  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>