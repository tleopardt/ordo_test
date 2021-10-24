@extends('templates.layout')
@section('title', 'Profile')

@section('content')
<div class="profile">
  <div class="title">
    <h3>Profile</h3>
  </div>
  <div class="banner">
    <div class="notes">
      <div class="gif">
    <img src="{{ asset ('img/Union.png') }}" alt="true" />
      </div>
      <div class="desc">
        <h5>Notes!</h5>
        <p>Periksa data diri anda!<br />Jika terdapat ketidaksesuaian data segera hubungi admin untuk proses perbaikan</p>
      </div>
    </div>
    <div class="btn-info">
      <span class="material-icons">whatsapp</span>&nbsp;&nbsp;
      Hubungi Admin
    </div>
  </div>
  <div class="user">
      <div class="avatar">
          <img src="{{ asset ('img/Avatar.png') }}"/>
          <div class="circle"></div>
      </div>
      <div class="nm">
          <h5>John Doe</h5>
          <p><b>Kelas 7-A</b> | No. Absen 17</p>
      </div>
      <div class="biodata">
        <div class="biodata-list">
          <div>
            <div class="nm">
                <h5>Email</h5>
                <p>johndoe@email.com</p>
            </div>
            <div class="nm">
                <h5>Tanggal Lahir</h5>
                <p>20 Juli 1996</p>
            </div>
            <div class="nm">
                <h5>Nama Orang Tua/Wali</h5>
                <p>Simon Wijaya</p>
            </div>
          </div>
          <div>
            <div class="nm">
                <h5>NIP</h5>
                <p>197404011996031002</p>
            </div>
            <div class="nm">
                <h5>Umur</h5>
                <p>25 Tahun</p>
            </div>
            <div class="nm">
                <h5>Nomor Telepon Orang Tua</h5>
                <p>+62 822-1234-5678</p>
            </div>
          </div>
          <div>
            <div class="nm">
                <h5>Jenis Kelamin</h5>
                <p>Laki-laki</p>
            </div>
            <div class="nm">
                <h5>Agama</h5>
                <p>Islam</p>
            </div>
            <div class="nm">
                <h5>Tahun Masuk Sekolah</h5>
                <p>2018</p>
            </div>
          </div>
        </div>
        <div class="nm">
            <h5>Alamat</h5>
            <p>Jln. Merak Merpati No. 456, Tanah Abang, Jakarta Utara, DKI Jakarta</p>
        </div>
      </div>
  </div>
</div>
@endsection