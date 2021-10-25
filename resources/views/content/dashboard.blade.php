@extends('templates.layout')
@section('title', 'Dashboard')
@section('content')
<div class="main">
    <div class="title">
        <h3>Dashboard</h3>
    </div>
    <div class="section-1">
        <div class="user">
            <div class="avatar">
                <img src="{{ asset ('img/Avatar.png') }}"/>
                <div class="circle"></div>
            </div>
            <div class="nm">
                <h5>John Doe</h5>
                <p><b>Kelas 7-A</b> | No. Absen 17</p>
            </div>
        </div>
        <div class="pengumuman">
            <div class="title">
                <h5>Daftar Pengumuman</h5>
            </div>
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list slider">
                        <li class="splide__slide card">
                            <img src="{{ asset ('img/news.png') }}" alt="true" />
                            <h5>Judul Pengumuman</h5>
                            <p>Senin, 20 Januari 2021</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare pretium placerat ut platea. Purus blandit integer sagittis massa vel est hac. </p>
                            <button>READ MORE</button>
                        </li>
                        <li class="splide__slide card">
                            <img src="{{ asset ('img/news.png') }}" alt="true" />
                            <h5>Judul Pengumuman</h5>
                            <p>Senin, 20 Januari 2021</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare pretium placerat ut platea. Purus blandit integer sagittis massa vel est hac. </p>
                            <button>READ MORE</button>
                        </li>
                        <li class="splide__slide card">
                            <img src="{{ asset ('img/news.png') }}" alt="true" />
                            <h5>Judul Pengumuman</h5>
                            <p>Senin, 20 Januari 2021</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare pretium placerat ut platea. Purus blandit integer sagittis massa vel est hac. </p>
                            <button>READ MORE</button>
                        </li>
                        <li class="splide__slide card">
                            <img src="{{ asset ('img/news.png') }}" alt="true" />
                            <h5>Judul Pengumuman</h5>
                            <p>Senin, 20 Januari 2021</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare pretium placerat ut platea. Purus blandit integer sagittis massa vel est hac. </p>
                            <button>READ MORE</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="jadwal">
        <div class="title">
            <h5>Jadwal Pelajaran</h5>
        </div>
        <div class="tipe-1">
            <div>
                <div class="label">Senin</div>
                <div class="deskripsi">
                    <h3>Fisika</h3>
                    <p>Jonathan Laura</p>
                    <p>08:00 - 10:00</p>
                </div>
            </div>
            <div>
                <div class="label">Selasa</div>
                <div class="deskripsi">
                    <h3>Matematika</h3>
                    <p>Jonathan Laura</p>
                    <p>08:00 - 10:00</p>
                </div>
            </div>
            <div>
                <div class="label">Rabu</div>
                <div class="deskripsi">
                    <h3>Kimia</h3>
                    <p>Jonathan Laura</p>
                    <p>08:00 - 10:00</p>
                </div>
            </div>
            <div>
                <div class="label">Kamis</div>
                <div class="deskripsi">
                    <h3>Biologi</h3>
                    <p>Jonathan Laura</p>
                    <p>08:00 - 10:00</p>
                </div>
            </div>
            <div>
                <div class="label">Jumat</div>
                <div class="deskripsi">
                    <h3>Bahasa Inggris</h3>
                    <p>Jonathan Laura</p>
                    <p>08:00 - 10:00</p>
                </div>
            </div>
            <div>
                <div class="label">Sabtu</div>
                <div class="deskripsi">
                    <h3>Bahasa Indonesia</h3>
                    <p>Jonathan Laura</p>
                    <p>08:00 - 10:00</p>
                </div>
            </div>
        </div>
        <div class="title">
            <h5>Jadwal Ulangan & Remidi</h5>
        </div>
        <div class="tipe-2">
            <div>
                <div class="label">Senin</div>
                <div class="deskripsi">
                    <div>
                        <h3>Fisika - 7A</h3>
                        <p>Jonathan Laura</p>
                        <p>08:00 - 10:00</p>
                    </div>
                    <label class="label-danger">Remidi</label>
                </div>
            </div>
            <div>
                <div class="label">Selasa</div>
                <div class="deskripsi">
                    <div>
                        <h3>Fisika - 7A</h3>
                        <p>Jonathan Laura</p>
                        <p>08:00 - 10:00</p>
                    </div>
                    <label class="label-success">Ulangan</label>
                </div>
            </div>
            <div>
                <div class="label">Rabu</div>
                <div class="deskripsi">
                    <div>
                        <h3>Fisika - 7A</h3>
                        <p>Jonathan Laura</p>
                        <p>08:00 - 10:00</p>
                    </div>
                    <label class="label-success">Ulangan</label>
                </div>
            </div>
            <div>
                <div class="label">Kamis</div>
                <div class="deskripsi">
                    <div>
                        <h3>Fisika - 7A</h3>
                        <p>Jonathan Laura</p>
                        <p>08:00 - 10:00</p>
                    </div>
                    <label class="label-success">Ulangan</label>
                </div>
            </div>
            <div>
                <div class="label">Jumat</div>
                <div class="deskripsi">
                    <div>
                        <h3>Fisika - 7A</h3>
                        <p>Jonathan Laura</p>
                        <p>08:00 - 10:00</p>
                    </div>
                    <label class="label-success">Ulangan</label>
                </div>
            </div>
            <div>
                <div class="label">Sabtu</div>
                <div class="deskripsi">
                    <div>
                        <h3>Fisika - 7A</h3>
                        <p>Jonathan Laura</p>
                        <p>08:00 - 10:00</p>
                    </div>
                    <label class="label-success">Ulangan</label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection