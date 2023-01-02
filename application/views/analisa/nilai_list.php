<h2 style="margin-top:0px">Analisa DEA</h2>
<div class="row" style="margin-bottom: 10px">
  <div class="col-md-4">

  </div>
  <div class="col-md-4 text-center">
    <div style="margin-top: 8px" id="message">
      <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
    </div>
  </div>
  <div class="col-md-1 text-right">
  </div>
  <div class="col-md-3 text-right">
    <form action="<?php echo site_url('nilai/index'); ?>" class="form-inline" method="get">
      <div class="input-group">
        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
        <span class="input-group-btn">
          <?php
          if ($q <> '') {
          ?>
            <a href="<?php echo site_url('nilai'); ?>" class="btn btn-default">Reset</a>
          <?php
          }
          ?>
          <button class="btn btn-primary" type="submit">Search</button>
        </span>
      </div>
    </form>
  </div>
</div>
<table class="table table-bordered" style="margin-bottom: 10px">
  <tr>
    <th>No</th>
    <th>Nama Dmu</th>
    <th>Jumlah Karyawan</th>
    <th>Shiff Kerja</th>
    <th>Kapasitas Produksi (Ton/Jam)</th>
    <th>Tbs Masuk (Ton)</th>
    <th>Produksi CPO (Ton)</th>
    <th>Produksi Karnel (Ton)</th>
    <th>Action</th>
  </tr>

  <tr>
    <td>1</td>
    <td>PT. ENSEM LESTARI</td>
    <td>34</td>
    <td>2</td>
    <td>30</td>
    <td>94.436</td>
    <td>16.445</td>
    <td>3.659</td>
    <td style="text-align:center" width="50px">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ensem">
        Analisa
      </button>
    </td>
  </tr>

  <tr>
    <td>2</td>
    <td>PT. NAFASINDO</td>
    <td>47</td>
    <td>2</td>
    <td>30</td>
    <td>117.467</td>
    <td>23.110</td>
    <td>4.128</td>
    <td style="text-align:center" width="50px">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nafasindo">
        Analisa
      </button>
    </td>
  </tr>

  <tr>
    <td>3</td>
    <td>PT. SOCFINDO</td>
    <td>54</td>
    <td>2</td>
    <td>23</td>
    <td>94.940</td>
    <td>21.317</td>
    <td>3.737</td>
    <td style="text-align:center" width="50px">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#socfindo">
        Analisa
      </button>
    </td>
  </tr>

  <tr>
    <td>4</td>
    <td>PT. RUNDING PUTRA PERSADA</td>
    <td>43</td>
    <td>2</td>
    <td>45</td>
    <td>168.126</td>
    <td>34.370</td>
    <td>13.395</td>
    <td style="text-align:center" width="50px">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rpp">
        Analisa
      </button>
    </td>
  </tr>

  <tr>
    <td>5</td>
    <td>PT. DELIMA MAKMUR</td>
    <td>47</td>
    <td>2</td>
    <td>30</td>
    <td>216.293</td>
    <td>41.679</td>
    <td>10.220</td>
    <td style="text-align:center" width="50px">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dm">
        Analisa
      </button>
    </td>
  </tr>

  <tr>
    <td>6</td>
    <td>PT. SINGKIL SEJAHTERA MAKMUR</td>
    <td>46</td>
    <td>2</td>
    <td>30</td>
    <td>163.928</td>
    <td>29.106</td>
    <td>6.942</td>
    <td style="text-align:center" width="50px">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#smm">
        Analisa
      </button>
    </td>
  </tr>

  <tr>
    <td>7</td>
    <td>PT. PERKEBUNAN LEMBAH BHAKTI II</td>
    <td>32</td>
    <td>2</td>
    <td>45</td>
    <td>195.411</td>
    <td>35.044</td>
    <td>8.523</td>
    <td style="text-align:center" width="50px">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#plb2">
        Analisa
      </button>
    </td>
  </tr>

  <tr>
    <td>8</td>
    <td>PT. PERKEBUNAN LEMBAH BHAKTI I</td>
    <td>52</td>
    <td>2</td>
    <td>45</td>
    <td>241.744</td>
    <td>44.769</td>
    <td>9.317</td>
    <td style="text-align:center" width="50px">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#plb1">
        Analisa
      </button>
    </td>
  </tr>


</table>
<div class="row">
  <div class="col-md-6">
    <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>

  </div>
  <div class="col-md-6 text-right">
    <?php echo $pagination ?>
  </div>
</div>





<!-- ensem -->
<div class="modal fade" id="ensem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Analisa ENSEM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" style="margin-bottom: 10px">
          <tr>
            <th colspan="2">Output </th>
            <th colspan="3">Input</th>
            <th colspan="1">Hasil</th>

          </tr>
          <tr>
            <th>V1</th>
            <th>V2</th>
            <th>U1</th>
            <th>U2</th>
            <th>U3</th>
            <th>Rasio Efesiensi</th>
          </tr>

          <tr>
            <td>0.000043</td>
            <td>0.000022</td>
            <td>0</td>
            <td>0</td>
            <td>0.000011</td>
            <td>0.7923516</td>
          </tr>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hasilEnsem">
          Perhitungan
        </button>
      </div>
    </div>
  </div>
</div>

<!--perhitungan ensem -->
<div class="modal fade" id="hasilEnsem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perhitungan ENSEM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maximize Z = 16445V1 + 3659V2 + 0U1 + 0U2 + 0U3 <br>
        Subject to <br>
        34U1 + 30U2 + 94436U3 = 1 <br>
        44769V1 + 9317V2 + 57U1 - 45U2 - 241744U3 <=0 <br>
          35044V1 + 8523V2 + 32U1 - 45U2 - 195411U3 <=0 <br>
            29106V1 + 6942V2 + 46U1 - 30U2 - 163928U3 <=0 <br>
              41679V1 + 10220V2 + 47U1 - 30U2 - 216293U3 <=0 <br>
                34370V1 + 13395V2 + 43U1 - 45U2 - 168126U3 <=0 <br>
                  21317V1 + 3737V2 + 54U1 - 23U2 - 94940U3 <=0 <br>
                    23110V1 + 4128V2 + 47U1 - 30U2 - 117467U3 <=0 <br>
                      16445V1 + 3659V2 + 34U1 - 30U2 - 94436U3 <=0 <br>
                        U1 >= 0, U2 >= 0, U3 >= 0, U4 >=0, V1 >= 0, V2 >=0 <br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- nafasindo -->
<div class="modal fade" id="nafasindo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Analisa NAFASINDO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" style="margin-bottom: 10px">
          <tr>
            <th colspan="2">Output </th>
            <th colspan="3">Input</th>
            <th colspan="1">Hasil</th>

          </tr>
          <tr>
            <th>V1</th>
            <th>V2</th>
            <th>U1</th>
            <th>U2</th>
            <th>U3</th>
            <th>Rasio Efesiensi</th>
          </tr>

          <tr>
            <td>0.000035 </td>
            <td>0.000017</td>
            <td>0</td>
            <td>0.000000</td>
            <td>0.000009 </td>
            <td>0.8775411</td>
          </tr>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hasilNafasindo">
          Perhitungan
        </button>
      </div>
    </div>
  </div>
</div>

<!--perhitungan ensem -->
<div class="modal fade" id="hasilNafasindo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perhitungan NAFASINDO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maximize Z = 23110V1 + 4128V2 + 0U1 + 0U2 + 0U3 <br>
        Subject to<br>
        47U1 + 30U2 + 117467U3 = 1<br>
        44769V1 + 9317V2 + 57U1 - 45U2 - 241744U3 <=0<br>
          35044V1 + 8523V2 + 32U1 - 45U2 - 195411U3 <=0<br>
            29106V1 + 6942V2 + 46U1 - 30U2 - 163928U3 <=0<br>
              41679V1 + 10220V2 + 47U1 - 30U2 - 216293U3 <=0<br>
                34370V1 + 13395V2 + 43U1 - 45U2 - 168126U3 <=0<br>
                  21317V1 + 3737V2 + 54U1 - 23U2 - 94940U3 <=0<br>
                    23110V1 + 4128V2 + 47U1 - 30U2 - 117467U3 <=0<br>
                      16445V1 + 3659V2 + 34U1 - 30U2 - 94436U3 <=0<br>
                        U1 >= 0, U2 >= 0, U3 >= 0, U4 >=0, V1 >= 0, V2 >=0<br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- socfindo -->
<div class="modal fade" id="socfindo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Analisa SOCFINDO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" style="margin-bottom: 10px">
          <tr>
            <th colspan="2">Output </th>
            <th colspan="3">Input</th>
            <th colspan="1">Hasil</th>

          </tr>
          <tr>
            <th>V1</th>
            <th>V2</th>
            <th>U1</th>
            <th>U2</th>
            <th>U3</th>
            <th>Rasio Efesiensi</th>
          </tr>

          <tr>
            <td>0.000047</td>
            <td>0.000000 </td>
            <td>0</td>
            <td>0.000000</td>
            <td>0.000011</td>
            <td>1.0000000</td>
          </tr>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hasilSocfindo">
          Perhitungan
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="hasilSocfindo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perhitungan SOCFINDO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maximize Z = 21317V1 + 3737V2 + 0U1 + 0U2 + 0U3 <br>
        Subject to<br>
        54U1 + 23U2 + 94940U3 = 1<br>
        44769V1 + 9317V2 + 57U1 - 45U2 - 241744U3 <=0<br>
          35044V1 + 8523V2 + 32U1 - 45U2 - 195411U3 <=0<br>
            29106V1 + 6942V2 + 46U1 - 30U2 - 163928U3 <=0<br>
              41679V1 + 10220V2 + 47U1 - 30U2 - 216293U3 <=0<br>
                34370V1 + 13395V2 + 43U1 - 45U2 - 168126U3 <=0<br>
                  21317V1 + 3737V2 + 54U1 - 23U2 - 94940U3 <=0<br>
                    23110V1 + 4128V2 + 47U1 - 30U2 - 117467U3 <=0<br>
                      16445V1 + 3659V2 + 34U1 - 30U2 - 94436U3 <=0<br>
                        U1 >= 0, U2 >= 0, U3 >= 0, U4 >=0, V1 >= 0, V2 >=0<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- rpp -->
<div class="modal fade" id="rpp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Analisa RPP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" style="margin-bottom: 10px">
          <tr>
            <th colspan="2">Output </th>
            <th colspan="3">Input</th>
            <th colspan="1">Hasil</th>

          </tr>
          <tr>
            <th>V1</th>
            <th>V2</th>
            <th>U1</th>
            <th>U2</th>
            <th>U3</th>
            <th>Rasio Efesiensi</th>
          </tr>

          <tr>
            <td>0.000023</td>
            <td>0.000015</td>
            <td>0</td>
            <td>0.005948</td>
            <td>0.000004 </td>
            <td>1.0000000</td>
          </tr>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hasilRpp">
          Perhitungan
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="hasilRpp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perhitungan RPP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maximize Z = 34370V1 + 13395V2 + 0U1 + 0U2 + 0U3 <br>
        Subject to<br>
        43U1 + 45U2 + 168126U3 = 1 <br>
        44769V1 + 9317V2 + 57U1 - 45U2 - 241744U3 <=0 <br>
          35044V1 + 8523V2 + 32U1 - 45U2 - 195411U3 <=0 <br>
            29106V1 + 6942V2 + 46U1 - 30U2 - 163928U3 <=0 <br>
              41679V1 + 10220V2 + 47U1 - 30U2 - 216293U3 <=0 <br>
                34370V1 + 13395V2 + 43U1 - 45U2 - 168126U3 <=0 <br>
                  21317V1 + 3737V2 + 54U1 - 23U2 - 94940U3 <=0 <br>
                    23110V1 + 4128V2 + 47U1 - 30U2 - 117467U3 <=0 <br>
                      16445V1 + 3659V2 + 34U1 - 30U2 - 94436U3 <=0 <br>
                        U1 >= 0, U2 >= 0, U3 >= 0, U4 >=0, V1 >= 0, V2 >=0 <br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- dm -->
<div class="modal fade" id="dm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Analisa DM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" style="margin-bottom: 10px">
          <tr>
            <th colspan="2">Output </th>
            <th colspan="3">Input</th>
            <th colspan="1">Hasil</th>

          </tr>
          <tr>
            <th>V1</th>
            <th>V2</th>
            <th>U1</th>
            <th>U2</th>
            <th>U3</th>
            <th>Rasio Efesiensi</th>
          </tr>

          <tr>
            <td>0.000021</td>
            <td>0.000014</td>
            <td>0</td>
            <td>0.005308</td>
            <td>0.000004 </td>
            <td>1.0000000</td>
          </tr>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hasilDM">
          Perhitungan
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="hasilDM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perhitungan DM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maximize Z = 41679V1 + 10220V2 + 0U1 + 0U2 + 0U3 <br>
        Subject to<br>
        47U1 + 30U2 + 216293U3 = 1<br>
        44769V1 + 9317V2 + 57U1 - 45U2 - 241744U3 <=0<br>
          35044V1 + 8523V2 + 32U1 - 45U2 - 195411U3 <=0<br>
            29106V1 + 6942V2 + 46U1 - 30U2 - 163928U3 <=0<br>
              41679V1 + 10220V2 + 47U1 - 30U2 - 216293U3 <=0<br>
                34370V1 + 13395V2 + 43U1 - 45U2 - 168126U3 <=0<br>
                  21317V1 + 3737V2 + 54U1 - 23U2 - 94940U3 <=0<br>
                    23110V1 + 4128V2 + 47U1 - 30U2 - 117467U3 <=0<br>
                      16445V1 + 3659V2 + 34U1 - 30U2 - 94436U3 <=0<br>
                        U1 >= 0, U2 >= 0, U3 >= 0, U4 >=0, V1 >= 0, V2 >=0<br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- smm -->
<div class="modal fade" id="smm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Analisa SMM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" style="margin-bottom: 10px">
          <tr>
            <th colspan="2">Output </th>
            <th colspan="3">Input</th>
            <th colspan="1">Hasil</th>

          </tr>
          <tr>
            <th>V1</th>
            <th>V2</th>
            <th>U1</th>
            <th>U2</th>
            <th>U3</th>
            <th>Rasio Efesiensi</th>
          </tr>

          <tr>
            <td>0.000026</td>
            <td>0.000017 </td>
            <td>0</td>
            <td>0.006665 </td>
            <td>0.000005</td>
            <td>0.8734707</td>
          </tr>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hasilSmm">
          Perhitungan
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="hasilSmm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perhitungan SMM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maximize Z = 29106V1 + 6942V2 + 0U1 + 0U2 + 0U3 <br>
        Subject to<br>
        46U1 + 30U2 + 163928U3 = 1<br>
        44769V1 + 9317V2 + 57U1 - 45U2 - 241744U3 <=0<br>
          35044V1 + 8523V2 + 32U1 - 45U2 - 195411U3 <=0<br>
            29106V1 + 6942V2 + 46U1 - 30U2 - 163928U3 <=0<br>
              41679V1 + 10220V2 + 47U1 - 30U2 - 216293U3 <=0<br>
                34370V1 + 13395V2 + 43U1 - 45U2 - 168126U3 <=0<br>
                  21317V1 + 3737V2 + 54U1 - 23U2 - 94940U3 <=0<br>
                    23110V1 + 4128V2 + 47U1 - 30U2 - 117467U3 <=0<br>
                      16445V1 + 3659V2 + 34U1 - 30U2 - 94436U3 <=0<br>
                        U1 >= 0, U2 >= 0, U3 >= 0, U4 >=0, V1 >= 0, V2 >=0<br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- plb2 -->
<div class="modal fade" id="plb2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Analisa PLB II</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" style="margin-bottom: 10px">
          <tr>
            <th colspan="2">Output </th>
            <th colspan="3">Input</th>
            <th colspan="1">Hasil</th>

          </tr>
          <tr>
            <th>V1</th>
            <th>V2</th>
            <th>U1</th>
            <th>U2</th>
            <th>U3</th>
            <th>Rasio Efesiensi</th>
          </tr>

          <tr>
            <td>0.000021</td>
            <td>0.000014 </td>
            <td>0</td>
            <td>0.005316 </td>
            <td>0.000004</td>
            <td>0.8411532</td>
          </tr>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hasilPlb2">
          Perhitungan
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="hasilPlb2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perhitungan PLB II</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maximize Z = 35044V1 + 8523V2 + 0U1 + 0U2 + 0U3 <br>
        Subject to<br>
        32U1 + 45U2 + 195411U3 = 1<br>
        44769V1 + 9317V2 + 57U1 - 45U2 - 241744U3 <=0<br>
          35044V1 + 8523V2 + 32U1 - 45U2 - 195411U3 <=0<br>
            29106V1 + 6942V2 + 46U1 - 30U2 - 163928U3 <=0<br>
              41679V1 + 10220V2 + 47U1 - 30U2 - 216293U3 <=0<br>
                34370V1 + 13395V2 + 43U1 - 45U2 - 168126U3 <=0<br>
                  21317V1 + 3737V2 + 54U1 - 23U2 - 94940U3 <=0<br>
                    23110V1 + 4128V2 + 47U1 - 30U2 - 117467U3 <=0<br>
                      16445V1 + 3659V2 + 34U1 - 30U2 - 94436U3 <=0<br>
                        U1 >= 0, U2 >= 0, U3 >= 0, U4 >=0, V1 >= 0, V2 >=0<br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- plb1 -->
<div class="modal fade" id="plb1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Analisa PLB I</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" style="margin-bottom: 10px">
          <tr>
            <th colspan="2">Output</th>
            <th colspan="3">Input</th>
            <th colspan="1">Hasil</th>

          </tr>
          <tr>
            <th>V1</th>
            <th>V2</th>
            <th>U1</th>
            <th>U2</th>
            <th>U3</th>
            <th>Rasio Efesiensi</th>
          </tr>

          <tr>
            <td>0.000020</td>
            <td>0.000000</td>
            <td>0</td>
            <td>0.006135</td>
            <td>0.000003 </td>
            <td>0.8934275</td>
          </tr>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hasilPlb1">
          Perhitungan
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="hasilPlb1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perhitungan PLB I</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maximize Z = 44769V1 + 9317V2 + 0U1 + 0U2 + 0U3 <br>
        Subject to <br>
        57U1 + 45U2 + 241744U3 = 1 <br>
        44769V1 + 9317V2 + 57U1 - 45U2 - 241744U3 <=0 <br>
          35044V1 + 8523V2 + 32U1 - 45U2 - 195411U3 <=0 <br>
            29106V1 + 6942V2 + 46U1 - 30U2 - 163928U3 <=0 <br>
              41679V1 + 10220V2 + 47U1 - 30U2 - 216293U3 <=0<br>
                34370V1 + 13395V2 + 43U1 - 45U2 - 168126U3 <=0<br>
                  21317V1 + 3737V2 + 54U1 - 23U2 - 94940U3 <=0<br>
                    23110V1 + 4128V2 + 47U1 - 30U2 - 117467U3 <=0<br>
                      16445V1 + 3659V2 + 34U1 - 30U2 - 94436U3 <=0<br>
                        U1 >= 0, U2 >= 0, U3 >= 0, U4 >=0, V1 >= 0, V2 >=0<br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>