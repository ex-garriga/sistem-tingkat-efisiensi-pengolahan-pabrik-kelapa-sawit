<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>3 Input</h3>

        <p>Jumlah Karyawan, Kapasitas Produksi, TBS Masuk</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="data_variabel" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>2 Output<sup style="font-size: 20px"></sup></h3>

        <p>Produksi CPO, Produksi Kernel</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="data_variabel" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>8 DMU</h3>

        <p>Pabrik Kelapa Sawit</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="data_dmu" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

</div>
<!-- ./col -->

<!-- /.row -->

<div class="row">
  <div class="col-lg-4 col-6">
    <canvas id="myChart"></canvas>
  </div>
  <div class="col-lg-4 col-6">
    <canvas id="tbs"></canvas>
  </div>
  <div class="col-lg-4 col-6">
    <canvas id="cpo"></canvas>
  </div>
</div>
<div class="row">
  <div class="col-lg-4 col-6">
    <canvas id="kernel"></canvas>
  </div>
  <div class="col-lg-4 col-6">
    <canvas id="efisiensi"></canvas>
  </div>
</div>

<script>
  // setup statistik jumlah karyawan
  const data = {
    labels: ['ESM', 'NFS', 'SCF', 'RPP', 'DM', 'SSM', 'PLB II', 'PLB I'],
    datasets: [{
      label: 'Statistik Jumlah Karyawan',
      data: [34, 47, 54, 43, 47, 46, 32, 52],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  };

  // config statistik jumlah karyawan
  const config = {
    type: 'line',
    data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };

  // render statistik jumlah karyawan
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

  // setup statistik TBS
  const data2 = {
    labels: ['ESM', 'NFS', 'SCF', 'RPP', 'DM', 'SSM', 'PLB II', 'PLB I'],
    datasets: [{
      label: 'Statistik Tandan Buah Segar',
      data: [94.436, 117.467, 94.940, 168.126, 216.293, 163.928, 195.411, 241.744],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  };
  // config statistik TBS
  const config2 = {
    type: 'line',
    data: data2,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };

  // render statistik TBS
  const tbs = new Chart(
    document.getElementById('tbs'),
    config2
  );

  // setup statistik cpo
  const data3 = {
    labels: ['ESM', 'NFS', 'SCF', 'RPP', 'DM', 'SSM', 'PLB II', 'PLB I'],
    datasets: [{
      label: 'Statistik Crude Palm Oil',
      data: [16.445, 23.110, 21.317, 34.370, 41.679, 29.106, 35.044, 44.769],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  };
  // config statistik cpo
  const config3 = {
    type: 'line',
    data: data3,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };

  // render statistik cpo
  const cpo = new Chart(
    document.getElementById('cpo'),
    config3
  );

  // setup statistik kernel
  const data4 = {
    labels: ['ESM', 'NFS', 'SCF', 'RPP', 'DM', 'SSM', 'PLB II', 'PLB I'],
    datasets: [{
      label: 'Statistik Kernel',
      data: [3.659, 4.128, 3.737, 13.395, 10.220, 6.942, 8.523, 9.317],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  };
  // config statistik kernel
  const config4 = {
    type: 'line',
    data: data4,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };

  // render statistik kernel
  const kernel = new Chart(
    document.getElementById('kernel'),
    config4
  );

  // setup statistik kernel
  const data5 = {
    labels: ['ESM', 'NFS', 'SCF', 'RPP', 'DM', 'SSM', 'PLB II', 'PLB I'],
    datasets: [{
      label: 'Statistik Rasio Efisiensi',
      data: [0.7923516, 0.8775411, 1.0000000, 1.0000000, 1.0000000, 0.8734707, 0.8411532, 0.8934275],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  };
  // config statistik kernel
  const config5 = {
    type: 'line',
    data: data5,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };

  // render statistik efisiensi
  const efisensi = new Chart(
    document.getElementById('efisiensi'),
    config5
  );
</script>